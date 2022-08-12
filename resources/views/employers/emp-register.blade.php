@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">{{ __('Employer Registration') }}</div>

                <div class="card-body">
            <form method="POST" action="{{ route('employers.store') }}">
                        @csrf

                        <input type="hidden" value="employer" name="userType">
                        <div class="form-group row">
                            <label for="emploCompName" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="emploCompName" type="text" class="form-control @error('emploCompName') is-invalid @enderror" name="emploCompName" value="{{ old('emploCompName') }}" required autocomplete="emploCompName" autofocus>

                                @error('emploCompName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emploEmail" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="emploEmail" type="email" class="form-control @error('emploEmail') is-invalid @enderror" name="emploEmail" value="{{ old('emploEmail') }}" required autocomplete="emploEmail">

                                @error('emploEmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       
                        <div class="form-group row">
                            <label for="emploPassword" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="emploPassword" type="password" class="form-control @error('emploPassword') is-invalid @enderror" name="emploPassword" required autocomplete="emploPassword">

                                @error('emploPassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emploNum" class="col-md-4 col-form-label text-md-right">{{ __('Company Number') }}</label>

                            <div class="col-md-6">
                                <input id="emploNum" type="text" class="form-control @error('emploNum') is-invalid @enderror" name="emploNum" value="{{ old('emploNum') }}" required autocomplete="emploNum">

                                @error('emploNum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection
