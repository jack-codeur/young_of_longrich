<header class="header navbar-area">

  <div class="topbar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="top-left">
            <ul class="menu-top-link text-top-m">
              <li><a href="#maladies">La liste des maladies que traite Longrich</a></li>
              <li><a href="#produits">La liste des produits Longrich associés</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="top-end">
            
            {{-- user name find --}}
            @if (auth()->user())
              <div class="user">
                <ul class="text-top-m">
                  <li><a href="javascript:void(0)">{{ userFullName() }}</a></li>
                </ul>
              </div>
              <ul class="user-login">
                <li>
                  <a href="{{ route('contact') }}">Contact</a>
                </li>
                {{-- la deconnexion --}}
                <li class="">
                  <a class="" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Deconnexion') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
              </ul>
            @else
              <ul class="user-login">
                <li>
                  <a href="{{ route('contact') }}">Contact</a>
                </li>
                <li>
                  <a href="{{ route('login') }}">Connexion</a>
                </li>
                <li>
                  <a href="{{ route('index') }}">Inscription</a>
                </li>
              </ul>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="header-middle">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-3 col-7">

          <a class="navbar-brand" href="{{ route('boutique') }}">
            <img src="{{ asset('assets/images/logo/logo.svg')}}" alt="Logo">
          </a>

        </div>
        <div class="col-lg-5 col-md-7 d-xs-none">

          <div class="main-menu-search">

            <div class="navbar-search search-style-5">
              <div class="search-input">
                <input type="text" placeholder="Recherche">
              </div>
              <div class="search-btn">
                <button><i class="lni lni-search-alt"></i></button>
              </div>
            </div>

          </div>

        </div>
        <div class="col-lg-4 col-md-2 col-5">
          <div class="d-flex align-items-center">
            <div class="nav-hotline">
              <i class="lni lni-phone"></i>
              <h3>Télépphone:
                <span>(+225) 07 48 548 680</span>
              </h3>
            </div>
            <div class="navbar-cart">
              <div class="cart-items">
                <a href="javascript:void(0)" class="main-btn logo-reseau-sociaux">
                  <i class="lni lni-cart"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-6 col-12">
        <div class="nav-inner">

        <div class="mega-category-menu">
          <span class="cat-button "><i class="lni lni-menu"></i>Catégories</span>
          <ul class="sub-category">
              <li><a href="{{ route('produit_sante')}}">Santé</a></li>
              <li><a href="{{ route('produit_soins')}}">Soins et beauté</a></li>
              <li><a href="{{ route('produit_hygiene')}}">Hygiène et entretien</a></li>
              <li><a href="{{ route('produit_bebe')}}">Spécial Bébé</a></li>
              <li><a href="{{ route('produit_autres')}}">Accessoires</a></li>
              <li><a href="#">Electroniques <i class="lni lni-chevron-right"></i></a>
                  <ul class="inner-sub-category">
                      <li><a href="{{ route('produit_ordis')}}">Ordinateurs</a></li>
                  </ul>
              </li>
          </ul>
        </div>


          <nav class="navbar navbar-expand-lg  m-1">
            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
              <ul id="nav" class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a href="{{ route('accueil') }}">Accueil</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('boutique') }}">Boutique</a>                
                </li>
                <li class="nav-item">
                  <a href="{{ route('partenaire')}}">Avantages partenariat</a>
                </li>
                @if (auth()->user() )
                  @foreach (auth()->user()->roles as $role)
                    <li class="nav-item">
                      <a href="{{ route('admin_accueil') }}">{{ $role->nomRole }}</a>
                    </li>
                  @endforeach
                  
                @endif
                
              </ul>
            </div>
          </nav>

        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">

        <div class="nav-social">
          <h5 class="title">Nous suivre via:</h5>
          <ul>
            <li>
              <a href="javascript:void(0)" class="logo-reseau-sociaux"><i class="lni lni-facebook-filled"></i></a>
            </li>
            <li>
              <a href="javascript:void(0)" class="logo-reseau-sociaux"><i class="lni lni-whatsapp"></i></a>
            </li>
            <li>
              <a href="javascript:void(0)" class="logo-reseau-sociaux"><i class="lni lni-instagram"></i></a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</header>