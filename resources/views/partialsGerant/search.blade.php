<form action="{{route('productsGerant.search')}}" class="d-flex mr-3">
<div class="search-warpper">

     <input type="text" name="p" placeholder="recherche" value="{{request()->p ?? ''}}" />
    <button type="submit" style="border:none; "><span class=""><ion-icon name="search-sharp"></ion-icon></span></button>
               
</div>
</form>