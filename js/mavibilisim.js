
function menuac() {
    document.getElementById("menu").style.height = "100%";
  }
  
  function menukapat() {
    document.getElementById("menu").style.height = "0%";
  }

  var deger = 0;
  slayt();
  
  function slayt() {
      var i;
      var x = document.getElementsByClassName("slayt1");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      deger++;
      if (deger > x.length) {deger= 1}    
      x[deger-1].style.display = "block";  
      setTimeout(slayt, 3000); 
  }