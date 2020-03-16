// window.addEventListener('load', e=>{
//    let isOpen = false;
//     const mobileMenuButton = document.querySelector("#mobile-menu-button");
//     const mobileMenu = document.querySelector("#mobile-menu-items");
//      mobileMenu.style.display = "none";


//    //handle click event on icon
//    mobileMenuButton.addEventListener("click", function(e){


//           if(isOpen){
//            isOpen = false;
//            mobileMenu.style.display = 'none'
//           }else{
//               mobileMenu.style.display = "block";
//              isOpen = true
//           }
//    })

//    window.addEventListener('resize', function(e){

//        if(window.innerWidth >= 600){
//          mobileMenu.style.display = "none";
//        }
//    })

// })
function openNav() {
  // document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("mySidenav").classList.add("openWidth");
  document.getElementById("mySidenav").classList.remove("widtho");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  // document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mySidenav").classList.add("widtho");
  document.getElementById("mySidenav").classList.remove("openWidth");
}
