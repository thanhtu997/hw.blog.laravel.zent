<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('blog_asset') }}/">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/slippry.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
</head>

<body>


    <!-- *****************************************************************
    ** Preloader *********************************************************
    ****************************************************************** -->

	<div id="preloader-container">
    	<div id="preloader-wrap">
    		<div id="preloader"></div>
    	</div>
    </div>

    
    <!-- *****************************************************************
    ** Header ************************************************************ 
    ****************************************************************** --> 

    <header class="tada-container">
    
    
    	<!-- LOGO -->    
    	<div class="logo-container">
        	<a href="{{ url('/') }}"><img src="img/logo.png" alt="logo" ></a>
            <div class="tada-social">
            	<a href="#"><i class="icon-facebook5"></i></a>
                <a href="#"><i class="icon-twitter4"></i></a>
                <a href="#"><i class="icon-google-plus"></i></a>
                <a href="#"><i class="icon-vimeo4"></i></a>
                <a href="#"><i class="icon-linkedin2"></i></a>
            </div>
        </div>
        
        
    	<!-- MENU DESKTOP -->
    	<nav class="menu-desktop menu-sticky">
    
            <ul class="tada-menu">
                @foreach($categories as $item_categories)
                     <li><a href="" class="active">{!! $item_categories->name !!} <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                            <?php $menu_level_2 = DB::table('categories')->where('parent_id',$item_categories->id)->get() ?>
                            @foreach($menu_level_2 as $item_menu_level_2)
                        	<li><a href="{!! url('list',[$item_categories->id,$item_categories->slug]) !!}">{!! $item_menu_level_2->name !!}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
{{-- 
                    <li><a href="about-us.html">ABOUT US</a></li>
                    <li><a href="contact.html">CONTACT</a></li> --}}
            </ul>
        
        </nav>
        
        
        <!-- MENU MOBILE -->  
        <div class="menu-responsive-container"> 
            <div class="open-menu-responsive">|||</div> 
            <div class="close-menu-responsive">|</div>              
            <div class="menu-responsive">   
                <ul class="tada-menu">
                    @foreach($categories as $item_categories)
                        <li><a href="#" class="active">{!! $item_categories->name !!} <i class="icon-arrow-down8"></i></a>
                            <ul class="submenu">
                                <?php $menu_level_2 = DB::table('categories')->where('parent_id',$item_categories->id)->get() ?>
                                @foreach($menu_level_2 as $item_menu_level_2)
                            	   <li><a href="{!! url('list',[$item_categories->id,$item_categories->slug]) !!}">{!! $item_menu_level_2->name !!}</a></li>
                                @endforeach                                                                   
                            </ul>
                        </li>
                    @endforeach
                    {{-- <li><a href="about-us.html">ABOUT US</a></li>
                    <li><a href="contact.html">CONTACT</a></li> --}}
                </ul>                        
            </div>
        </div> <!-- # menu responsive container -->
        
        
        <!-- SEARCH -->
        <div class="tada-search">
			<form>
            	<div class="form-group-search">
              		<input type="search" class="search-field" placeholder="Search and hit enter...">
              		<button type="submit" class="search-btn"><i class="icon-search4"></i></button>
            	</div>
          	</form>
        </div>
        
        
    
        @yield('content')
    	
        
        
    </section>

    
    <!-- *****************************************************************
    ** Footer ************************************************************
    ****************************************************************** -->    
    
    <footer class="tada-container">
    
    
    	<!-- INSTAGRAM -->    
    	<div class="widget widget-gallery">
    		<h3 class="widget-title">INSTAGRAM</h3>
    		<div class="image">
            	<a href="#"><img src="img/img-gallery-1.jpg" alt="image gallery 1"></a>
                <a href="#"><img src="img/img-gallery-2.jpg" alt="image gallery 2"></a>
                <a href="#"><img src="img/img-gallery-3.jpg" alt="image gallery 3"></a>
                <a href="#"><img src="img/img-gallery-4.jpg" alt="image gallery 4"></a>
                <a href="#"><img src="img/img-gallery-5.jpg" alt="image gallery 5"></a>
                <a href="#"><img src="img/img-gallery-6.jpg" alt="image gallery 6"></a>
            </div>
            <div class="clearfix"></div>
    	</div>
        
        
        <!-- FOOTER BOTTOM -->        
        <div class="footer-bottom">
        	<span class="copyright">Theme Created by <a href="#">AD-Theme</a> Copyright © 2016. All Rights Reserved</span>
        	<span class="backtotop">TOP <i class="icon-arrow-up7"></i></span>
            <div class="clearfix"></div>
        </div>
        
        
    </footer>
    
    
    <!-- *****************************************************************
    ** Script ************************************************************
    ****************************************************************** -->	
	
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/slippry.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
