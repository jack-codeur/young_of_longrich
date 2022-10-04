@extends('layouts.auth')

@section('login')

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h3 class="">{{ __('Enregistrement') }}</h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h5 class="text-danger">Enregistrez vous pour recevoir nos meilleurs services</h5>
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
                            <div class="col-sm-12 col-md-6 col-lg-6 flex-grow-1">
                                <label for="reg-ln">{{ __('Nom') }}</label>
                                <input type="text" id="reg-ln" class="form-control @error('nom') 'is-invalid' @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                
                                @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 flex-grow-1">
                                <label for="reg-fn">{{ __('Prenom') }}</label>
                                <input type="text" id="reg-fn" class="form-control @error('prenom') 'is-invalid' @enderror" name="prenom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                
                                @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group input-group">
                            <label for="reg-sexe">{{ __('Sexe') }}</label>
                            <select type="text" id="reg-sexe" class="form-control @error('sexe') 'is-invalid' @enderror" name="sexe"  required >
                                <option value="">---Aucun---</option>
                                <option value="H">Homme</option>
                                <option value="F">Femme</option>
                            </select>
                            @error('sexe')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group input-group">
                            <div class="col-sm-12 col-md-6 col-lg-6 flex-grow-1">
                                <label for="reg-vil">{{ __('Ville') }}</label>
                                <input type="text" id="reg-vil" class="form-control @error('ville') 'is-invalid' @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>
                                
                                @error('ville')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="reg-cq">{{ __('Commune/Quartier') }}</label>
                                <input type="text" id="reg-cq" class="form-control @error('commune') 'is-invalid' @enderror" name="commune" value="{{ old('commune') }}" required autocomplete="commune" autofocus>
                                
                                @error('commune')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group input-group">
                            <label for="reg-tel">{{ __('Téléphone') }}</label>
                            <input type="text" id="reg-tel" class="form-control @error('telephone') 'is-invalid' @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>
                            
                            @error('telephone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group input-group">
                            <label for="reg-email">{{ __('Email') }}</label>
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
                            <button class="btn" type="submit">Connexion</button>
                        </div>
                        <p class="outer-link">Vous n'avez de compte? <a href="register.html">Créer un compte </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection