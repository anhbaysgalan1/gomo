@extends('main')
@section('title', 'Feedback receieved')

@section('content')
<!-- feddback submitted succesfully -->
<div class="ui stackable grid">
    <div id="feedback-success" class="eleven wide centered column">
        <div class="ui very padded segment">
            <div class="feedback-logo"><img class="ui small image" src="{{ asset('img/logo.png') }}" alt=""></div>
            <div class="ui header">Product feedback recieved</div>
            <p>
                Thank you for taking the time to submit feedback about the gomo product suite. A member of the gomo team will review your submission and get back to you.
            </p>
            <p>
                Best Wishes <br>
                The gomo team
            </p>
        </div>
    </div>
</div>
<!-- feddback submitted succesfully end -->
@endsection
