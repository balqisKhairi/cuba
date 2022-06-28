@extends('layouts.main')

@section('content')
<hr>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form method="POST" action="{{ route('admins.store') }}">
                        @csrf

                        <input type="hidden" value="admin" name="userType">
                        <div class="form-group row">
                            <label for="adminName" class="col-md-4 col-form-label text-md-right">{{ __(' Name') }}</label>

                            <div class="col-md-6">
                                <input id="adminName" type="text" class="form-control @error('adminName') is-invalid @enderror" name="adminName" value="{{ old('adminName') }}" required autocomplete="adminName" autofocus>

                                @error('adminName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adminEmail" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="adminEmail" type="email" class="form-control @error('adminEmail') is-invalid @enderror" name="adminEmail" value="{{ old('adminEmail') }}" required autocomplete="adminEmail">

                                @error('adminEmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       
                        <div class="form-group row">
                            <label for="adminPassword" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="adminPassword" type="password" class="form-control @error('adminPassword') is-invalid @enderror" name="adminPassword" required autocomplete="adminPassword">

                                @error('adminPassword')
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

@endsection
