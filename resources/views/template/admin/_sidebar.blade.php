<div id="app-sidepanel" class="app-sidepanel"> 
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
        <div class="app-branding">
            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"><span class="logo-text">PORTAL</span></a>

        </div><!--//app-branding-->  
        
        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            @include('template.admin._menu_super_admin')
            @include('template.admin._menu_admin')
        </nav><!--//app-nav-->
        
    </div><!--//sidepanel-inner-->
</div>