<!DOCTYPE html>
<html class="no-js" lang="fr">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Young Of Longrich | Services Longrich</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/fonts/favicon.svg')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <style>
        .active{
            color:blue ! important;
        }
        .logo-reseau-sociaux{
            background-color: rgba(0, 255, 204, 0.88);
        }
        a .logo-whats{
            width: 4rem !important;
        }
        .header .mega-category-menu{
            margin-right: 0 !important;
        }
        .text-top-m li a{
            color: white !important;
        }

        .text-top-m li a:hover{
            color: #0d6efd !important;
        }
        .single-category .images img{
            width: 60% !important;
        }
        nav .pagination{
            display: flex;
        }
    </style>

    @livewireStyles
    
</head>

<body>

    {{-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}

    @include('template.user._navbar')

    @yield('contact')
    @yield('accueil')
    @yield('boutique')
    @yield('partenaire')

    @yield('produit_sante')
    @yield('produit_soins')
    @yield('produit_hygiene')
    @yield('produit_ordis')
    @yield('produit_bebe')
    @yield('produit_autre')

    @yield('view_produit')
    {{-- @yield('panier') --}}

    @include('template.user._footer')

    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    @livewireScripts

    {{-- Sweetalert2 CDN --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Sweetalert LOCAL --}}
    <script src="{{ asset('assets/js/sweetalert2.all.min.js')}}"></script>
    
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/page.js')}}"></script>
    
</body>


</html>