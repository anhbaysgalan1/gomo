@extends('main')
@section('title', 'Feedback')

@section('content')
<div class="ui stackable grid">
    <!-- form wrapper -->
    <div id="feedback-form-wrapper" class="eleven wide centered column">
       <div class="ui very padded segment">

           <div class="feedback-logo"><img class="ui small image" src="{{ asset('img/logo.png') }}" alt=""></div>

            <div class="ui header">Product Feedback</div>
            <p>
                At gomo, we are continually working to enhance our product suite and welcome all customers feedback to help us prioritise and improve the fatures and functionality available with the gomo solution
            </p>

            <!-- form start -->
            <form class="ui form" method="POST" action="{{ url('feedback/create') }}">
                {{ csrf_field() }}
                <!-- first name last name fields -->
                <div class="two fields">
                    <div class="field {!! $errors->first('first_name') ? 'error' : '' !!}">
                        <label for="first_name">First Name <span>*</span></label>
                        <input type="text" id="first_name" value="{{ old('first_name') }}" name="first_name">
                        {!! $errors->first('first_name') ? '<p class="error-msg">'.$errors->first('first_name').'</p>' : '' !!}
                    </div>
                    <div class="field {!! $errors->first('first_name') ? 'error' : '' !!}">
                        <label for="last_name">Last Name <span>*</span></label>
                        <input type="text" id="last_name" value="{{ old('last_name') }}" name="last_name">
                        {!! $errors->first('first_name') ? '<p class="error-msg">'.$errors->first('last_name').'</p>' : '' !!}
                    </div>
                </div>
                <!-- first name last name field end -->

                <!-- Email and phone number field -->
                <div class="two fields">
                    <div class="field {!! $errors->first('email') ? 'error' : '' !!}">
                        <label for="email">Email Address <span>*</span></label>
                        <input type="text" id="email" value="{{ old('email') }}" name="email">
                        {!! $errors->first('email') ? '<p class="error-msg">'.$errors->first('email').'</p>' : '' !!}
                    </div>
                    <div class="field">
                        <label for="phone">Telephone Number</label>
                        <input type="text" id="phone" value="{{ old('phone') }}" name="phone">
                    </div>
                </div>
                <!-- Email and phone number field end -->

                <!-- radio buttons -->
                <div class="grouped fields">
                    <label for="nature">Nature of feedback <span>*</span></label>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" value="Feature request" name="nature" checked="" tabindex="0" class="hidden">
                            <label>Feature request</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" value="General feedback" name="nature" tabindex="0" class="hidden">
                            <label>General feedback</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" value="Bug" name="nature" tabindex="0" class="hidden">
                            <label>Bug</label>
                        </div>
                    </div>
                </div>
                {!! $errors->first('nature') ? '<p class="error-msg">'.$errors->first('nature').'</p>' : '' !!}
                <!-- radio buttons end -->

                 <!-- Details textarea-->
                <div class="field {!! $errors->first('details') ? 'error' : '' !!}">
                    <label for="details">Details <span>*</span></label>
                    <textarea name="details" id="details" cols="30" rows="10">{{ old('details') }}</textarea>
                    {!! $errors->first('details') ? '<p class="error-msg">'.$errors->first('details').'</p>' : '' !!}
                </div>
                <!-- Details textarea end -->


                <button type="submit" class="ui primary button">Submit</button>
            </form>
            <!-- form end -->
       </div>
    </div>
</div>
@endsection
