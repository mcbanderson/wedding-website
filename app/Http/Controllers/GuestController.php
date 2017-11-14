<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use Response;

class GuestController extends Controller
{
    /**
     * Handle RSVP for guests
     *
     * @param  Request $request Contains guests RSVPing
     * @return Response         The http response
     */
    public function rsvp(Request $request) {
        foreach($request->guests as $guest) {
            $attendee = Guest::find($guest["id"]);
            $plusOneAttending = ($request->plus_one_is_attending != 'false');
            if($attendee->plus_one && $plusOneAttending) {
                $plusOne = Guest::create([
                    'name' => $request->plus_one_name,
                    'is_attending' => $plusOneAttending,
                    'dietary_restrictions' => $request->plus_one_dietary_restrictions,
                    'email' => $request->plus_one_email_address,
                    'plus_one' => false
                ]);
                $attendee->associatedGuests()->attach($plusOne);
                $plusOne->associatedGuests()->attach($attendee);
            }
            $isAttending = ($guest["is_attending"] != 'false');
            $attendee->is_attending = $isAttending;
            $attendee->email = $guest["email_address"];
            $attendee->dietary_restrictions = $guest["dietary_restrictions"];
            $attendee->save();
        }

        return Response::json(['success' => true]);
    }

    /**
     * Return the guest with the provided name, as well
     * as all associated guests.
     *
     * @param  Request $request The http request (must contain name)
     * @return Response         The http response (contains guest and associated guests)
     */
    public function find(Request $request) {
        $guest = Guest::where('name', strtolower($request->name))->first();

        if(is_null($guest)) {
            return Response::json([
                'message' => "We were unable to find you. Please ensure your
                              name is spelled as it appeared on your invitation
                              and try again. If you continue receiving this
                              error RSVP by emailing Max at:
                              max@andersonhendrixwedding.com"
            ], 400);
        }

        $associatedGuests = $guest->associatedGuests;
        $plusOne = $guest->plus_one;

        return Response::json([
            'guest' => $guest,
            'associated_guests' => $associatedGuests,
            'plus_one' => $plusOne
        ]);
    }
}
