<!DOCTYPE html>
<html lang="fr"> 
<head>
    <title>Services Longrich|| admin</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/js/ad_fontawesome_all.min.js') }}"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/ad_portal.css') }}">
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <style>
        .app-nav .nav-link.active{
            color: #15a362;
            background: rgb(229, 255, 247);
            border-left: 3px solid rgb(8, 131, 253);
            font-weight: 500;
        }
        .app-table-hover tbody tr:hover{
            background-color: rgb(237, 248, 255);
        }
        .btn-color_add{
            background-color: rgb(59, 85, 202);
            color: white;
        }
        .modal-dialog{
            max-width: 700px;
        }
        .form-control:disabled, .form-control[readonly]{
            
        }
    </style>

    @livewireStyles

</head> 

<body class="app">   	
    <header class="app-header fixed-top">

        @include('template.admin._navbar')

        @include('template.admin._sidebar')

    </header><!--//app-header-->
    
    <div class="app-wrapper">

        @yield('accueil')

        {{-- @yield('produit_liste_sante') --}}
        @yield('produit_liste_soins')
        @yield('produit_liste_hygiene')
        @yield('produit_liste_ordinateur')
        @yield('produit_liste_bebe')
        @yield('produit_liste_accessoire')
        
        @yield('vente')
	    
	    @yield('contact')
	    @yield('parametre')
	    @include('template.admin._footer')
	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="{{ asset('assets/js/ad_popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>  
    
    <!-- Page Specific JS -->
    <script src="{{ asset('assets/js/ad_app.js') }}"></script> 

    @livewireScripts
</body>
</html> 