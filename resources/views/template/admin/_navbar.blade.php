<div class="app-header-inner">  
    <div class="container-fluid py-2">
        <div class="app-header-content"> 
            <div class="row justify-content-between align-items-center">
            
            <div class="col-auto">
                <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                </a>
            </div>
            <div class="search-mobile-trigger d-sm-none col">
                <i class="search-mobile-trigger-icon fas fa-search"></i>
            </div>
            <div class="app-search-box col">
                <form class="app-search-form">   
                    <input type="text" placeholder="Search..." name="search" class="form-control search-input">
                    <button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fas fa-search"></i></button> 
                </form>
            </div>
            
            <div class="app-utilities col-auto">
                <div class="app-utility-item app-notifications-dropdown dropdown">    
                    <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" title="Notifications">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
                            <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                        </svg>
                        <span class="icon-badge">3</span>
                    </a>
                    
                    <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
                        <div class="dropdown-menu-header p-3">
                            <h5 class="dropdown-menu-title mb-0">Notifications</h5>
                        </div>
                        <div class="dropdown-menu-content">
                            <div class="item p-3">
                                <div class="row gx-2 justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <img class="profile-image" src="assets/images/profiles/profile-1.png" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="info"> 
                                            <div class="desc">
                                                Amy shared a file with you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                            </div>
                                            <div class="meta"> 2 hrs ago</div>
                                        </div>
                                    </div> 
                                </div>
                                <a class="link-mask" href="notifications.html"></a>
                            </div>
                        </div>
                        
                        <div class="dropdown-menu-footer p-2 text-center">
                            <a href="notifications.html">Voir plus</a>
                        </div>
                                                    
                    </div><!--//dropdown-menu-->					        
                </div><!--//app-utility-item-->
                
                <div class="app-utility-item app-user-dropdown dropdown">
                    <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <button class="btn btn-color_add">Mon Compte</button>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                        <li><a class="dropdown-item" href="account.html">Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item btn btn-color_add" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Deconnexion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>