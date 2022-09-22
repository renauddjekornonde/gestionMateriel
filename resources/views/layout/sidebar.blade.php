

<section>
      <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <a href="{{url('/home')}}" style="text-decoration: none; color: white;">
                <h2><span class=""><ion-icon name="school-outline"></ion-icon></span>Supdeco</h2>
            </a>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li> 
                    <a href="{{url('/home')}}" class="active"><span class="las la-home"></span>
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
                    <a href="{{url('campus/index')}}"><span class=""><ion-icon name="business-outline"></ion-icon></span>
                    <span>Campus</span></a>
                </li> 
                <li> 
                    <a href="{{url('salle/index')}}"><span class=""><ion-icon name="briefcase-outline"></ion-icon></span>
                    <span>Salle</span></a>
                </li>
                <li> 
                    <a href="{{url('category/index')}}"><span class=""><ion-icon name="construct-outline"></ion-icon></span>
                    <span>Category</span></a>
                </li>

                

                <li> 
                    <a href="{{url('user/index')}}"><span class=""> <ion-icon name="person-circle-outline"></ion-icon></span>
                    <span>Utilisateurs</span></a>
                </li>
                <li> 
                    <a href="{{url('historique/index')}}"><span class=""> <ion-icon name="folder-open-outline"></ion-icon></span>
                    <span>Historique</span></a>
                </li>
            </ul>

        </div>
    </div>
</section>