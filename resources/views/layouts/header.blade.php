<section>

     <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> 
                Tableau de bord
            </h2>
            @include('partials.search')
               <div id="dropdown" class="user-wrapper">
                    <img class="logo-admin" src="{{asset('asset/img/2.jpng')}}" width="40px" height="40px" alt="" >
                    <div>
                        <h6>Cheikh Tidiane Boiro</h6>
                        <small>Super admin</small>

                    </div>
                    <div class="dropdown-content">
                        @guest
                        @else
                        <a  href="{{ route('logout') }}"><p>Deconnexion</p> </a> 
                       @endguest
                    </div>

               </div>
        </header> 

</section>
