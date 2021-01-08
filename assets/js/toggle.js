
function ttt(){
  if(document.getElementById('body').style.backgroundColor == 'white'){
      document.getElementById('body').style.backgroundColor = '#1e1e1e';
      let pc = document.getElementsByClassName("pc");
      let sh = document.getElementsByClassName("sh");
      let price = document.getElementsByClassName("price");
      let fl = document.getElementsByClassName("fl");
    document.getElementById('theme').src="./assets/images/moon1.svg";
  for (i = 0; i < pc.length; i++) {
    pc[i].style.color = "white";
   
  }
  for (i = 0; i < sh.length; i++) {
  sh[i].style.color = "white";
  }
  for (i = 0; i < price.length; i++) {
      price[i].style.color = "white";
      }
  
  for (i = 0; i < fl.length; i++) {
      fl[i].style.color = "white";
    }
   
  
  
  }
  else{
      document.getElementById('body').style.backgroundColor = 'white';
      let pc = document.getElementsByClassName("pc");
      let sh = document.getElementsByClassName("sh");
      let price = document.getElementsByClassName("price");
      let fl = document.getElementsByClassName("fl");
      document.getElementById('theme').src="./assets/images/sun1.svg";
      let i;
      for (i = 0; i < pc.length; i++) {
        pc[i].style.color = "#4a4a4a";
      
      }
      for (i = 0; i < sh.length; i++) {
      sh[i].style.color = " #4a4a4a";
      }
      for (i = 0; i < price.length; i++) {
          price[i].style.color = " #121212";
          }
  
          for (i = 0; i < fl.length; i++) {
              fl[i].style.color = "#4a4a4a";
            }
        
  
  }
  
  
  }




document.getElementById("toggle").addEventListener("click",ttt);


document.getElementById("home").addEventListener("click",function(){
    window.location.href = './index.html'; 
});




