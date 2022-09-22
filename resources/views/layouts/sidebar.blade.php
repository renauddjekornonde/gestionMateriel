

<section>
      <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <a href="{{route('gerant.index')}}" style="text-decoration: none; color: white;">
                <h2><span class=""><ion-icon name="school-outline"></ion-icon></span>Supdeco</h2>
            </a>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li> 
                    <a href="#" class="active"><span class="las la-home"></span>
                    <span>Accueil</span></a>
                </li>

                <li> 
                    <a href="{{route('gerant.show', Auth::user()->id)}}"><span class=""><ion-icon name="person-circle-outline"></ion-icon></span>
                    <span>Profil</span></a>
                </li> 
               
                <li> 
                    <a href="{{route('gerant.index')}}"><span class=""> <ion-icon name="cart-outline"></ion-icon></span>
                    <span>Affectation </span></a>
                </li>
            
            </ul>

        </div>
    </div>
</section>