/* centeredmenu javascript */

function addhover() {
   var navli,i;
   // loop through all elements in the nav
   navli = document.getElementById('centeredmenu').getElementsByTagName('li')
   for(i=0;i<navli.length;i++) {
      // add the hover functions to the li onmouseover and onmouseout
      navli[i].onmouseover=function(){hover(this,'hover');};
      navli[i].onmouseout=function(){hover(this,'');};
   }
}
function hover(o,sClass) {
   if (o) {
      o.className = sClass;
   }
}
addhover();

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
