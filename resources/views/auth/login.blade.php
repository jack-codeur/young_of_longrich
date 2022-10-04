@extends('layouts.auth')

@section('login')

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h3 class="">{{ __('Connexion') }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12 card">
                <form  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-body">

                        <div class="form-group input-group">
                            <label for="reg-fn">{{ __('Email') }}</label>
                            <input type="email" id="reg-email" class="form-control @error('email') 'is-invalid' @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group input-group">
                            <label for="reg-fn">{{ __('Mot de passe') }}</label>
                            <input type="password" id="reg-pass" class="form-control @error('password') 'is-invalid' @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="button">
                            <button class="btn" type="submit">Enregistrement</button>
                        </div>
                        <p class="outer-link">Vous n'avez de compte? <a href="{{ route('login') }}">Créer un compte </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection