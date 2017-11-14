<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Song;

class SongController extends Controller
{
    /**
     * Store the song request in the database
     *
     * @param  Request $request The http request containing song info
     * @return Response         The http response
     */
    public function handle(Request $request) {
        Song::create([
            'title' => $request->title,
            'artist' => $request->artist
        ]);

        return Response::json(['success' => true]);
    }
}
