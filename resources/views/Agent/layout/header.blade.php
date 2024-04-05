<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.wagnistrip.com/Agents-assets/css/headerfooter.css">
    <title>Agent | Wagnistrip</title>
  
  </head>
  
  
  <body>
      <div class="overlay" id="overlay" onclick="closeNavMenu()"></div>
      <!--.header-->
      <header class="header">
       <div class="container">
           <nav class="navMenu commonFlexClass">
               <a href="https://www.wagnistrip.com" class="logo"><img src="{{'https://www.wagnistrip.com/assets/images/logo.png'}}"></a>
               <ul class="innerNavMenu commonFlexClass" id="innerNavMenu">
                   <li><a href="https://www.flights.wagnistrip.com/Agent/Dashboard" class="menuitems activeLink">My dashboard</a></li>
                   <li><a href="https://www.flights.wagnistrip.com" class="menuitems">Make Booking</a></li>
                   <li><a href="https://www.flights.wagnistrip.com/Agent/add/amount" class="menuitems">Add Funds</a></li>
                   <li class="dropdown">
                       <span class="dropdown-toggle drpBtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">User Name</span>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="javascript:void(0)">Your Bookings</a></li>
                            <li><a class="dropdown-item logoutbtn" href="{{route('Agent.Logout')}}" role="button">LogOut</a></li>
                         </ul>
                   </li>
               </ul>
               <div class="menuIcon" id="menuIcon" onclick="openNavMenu()">
                   <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="40" height="40" x="0" y="0" viewBox="0 0 384 384" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M368 154.668H16c-8.832 0-16-7.168-16-16s7.168-16 16-16h352c8.832 0 16 7.168 16 16s-7.168 16-16 16zM368 32H16C7.168 32 0 24.832 0 16S7.168 0 16 0h352c8.832 0 16 7.168 16 16s-7.168 16-16 16zM368 277.332H16c-8.832 0-16-7.168-16-16s7.168-16 16-16h352c8.832 0 16 7.168 16 16s-7.168 16-16 16zm0 0" fill="#0164a3" data-original="#000000" class=""></path></g></svg>
               </div>
            </nav>
       </div>
   </header>
   
   @section('body')
   @show
   
   
   
   
   
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    function openNavMenu() {
        let NavMenu = document.getElementById("innerNavMenu")
        let overlay = document.getElementById("overlay")
        NavMenu.classList.add("active");
        overlay.classList.add("active");
    }
    function closeNavMenu() {
        let NavMenu = document.getElementById("innerNavMenu")
        let overlay = document.getElementById("overlay")
        NavMenu.classList.remove("active");
        overlay.classList.remove("active");
    }
    
    $(function(){
        var current = location.pathname;
        $('#innerNavMenu li a').each(function(){
            var $this = $(this);
            if($this.attr('href').indexOf(current) !== -1){
                $this.addClass('activeLink');
            }else{
                $this.removeClass('activeLink');
            }
        })
    });
  
</script>

</body>
</html>