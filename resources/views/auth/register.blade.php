@extends('layouts.master')
@section('content')
    <style>
        .new-login-register {
            position: absolute;
            height: 100%;
        }

    </style>
    @php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
    <section id="wrapper" class="new-login-register">
        <div class="lg-info-panel">
            <div class="inner-panel">
                <a href="javascript:void(0)" class="p-20 di">
                    <img src="@isset($setting['logo']) {{ asset('uploads/' . $setting['logo']) }}@endisset" />
                    </a>
                    <div class="lg-content">
                        <h2>@isset($setting['auth_page_heading']) {{ $setting['auth_page_heading'] }}@endisset</h2>
                            <p class="text-muted">@isset($setting['auth_page_desc']) {{ $setting['auth_page_desc'] }}@endisset
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="new-login-box">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">{{ __('Register') }}</h3>
                            <small>Enter your details below</small>
                            <form class="form-horizontal new-lg-form generalForm" id="signup-form" method="POST"
                                action="{{ route('register') }}">
                                @csrf
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control @error('sponser_id') is-invalid @enderror" name="sponser_id"
                                            id="sponser_id" type="text" placeholder="Enter Sponser ID" value="FT0001" required
                                            autocomplete="sponser_id" autofocus>
                                        @error('sponser_id')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                        <span class="invalid-feedback error_message" role="alert" style="display: none;">
                                            <strong>Sponser Id is not found.</strong>
                                        </span>
                                        <span class="success_message" role="alert" style="color:rgb(47, 255, 99); display: none;">
                                            <strong>Sponser Id is verified.</strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                            type="text" placeholder="First Name" value="{{ old('first_name') }}"
                                            autocomplete="first_name" autofocus>
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                            type="text" placeholder="Last Name" value="{{ old('last_name') }}" required
                                            autocomplete="last_name" autofocus>
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control @error('user_name') is-invalid @enderror" name="user_name"
                                            type="text" placeholder="Choose User Name" value="{{ old('user_name') }}" required
                                            autocomplete="user_name" autofocus>
                                        @error('user_name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email"
                                            placeholder="Email" required autocomplete="email" name="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                            type="text" placeholder="Phone Number" value="{{ old('phone_number') }}" required
                                            autocomplete="phone_number" autofocus>
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                            name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input id="password-confirm" type="password" placeholder="Confirm Password"
                                            class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                                                                                                                                                                        <div class="col-md-12">
                                                                                                                                                                                            <div class="checkbox checkbox-primary p-t-0">
                                                                                                                                                                                                <input id="checkbox-signup" type="checkbox">
                                                                                                                                                                                                <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>-->
                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                            type="submit">Sign Up
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-12 text-center">
                                        <p>Already have an account? <a href="{{ route('login') }}"
                                                class="text-danger
                            m-l-5"><b>Sign In</b></a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            @endsection
            @section('scripts')
                <script src="{{ asset('js/loadingoverlay.min.js') }}"></script>
                <script>
                    $(document).ready(function() {
                        $("#sponser_id").change(function() {
                            $.LoadingOverlay("show");
                            var sponser_id = $(this).val();
                            if (sponser_id != 'FT0001') {
                                $.ajax({
                                    type: 'GET',
                                    url: '/check-sponser',
                                    data: {
                                        sponser_id: sponser_id
                                    },
                                    dataType: 'JSON',
                                    success: function(resp) {
                                        $.LoadingOverlay("hide");
                                        if (resp.status == 0) {
                                            $(".error_message").show();
                                            $(".success_message").hide();
                                            // $(".register").attr('disabled', 'disabled');
                                            // $("#email").addClass('is-invalid');
                                            // $("#password").prop("disabled", true);
                                            // $("#confirm-password").prop("disabled", true);
                                            // $("#phone_no").prop("disabled", true);
                                        } else {
                                            $(".error_message").hide();
                                            $(".success_message").show();
                                            // $(".register").removeAttr('disabled');
                                            // $("#email").removeClass('is-invalid');
                                            // $("#password").prop("disabled", false);
                                            // $("#confirm-password").prop("disabled", false);
                                            // $("#phone_no").prop("disabled", false);
                                        }
                                    },
                                });
                            } else {
                                $.LoadingOverlay("hide");
                                $(".error_message").hide();
                                $(".success_message").show();
                            }


                        });
                    });
                </script>
                <script type="text/javascript">
                    $('.generalForm').submit(function() {
                        $('.white-box').LoadingOverlay("show");
                        $("#generalForm").submit();
                    });
                </script>

            @endsection
