<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Kellulutè: beeswax based products</title>
  <meta name="description" content="All natural body wash from beeswax." />
  <meta name="keywords" content="natural, body wash, shampoo, bee, beeswax, coconut oil, kelulut, kellulute, madu, sabun, syampu." />
    
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('style.css'); ?>/blog.css" />  
  <link rel="stylesheet" type="text/css" media="screen and (min-width: 0px)" href="<?php echo get_template_directory_uri(); ?>/css/mobile-header.css" />
  <link rel="stylesheet" type="text/css" media="screen and (min-width: 767px)" href="<?php echo get_template_directory_uri(); ?>/css/desktop-header.css" />
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 767px)" href="<?php echo get_template_directory_uri(); ?>/css/mobile-footer.css" />
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 4000px)" href="<?php echo get_template_directory_uri(); ?>/css/desktop-footer.css" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?php wp_head();?>
  
</head>
    
<body>

   <nav id="mainbar">
     
    <a id="logo" href="#home">Kellulutè</a>
    <a id="cart" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
   
    
     <ul id="navbar">
         <li class="list"><a class="bar" href="#">Products</a></li> 
         <li class="list"><a class="bar" href="#">Our Projects</a></li>
         <li class="list"><a class="bar" href="#">Videos</a></li>
         <li class="list"><a class="bar" href="#">Contact Us</a></li>
    </ul>
    
    <span id="right" onclick="openNav()"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span>
</nav>
   
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="text-decoration: none;">&times;</a>
  <a href="#">Products</a>
  <a href="#">Our Projects</a>
  <a href="#">Videos</a>
  <a href="#">Contact Us</a>
</div>


<script>
    
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
 
 