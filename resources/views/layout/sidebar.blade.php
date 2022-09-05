{{-- <section>
     {{-- <!-- ========== Left Sidebar Start ========== -->
     <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" data-key="t-menu">Menu</li>

                    <li>
                        <a href="index.html">
                            <i data-feather="home"></i>
                            <span data-key="t-tableau de bord">Tableau de bord</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="grid"></i>
                            <span data-key="t-apps">Materiels</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="apps-calendar.html">
                                    <span data-key="t-calendar">Liste des materiels</span>
                                </a>
                            </li>

                            <li>
                                <a href="apps-chat.html">
                                    <span data-key="t-chat">Nouveau materiel</span>
                                </a>
                            </li>

                           
                        </ul>
                    </li>

                    <li>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="auth-login.html" data-key="t-login">Listes des fournisseurs</a></li>
                            <li><a href="auth-register.html" data-key="t-register">Nouvel Fournisseur</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="file-text"></i>
                            <span data-key="t-pages">Entree</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="pages-starter.html" data-key="t-starter-page">listes des entrees</a></li>
                            <li><a href="pages-maintenance.html" data-key="t-maintenance">Nouvelle entree</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="briefcase"></i>
                            <span data-key="t-components">Affectation</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ui-alerts.html" data-key="t-alerts">Liste des affectations</a></li>
                            <li><a href="ui-buttons.html" data-key="t-buttons">Nouvel affectation</a></li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="gift"></i>
                            <span data-key="t-ui-elements">Historique</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="box"></i>
                            <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                            <span data-key="t-forms">Parametre</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="https://themesbrand.com/minia/layouts/form-elements.html" data-key="t-form-elements">Campus</a></li>
                            <li><a href="https://themesbrand.com/minia/layouts/form-validation.html" data-key="t-form-validation">Salle</a></li>
                            <li><a href="https://themesbrand.com/minia/layouts/form-advanced.html" data-key="t-form-advanced">Categories</a></li>
                            <li><a href="https://themesbrand.com/minia/layouts/form-editors.html" data-key="t-form-editors">Role</a></li>
                           
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="sliders"></i>
                            <span data-key="t-tables">utilisateurs</span>
                        </a>
                    </li>

                </ul>

                <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                    <div class="card-body">
                        <img src="https://themesbrand.com/minia/layouts/assets/images/giftbox.png" alt="">
                        <div class="mt-4">
                            <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                            <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                            <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End --> --}}

{{-- </section> --}}

<section>
      <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="#"><ion-icon name="school-outline"></ion-icon></span>Supdeco</h2>

        </div>
        <div class="sidebar-menu">
            <ul>
                <li> 
                    <a href="#" class="active"><span class="las la-home"></span>
                    <span>Tableau de bord</span></a>
                </li>

                <li> 
                    <a href="{{url('materiel/index')}}"><span class=""> <ion-icon name="logo-steam"></ion-icon></span>
                    <span>Materiels</span></a>
                </li> 
               
                <li> 
                    <a href="{{url('fournisseur/index')}}"><span class=""> <ion-icon name="cart-outline"></ion-icon></span>
                    <span>Fournisseurs </span></a>
                </li>
                <li> 
                    <a href="{{url('entree/index')}}"><span class=""><ion-icon name="server-outline"></ion-icon> </span>
                    <span>Entree</span></a>
                </li>
                <li> 
                    <a href="{{url('affectation/index')}}"><span class=""><ion-icon name="desktop-outline"></ion-icon> </span>
                    <span>Affectation</span></ion-icon></a>
                </li>
                <li> 
                    <a href="{{url('parametre/index')}}"><span class=""><ion-icon name="settings-outline"></ion-icon></span>
                    <span>Parametre</span></a>
                </li> 

                <!-- <div class="menu">
                    <ul>
                        <li>
                            <a href="" class="">
                                <span ><ion-icon name="settings-outline"></ion-icon></span>
                                <span >Parametre</span>
                            </a>
                        
                            <ul >
                                <li>
                                <a href="">
                                <span style="font-size: 0.8rem;">Campus</span>
                                </a>
                                </li>
            
                                <li>
                                <a href="">
                                <span style="font-size: 0.8rem;">Salle</span>
                                </a>
                                </li>
                                <li>
                                    <a href="">
                                    <span style="font-size: 0.8rem;">Categories</span>
                                    </a>
                                </li>  
                                <li>
                                    <a href="">
                                    <span style="font-size: 0.8rem;">Role</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div> -->

                <li> 
                    <a href="{{url('utilisateur/index')}}"><span class=""> <ion-icon name="person-circle-outline"></ion-icon></span>
                    <span>Utilisateurs</span></a>
                </li>
                <li> 
                    <a href="{{url('operation/index')}}"><span class=""> <ion-icon name="folder-open-outline"></ion-icon></span>
                    <span>Historique</span></a>
                </li>
            </ul>

        </div>
    </div>
</section>