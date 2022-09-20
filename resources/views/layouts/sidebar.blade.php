

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
                    <a href="{{url('#')}}" class="active"><span class="las la-home"></span>
                    <span>Tableau de bord</span></a>
                </li>

                <li> 
                    <a href="{{url('gerant/profil')}}"><span class=""> <ion-icon name="logo-steam"></ion-icon></span>
                    <span>Profil</span></a>
                </li> 
               
                <li> 
                    <a href="{{url('gerant/index')}}"><span class=""> <ion-icon name="cart-outline"></ion-icon></span>
                    <span>Affectation </span></a>
                </li>
            
            </ul>

        </div>
    </div>
</section>