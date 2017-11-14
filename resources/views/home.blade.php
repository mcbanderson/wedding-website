@extends('main')

@section('content')
    <div class="jumbotron jumbotron-fluid d-flex home-banner">
        <div class="container">
            <h1 class="display-3">Lizzy & Max</h1>
            <p class="display-4">4.14.18</p>
        </div>
    </div>

    <div class="container" id="our-story">
        <div class="row">
            <div class="col-md-4">
                <img src="/images/Liz.Max.Engagement.2017-8.jpg" id="story-image" class="round img-fluid" style="object-fit: cover;" />
            </div>
            <div class="col offset-md-1">
                <h2 class="display-4">Our Story</h2>
                <p style="font-size: 1rem;">
                    Max and Lizzy met in 2011 when they both moved to Davis; Max
                    was going to school at UC Davis and Lizzy was working in
                    Sacramento. Their housemates at the time were best friends,
                    so Max and the rest of his housemates would come to Lizzy’s
                    house often and vice versa. Max had an entire year to ask
                    Lizzy out, but he didn’t. Instead, it was Lizzy who, in the
                    end, had to ask Max out (women need to do everything). Lizzy
                    finally worked up the courage to ask Max for his number. The
                    day after, she texted Max but he didn’t respond! All seemed
                    lost. She decided to wait a week before trying one last
                    time.
                </p>
                <p style="font-size: 1rem;">
                    It was election night (June 6) and Lizzy was preparing to go
                    to an election party at the house of the
                    Assemblymember-elect whose campaign she was working on.
                    Right before she started the drive to Vacaville, she texted
                    Max to see if he wanted to grab a beer with her the
                    following night. To her astonishment, he texted back
                    immediately! Max was so eager to go on a date that he told
                    Lizzy that he would be willing to wait up for her that night
                    after she got back from the watch party to have their first
                    date.
                </p>
                <p style="font-size: 1rem;">
                    They met to have their beer (the following night), two years
                    later Max moved to North Carolina to be with Lizzy and a
                    year after that they moved back to Sacramento together. Max
                    still hasn’t taught Lizzy how to keep a beat and Lizzy still
                    hasn’t convinced Max that hiking is fun, but they love each
                    other none the less.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid text-white" id="info" style="background-color: #00004c;">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h2 class="display-4">Info</h2>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-4 text-right">
                <p id="info-left-1">
                    Where:
                </p>
                <p id="info-left-2">
                    When:
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p id="info-right-1">
                    The Flower Farm<br />
                    4150 Auburn Folsom Rd<br />
                    Loomis, CA 95650
                </p>
                <p id="info-right-2">
                    April 14th, 2018<br />
                    4:00pm (Tentative)<br />
                    Dinner and Reception to follow
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center" id="hotels">
        <div class="row" style="padding-bottom: 25px;">
            <div class="col-md-8 offset-md-2">
                <h2 class="display-4">Hotel Information</h2>
                <p>
                    Special rates are available at two hotels. In addition
                    to special rates, there will be shuttles available to
                    take you to and from the wedding venue from these hotels.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <h3>
                    <a href="https://secure3.hilton.com/en_US/gi/reservation/book.htm?inputModule=HOTEL&ctyhocn=SMFFHGI&spec_plan=HAW&arrival=20180413&departure=20180415&cid=OM,WW,HILTONLINK,EN,DirectLink&fromId=HILTONLINKDIRECT">
                        Hilton Garden Inn Folsom
                    </a>
                </h3>
                <p>
                    For the group rate simply follow the link above and reserve
                    a room.
                </p>
            </div>
            <div class="col-md-4">
                <h3>
                    <a href="https://www.larkspurhotels.com/folsom/">
                        Larkspur Landing Folsom
                    </a>
                </h3>
                <p>
                    Phone: (916) 355-1616<br />
                    For the group rate at Larkspur Landing, you must call the
                    hotel and request the group rate for <em>Hendrix Anderson Wedding</em>.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid text-white text-center" id="pictures" style="background-color: black;">
        <div class="row">
            <div class="col">
                <h2 class="display-4">Our Engagement Photos</h2>
                <div id="engagement-photos" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-8.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-22.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-24.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-28.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-39.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-43.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-53.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-101.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-123.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-150.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-268.jpg" alt="Engagement picture">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Liz.Max.Engagement.2017-294.jpg" alt="Engagement picture">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#engagement-photos" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#engagement-photos" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center" id="rsvp">
        <div class="row">
            <div class="col col-md-6 offset-md-3">
                <h2 class="display-4">RSVP</h2>
                <p style="margin-bottom: 50px;">
                    To RSVP simply enter your name below and then complete the
                    questions. If you have any trouble with the RSVP system
                    you may also email
                    <a href="mailto:max@andersonhendrixwedding.com" class="email-link">
                        max@andersonhendrixwedding.com
                    </a>
                    to RSVP.
                </p>
                <form id="name-form" method="POST" action="/guest-lookup">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name" />
                    </div>

                    <button type="submit" class="btn btn-primary">Lookup My Invitation</button>
                </form>

                <form id="rsvp-form" method="POST" action="/rsvp">
                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-primary">RSVP</button>
                </form>
                <p id="rsvp-success">
                    Thanks for RSVPing!
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid text-white text-center" id="registry" style="background-color: #bd8783;">
        <div class="row">
            <div class="col col-md-6 offset-md-3">
                <h2 class="display-4">Gift Registry</h2>
                <p>
                    Coming soon.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center" id="song">
        <div class="row">
            <div class="col col-md-6 offset-md-3">
                <h2 class="display-4">Request a Song</h2>
                <p style="margin-bottom: 50px;">
                    Request songs to play at the reception. You can request as
                    many songs as you'd like, but we can't guarantee any of
                    them will actually get played. It doesn't hurt to try
                    though!
                </p>
                <form method="POST" action="/song-request" id="song-form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Song Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Song Title" />
                    </div>
                    <div class="form-group">
                        <label for="artist">Artist (Optional)</label>
                        <input type="text" class="form-control" name="artist" id="artist" placeholder="Artist Name (Optional)" />
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="modal-title" class="modal-title">Oops</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p id="modal-text">If you're reading this, something has gone wrong.</p>
          </div>
          <div class="modal-footer">
            <button type="button" id="modal-button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('js')
    <script>
        function getGuestForm(id, name, index, margin) {
            return '<p class="guest-name" style="margin-top: ' + margin + 'px; margin-bottom: 0;">' + name + '</p> \
            <input type="hidden" name="guests[' + index + '][id]" id="guest_id" value="' + id + '" /> \
            <div class="form-group"> \
                <label for="guests[' + index + '][is_attending]">Will you be attending?</label> \
                <select class="form-control" name="guests[' + index + '][is_attending]" id="guests[' + index + '][is_attending]"> \
                    <option value="true">Gladly accept</option> \
                    <option value="false">Regretfully decline</option> \
                </select> \
            </div> \
            <div class="form-group"> \
                <label for="guests[' + index + '][email_address]">Email Address (Optional)</label> \
                <input type="text" name="guests[' + index + '][email_address]" class="form-control" id="guests[' + index + '][email_address]" placeholder="Email Address (Optional, will be used to send updates)" /> \
            </div> \
            <div class="form-group"> \
                <label for="guests[' + index + '][dietary_restrictions]">Dietary Restrictions (Optional)</label> \
                <input type="text" name="guests[' + index + '][dietary_restrictions]" class="form-control" id="guests[' + index + '][dietary_restrictions]" placeholder="Please list any dietary restrictions (optional)" /> \
            </div>';
        }

        function getPlusOneForm() {
            return '<p class="guest-name" style="margin-top: 25px; margin-bottom: 0;">Plus One</p> \
            <div class="form-group"> \
                <label for="plus_one_is_attending">Will you be bringing a guest?</label> \
                <select class="form-control" name="plus_one_is_attending" id="plus_one_is_attending"> \
                    <option value="true">Yes</option> \
                    <option value="false">No</option> \
                </select> \
            </div> \
            <div class="form-group"> \
                <label for="plus_one_name">Guest Name</label> \
                <input type="text" name="plus_one_name" class="form-control" id="plus_one_name" placeholder="Guest Name" /> \
            </div> \
            <div class="form-group"> \
                <label for="plus_one_email_address">Email Address (Optional)</label> \
                <input type="text" name="plus_one_email_address" class="form-control" id="plus_one_email_address" placeholder="Email Address (Optional, will be used to send updates)" /> \
            </div> \
            <div class="form-group"> \
                <label for="plus_one_dietary_restrictions">Dietary Restrictions (Optional)</label> \
                <input type="text" name="plus_one_dietary_restrictions" class="form-control" id="plus_one_dietary_restrictions" placeholder="Please list any dietary restrictions (optional)" /> \
            </div>';
        }

        $(document).ready(function() {
            var width = $("#story-image").css("width");
            $("#story-image").css('height', width);
            $("#story-image").css('width', width);
        });

        $(document).ready(function() {
            $('.engagement-photos').carousel();
            $('#rsvp-form').hide();
            $('#rsvp-success').hide();
        });

        $(document).ready(function() {
            $('#info-left-1').css('height', $('#info-right-1').css("height"));
            $('#info-left-2').css('height', $('#info-right-2').css("height"));
        });

        $(document).ready(function() {
            $('#name-form').submit(function(event) {
                event.preventDefault();

                var nameFormData = $(this).serialize();

                if($('#name').val().length < 1) {
                    $('#modal-title').text('Error');
                    $('#modal-text').text('Please enter your name.');
                    $('#modal-button').text('Ok');
                    $('#myModal').modal('show');
                    return;
                }

                $.ajax({
                    type        : 'POST',
                    url         : '/guest-lookup',
                    data        : nameFormData,
                    dataType    : 'json',
                    encode      : true
                }).done(function(data) {
                    $('#name-form').hide();
                    $('#rsvp-form').show();
                    if(data["guest"].plus_one == 1) {
                        $('#rsvp-form').prepend(getPlusOneForm());
                    }
                    for(var i = 0; i < data["associated_guests"].length; i++) {
                        $('#rsvp-form').prepend(getGuestForm(data["associated_guests"][i].id, data["associated_guests"][i].name, i + 1, 25))
                    }
                    $('#rsvp-form').prepend(getGuestForm(data["guest"].id, data["guest"].name, 0, 0));
                }).fail(function(data) {
                    $('#modal-title').text('Error');
                    $('#modal-text').text(data["message"]);
                    $('#modal-button').text('Ok');
                    $('#myModal').modal('show');
                });

            });

            $('#rsvp-form').submit(function(event) {
                event.preventDefault();

                var rsvpFormData = $(this).serialize();

                $.ajax({
                    type        : 'POST',
                    url         : '/rsvp',
                    data        : rsvpFormData,
                    dataType    : 'json',
                    encode      : true
                }).done(function(data) {
                    $('#rsvp-form').hide();
                    $('#rsvp-success').show();
                    $('#rsvp').get(0).scrollIntoView();
                }).fail(function(data) {
                    $('#modal-title').text('Error');
                    $('#modal-text').text('Oops, something went wrong. Please try again.');
                    $('#modal-button').text('Ok');
                    $('#myModal').modal('show');
                });

            });

            $('#song-form').submit(function(event) {
                event.preventDefault();

                var songFormData = $(this).serialize();

                if($('#title').val().length < 1) {
                    $('#modal-title').text('Error');
                    $('#modal-text').text('Please enter a song title.');
                    $('#modal-button').text('Ok');
                    $('#myModal').modal('show');
                    return;
                }

                if($('#artist').val().toLowerCase() == "nickelback") {
                    $('#modal-title').text('How dare you');
                    $('#modal-text').text('Sorry, but we are not playing Nickelback at our wedding.');
                    $('#modal-button').text('I promise not to request such bad music again');
                    $('#myModal').modal('show');
                    return;
                }

                $.ajax({
                    type        : 'POST',
                    url         : '/song-request',
                    data        : songFormData,
                    dataType    : 'json',
                    encode      : true
                }).done(function(data) {
                    $('#modal-title').text('Success!');
                    $('#modal-text').text('Thanks for requesting a song!');
                    $('#modal-button').text('Close');
                    $('#myModal').modal('show');
                }).fail(function(data) {
                    $('#modal-title').text('Oops!');
                    $('#modal-text').text('Something went wrong. Please try again.');
                    $('#modal-button').text('Close');
                    $('#myModal').modal('show');
                });

            });
        });
    </script>
@endsection
