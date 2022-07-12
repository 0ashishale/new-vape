@include('components.main.master')
<div>
    <div class="navbar"> 
            <div class="navbar__container">
                
                {{-- <div class="navbar__navlinks" id="navBar">
                 
        
                    <a href="/" >Home</a>
                    <a href="/about" > About</a>
                    <a href="/blog" > Blog</a>
                    <a href="/contact" > Contact</a>

                     <a href="/login" ><i class="fa-regular fa-user" style="margin-right:3px;"></i> Login </a>
                    <a href="/register" >
                    <i class="fa-solid fa-user-pen"></i>   
                         Register</a>
                         <a href=""javascript:void(0);" class="icon" onclick="myFunction()""><i class="fa-solid fa-bars" ></i></a> 
                 </div> --}}
                 <div class="topnav" id="myTopnav">
                    <a href="/" class="active">Home</a>
                    <a href="/about">About</a>
                    <a href="/blog">Blog</a>
                    <a href="/contact">Contact</a>
                    <a href="/login"><i class="fa-regular fa-user" style="margin-right:3px;"></i>Login</a>
                    <a href="/register"><i class="fa-solid fa-user-pen"></i> Register</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                      <i class="fa fa-bars"></i>
                    </a>
                  </div>
            </div>
    
    </div>
</div>

<script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>

