@include('components.main.master')

<div>
    <div class="header">
        <div class="header__container">
            <div class="header__searchbar">

                <input type="text" placeholder="Search" id="search__input" />
                <i class="fa-solid fa-magnifying-glass fa-lg" id="search__icon"></i>
            </div>

            <div class="header__logo">
                <a href="">
                 <img src="{{asset('/images/logo.png')}}" >
                </a>
            </div>

            <div class="header__basket">
                
         
               <div id="basket">
                <a href=""><i id="basket"  class="fa fa-shopping-basket fa-5x"  ></i> </a>
               </div>
               <div class="basket__content">
                    <p>Shooping Cart</p>
                    <span>0 item: $999</span>
               </div>
               

            </div>
        </div>
    </div>

</div> 