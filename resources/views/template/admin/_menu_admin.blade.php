@can('Admin')
<ul class="app-menu list-unstyled accordion" id="menu-accordion">
                
    <li class="nav-item">
        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
        <a class="nav-link" href="{{ route('admin_accueil') }}">
            <span class="nav-icon">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                </svg>
            </span>
            <span class="nav-link-text">Tableau de bord</span>
        </a><!--//nav-link-->
    </li><!--//nav-item-->
    <li class="nav-item">
        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-0" aria-expanded="false" aria-controls="submenu-1">
            <span class="nav-icon">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                </svg>
                    </span>
            <span class="nav-link-text">Produits & articles</span>
            <span class="submenu-arrow">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span><!--//submenu-arrow-->
        </a><!--//nav-link-->
        <div id="submenu-0" class="collapse submenu submenu-0" data-bs-parent="#menu-accordion">
            <ul class="submenu-list list-unstyled">
                <li class="submenu-item"><a class="submenu-link" href="{{ route('liste_sante') }}">Santé</a></li>
                <li class="submenu-item"><a class="submenu-link" href="{{ route('liste_soins') }}">Soins et bauté</a></li>
                <li class="submenu-item"><a class="submenu-link" href="{{ route('liste_hygiene') }}">Hygiène et traitement</a></li>
                <li class="submenu-item"><a class="submenu-link" href="{{ route('liste_bebe') }}">Spécial Bébé</a></li>
                <li class="submenu-item"><a class="submenu-link" href="{{ route('liste_ordinateur') }}">Ordinateurs portable</a></li>
                <li class="submenu-item"><a class="submenu-link" href="{{ route('liste_accessoire') }}">Accessoires</a></li>
            </ul>
        </div>
    </li><!--//nav-item-->

    <li class="nav-item">
        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-1">
            <span class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg>
            </span>
            <span class="nav-link-text">Ventes</span>
            <span class="submenu-arrow">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span><!--//submenu-arrow-->
        </a><!--//nav-link-->
        <div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
            <ul class="submenu-list list-unstyled">
                <li class="submenu-item"><a class="submenu-link" href="{{ route('devis') }}">Devis</a></li>
                <li class="submenu-item"><a class="submenu-link" href="{{ route('commandes') }}">Commande</a></li>
                <li class="submenu-item"><a class="submenu-link" href="{{ route('livraisons') }}">livraison</a></li>
                <li class="submenu-item"><a class="submenu-link" href="{{ route('factures') }}">Facture</a></li>
            </ul>
        </div>
    </li><!--//nav-item-->

    <li class="nav-item has-submenu">
        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-3" aria-expanded="false" aria-controls="submenu-2">
            <span class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                </svg>
            </span>
            <span class="nav-link-text">Contacts</span>
            <span class="submenu-arrow">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                </span><!--//submenu-arrow-->
        </a><!--//nav-link-->
        <div id="submenu-3" class="collapse submenu submenu-3" data-bs-parent="#menu-accordion">
            <ul class="submenu-list list-unstyled">
                <li class="submenu-item"><a class="submenu-link" href="{{ route('contact_user') }}">Utilisateurs</a></li>
                <li class="submenu-item"><a class="submenu-link" href="{{ route('contact_client') }}">Cliens</a></li>
            </ul>
        </div>
    </li><!--//nav-item-->
@endcan

</ul><!--//app-menu-->