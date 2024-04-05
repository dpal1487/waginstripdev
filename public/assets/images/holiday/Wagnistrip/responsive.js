function openNav() {
    document.getElementById("mySidenav").style.width = "880px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }


  $('#offtab1').click(function(){
    $('#TRENDING').show();
    $('#FLIGHTS').hide();
    $('#HOTELS').hide();
    $('#VILLA').hide();
  });

  $('#offtab2').click(function(){
    $('#FLIGHTS').show();
    $('#TRENDING').hide();
    $('#HOTELS').hide();
    $('#VILLA').hide();
  });

  $('#offtab3').click(function(){
    $('#HOTELS').show();
    $('#TRENDING').hide();
    $('#FLIGHTS').hide();
    $('#VILLA').hide();
  });

  $('#offtab4').click(function(){
    $('#VILLA').show();
    $('#TRENDING').hide();
    $('#FLIGHTS').hide();
    $('#HOTELS').hide();
  });

  

  function rotriprice(){
    $('.price').toggle();
  }

  function Airlines(){
    $('.Airlines').toggle();
  }

  function Time(){
    $('.Time').toggle();
  }

  function Duration(){
    $('.Duration').toggle();
  }

  function Stops(){
    $('.Stops').toggle();
  }


  

  $('#UPI').click(function(){
    $(this).addClass("activePay"); 
    $('#CREADITATM').removeClass("activePay"); 
    $('#PAYLATER').removeClass("activePay"); 
    $('#upi').show();
    $('#creditAtm').hide();
    $('#paylater').hide();
  });

  $('#CREADITATM').click(function(){
    $(this).addClass("activePay");
    $('#UPI').removeClass("activePay"); 
    $('#PAYLATER').removeClass("activePay");
    $('#creditAtm').show();
    $('#upi').hide();
    $('#paylater').hide();
 
  });

  $('#PAYLATER').click(function(){
    $(this).addClass("activePay");
    $('#CREADITATM').removeClass("activePay"); 
    $('#UPI').removeClass("activePay"); 
    $('#paylater').show();
    $('#upi').hide();
    $('#creditAtm').hide();
   
  });

 
