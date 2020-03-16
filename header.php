<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>
<style>
/* nav */
/* nav */


.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  right: 0;
  background-color: white; 
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}
.menu-open {
  color: black;
  font-size: 30px;
  padding-right: 10px;
}
.closebtn {
  color: green;
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #44c0c5;
  display: block;
  transition: 0.3s;
}
.sidenav ul {
     width:100%; 
     
}
.sidenav li {
padding-left:1.5rem;
}
/* When you mouse over the navigation links, change their color */
.sidenav li:hover {
 background-color: #cef1f2;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.openWidth {
  width: 100%;
}
.widtho {
  width: 0px;
}
.logo {
  display: flex;
  justify-content: space-between;
}

@media(min-width: 768px) {

     /* NAV */

.sidenav {
  display: flex;
  justify-content: space-around;
  position: initial;
  overflow-x: visible;
  height: 0;
  padding: 0px;
}
.sidenav a {
 
  text-decoration: none;
}
.logo {
  text-align: center;
}
#mySidenav {
  width: 100%;
}
.sidenav .closebtn {
  display: none;
}
.menu-open {
  display: none;
}
.sidenav ul {
     display:flex;
}
.sidenav {
padding: 2rem 0;
height:80px;
max-width:1200px;
    margin: 0 auto;
}
.sidenav li:hover {
 background-color: white;
}
.sidenav li a{
     padding-bottom: 7px;
     
}
.sidenav a{
     padding:0px;
     font-size: 18px;
}
.sidenav li{
     padding: 0 20px;
}
.sidenav li a:hover {
color:#cef1f2;
border-bottom: 1px solid #cef1f2;
} }

/* END NAV */




</style>
<script type="text/javascript">
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

</script>

<body <?php body_class(); ?>>






        <div class="navigation">
        
        <div class="logo">
          <h1>
          <a class="home-link"  href="<?php bloginfo('url'); ?>">
 
 <img class="mobile-menu-icon" src="<?php echo get_template_directory_uri() . '/assets/icons/logo.svg'; ?>" alt="jargon company logo">
 Stef Guilly 
</a>
          </h1>
     
          <span onclick="openNav()" class="menu-open">&#9776;</span>
        </div>
        <nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <?php wp_nav_menu(array('menu' => 'catagories menu', 'menu_class'=> 'list-view',));?>
        </nav>
      </div>
      
 
    

 