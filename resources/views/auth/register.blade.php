@extends('layouts.app')

@section('content')

                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="container">

                                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                                    <div class="login-button-container clearfix">

                                        <div class="col-xs-6 sign-in">
                                            <button class="btn sign-in__button active">
                                                Applicant
                                            </button>
                                        </div>

                                        <div class="col-xs-6 register">
                                            <button class="btn register__button">
                                                Company
                                            </button>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

                                    <div class="row login__form" style="display: block;">
                                        <div>
                                            <fieldset class="form__fieldset required form__login">
                                                <div class="clearfix"></div>
                                                <input type="hidden" name="role_id" value=3>
                                                <input type="hidden" name="resume_link" value=NULL>
                                                <input type="hidden" name="company" value=NULL>
                                                <div class="divide-width">
                                                    <div class="middle-bottom-inner-left">
                                                        <div class="form__field__wrapper form-item"> <label for="edit-first_name" class="text-input__label">First Name <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
                                                            <input placeholder="First name" class="form-control form-text required text-input__field" type="text" id="edit-first_name" name="first_name" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-first_name-descriptor">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="divide-width divide-mrgn">
                                                    <div class="middle-bottom-inner-left">
                                                        <div class="form__field__wrapper form-item"> <label for="edit-last_name" class="input__label">Last Name <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
                                                            <input placeholder="Last name" class="form-control form-text required text-input__field" type="text" id="edit-last_name" name="last_name" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-last_name-descriptor">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="middle-bottom-inner-left">
                                                    <div class="form__field__wrapper form-item"> <label for="edit-email--1" class="input__label">Email Address <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
                                                        <input placeholder="Enter your email address" class="form-control form-text required text-input__field" type="email" id="edit-email--1" name="email" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-email--1-descriptor">
                                                    </div>
                                                </div>

                                                <div class="middle-bottom-inner-left-pass">
                                                    <div class="form-type-password form-item-password form-item form-group" id="display-second-part">
                                                        <div class="form__field__wrapper form-item"> <label for="edit-password--2" class="text-input__label">Password </label>
                                                            <input class="form-group form-control form-text password__field text-input__field" placeholder="Create a password" data-edit-password="true" type="password" id="edit-password--2" name="password" size="60" maxlength="128"> <span class="field-suffix"><span id="passwordval"></span></span>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="row register__form" style="display: none;">
                                        <div id="registration-form-wrapper">
                                            <div>
                                                <div class="form__register">
                                                    <div class="clearfix"></div>
                                                    <input type="hidden" name="role_id" value=2>
                                                    <input type="hidden" name="resume_link" value=NULL>
                                                    <div class="divide-width">
                                                        <div class="middle-bottom-inner-left">
                                                            <div class="form__field__wrapper form-item"> <label for="edit-firstname" class="text-input__label">First Name <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
                                                                <input placeholder="First name" class="form-control form-text required text-input__field" type="text" id="edit-firstname" name="first_name" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-firstname-descriptor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divide-width divide-mrgn">
                                                        <div class="middle-bottom-inner-left">
                                                            <div class="form__field__wrapper form-item"> <label for="edit-lastname" class="input__label">Last Name <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
                                                                <input placeholder="Last name" class="form-control form-text required text-input__field" type="text" id="edit-lastname" name="last_name" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-lastname-descriptor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="middle-bottom-inner-left">
                                                        <div class="form__field__wrapper form-item"> <label for="edit-email--2" class="input__label">Email Address <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
                                                            <input placeholder="Enter your email address" class="form-control form-text required text-input__field" type="email" id="edit-email--2" name="email" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-email--2-descriptor">
                                                        </div>
                                                    </div>
                                                    <div class="middle-bottom-inner-left">
                                                        <div class="form__field__wrapper form-item"> <label for="edit-company--2" class="input__label">Company<span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
                                                            <input placeholder="Enter your company name" class="form-control form-text required text-input__field" type="text" id="edit-company--2" name="company" value="" size="60" maxlength="128" aria-required="true" aria-describedby="edit-company--2-descriptor">
                                                        </div>
                                                    </div>
                                                    <div class="middle-bottom-inner-left-pass">
                                                        <div class="form-type-password form-item-password form-item form-group" id="display-second-part">
                                                            <div class="form__field__wrapper form-item"> <label for="edit-password--2" class="text-input__label">Password </label>
                                                                <input class="form-group form-control form-text password__field text-input__field" placeholder="Create a password" data-edit-password="true" type="password" id="edit-password--2" name="password" size="60" maxlength="128"> <span class="field-suffix"><span id="passwordval"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

@endsection
