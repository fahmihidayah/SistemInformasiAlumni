<!Doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>LOGIN </title>
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	  
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    
    <!-- **CSS - stylesheets** -->
	<link id="default-css" rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css" media="all" />
	<link id="shortcodes-css" rel="stylesheet" href="{{URL::asset('css/shortcodes.css')}}" type="text/css" media="all"/>
	<link id="skin-css" rel="stylesheet" href="{{URL::asset('skins/skyblue/style.css')}}" type="text/css" media="all"/>
    <link id="layer-slider" rel="stylesheet"  href="{{URL::asset('css/layerslider.css')}}" media="all" />
	
	<!-- **Additional - stylesheets** -->
	<link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{URL::asset('css/meanmenu.css')}}" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{URL::asset('css/prettyPhoto.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{URL::asset('css/animations.css')}}" type="text/css" media="all" />
    
    <!-- **Font Awesome** -->
	<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" type="text/css" />
    
    <!-- **Google - Fonts** -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
</head>

<body>
<div class="loader-wrapper">
	<div id="loader-image"><img src="{{URL::asset('images/anm.gif')}}" width="100px" alt="image"/></div>
</div>
<!-- **Wrapper** -->
<div class="wrapper"> 
	<div class="inner-wrapper">
        <div id="header-wrapper">
	        <!-- **Header** -->
	        <header class="header" >
	        	<div class="container" >
	            
	                <!-- **Logo - End** -->
	                <div id="logo">
	                    <a href="index.html" title="Priority"> <img src="{{URL::asset('images/logo/Capture.JPG')}}" width="100px" alt="image"/> </a>
	                </div><!-- **Logo - End** -->
	                
	                <div id="menu-container">
	                    <!-- **Nav - Starts**-->
	                    <nav id="main-menu">
	                        <div id="dt-menu-toggle" class="dt-menu-toggle">
                                Menu
                                <span class="dt-menu-toggle-icon"></span>
                            </div>
                            <ul class="menu">
	                            <li class="menu-item-simple-parent current_page_item"><div><a href="#">HOME</a></div></li>
	                            <li class="menu-item-simple-parent "><div><a href="#">PROFILE</a></div></li>
                                <li class="menu-item-simple-parent "><div><a href="#">PROJECTS</a></div>       </li>
	                            <li class="menu-item-simple-parent "><div><a href="#">EVENTS</a></div>                      </li>
	                            <li class="menu-item-simple-parent " ><div><a href="#" style="border-right: 1px solid rgb(0, 0, 0);">ABOUT</a></div> </li>
                            
	                        </ul>
	                    </nav>
	                    <!-- **Nav - End**-->
	               </div>
	
	            </div>
					<div class="top-right cari">
                    <ul class="register" style="padding-top: 70px;">
                        
                        <li><a href="#" title="Register Now"><span class="fa fa-user"></span>  </a><a href="#" title="Login"><img src="images/log_out_log_in.png" style="width: 15px; padding-right: 8px; padding-left: 5px;"/></a></li>
                        <li><p> <input placeholder="search" id="kw" name="kws" autocomplete="off" type="text" > </p></li>
                    </ul>
                </div>
	        </header><!-- **Header - End** -->
        </div>
            
        <!-- **Main - Starts** --> 
		<div id="main">
        	  <div class="dt-sc-margin100"></div>    
			<!-- Container starts-->
			<div class="container">
				<!-- Primary Starts -->
				 <section id="primary" class="content-full-width">
                <div class="full-width-section">
                    <div class="container">
                    	<div class="page_info fulli"> 
                        	<h3 class="aligncenter"> 
                              Account - Member Login </h3>
                        </div>
                        <div class="dt-sc-margin20"></div>
                    </div>
                </div>  
                <div class="full-width-section parallax full-section-bg fulli">
                    <div class="container cepek">
                        <div class="dt-sc-clear"></div>                            
                        <div class="form-wrapper login">
                            <form method="post" id="loginform" name="frmLogin">
                                <p>
                                    <input placeholder="Username or Email" id="user_name" name="user" autocomplete="off" type="text">
                                </p>
                                
                                <p>
                                    <input placeholder="Password" id="user_pwd" name="pwd" type="password">
                                </p>
                                
                                <label><input value="forever" id="rememberme" name="rememberme" type="checkbox"> Remember Me</label>
                                <input class="button" value="Log-In" type="submit">     
                            </form>   
                        </div>
                    </div>
                </div>
                
                <div class="full-width-section fulli">  
                    <div class="container cepek"> 
                        <div class="dt-sc-margin70"></div>
                        <div class="page_info aligncenter">
                            <h4 class="title">Need help logging-in?</h4>
                            <p>If you don't have an account yet, <a href="register.html" title="">Register here</a> and get started.. </p>
                            <p>Lost or Forgot your password? You can change it with <a href="#" title="">Reset Password</a> here.. </p>
                        </div>
                    </div>
                </div>
                <div class="dt-sc-margin100" style="margin-top: 90px;"></div> 
                   <br/><br/><br/>
        	</section>  
            </div> <!-- **container - Ends** --> 
		
        </div> <!-- **Main - Ends** --> 
        
        <!-- **Footer** -->
        <footer id="footer">
        
            <div class="copyright">
            	<div class="container" >
                	<p>IKATAN ALUMNI ARSITEKTUR UPH. © 2015 <br/>  <a href="#">Rembugan.com</a></p>
                    <ul class="footer-links">
                    	<li> <img src="{{URL::asset('images/logo/Picture2.png')}}" alt="image"/> </li>
                    	<li> <img src="{{URL::asset('images/logo/Picture4.png')}}" alt="image"/><img src="{{URL::asset('images/logo/Picture4.png')}}" alt="image"/> </li>
                    </ul>
                </div>
            </div>
            
        </footer> <!-- **Footer - End** -->
        
    </div><!-- **inner-wrapper - End** -->
    
</div><!-- **Wrapper - End** -->
        
	<!-- **jQuery** -->  
	<script src="{{URL::asset('js/jquery-1.10.2.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/jquery-migrate.min.js')}}"></script>
    
    <script src="{{URL::asset('js/preloader.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/pace.min.js')}}" type="text/javascript"></script>
    
    <script src="{{URL::asset('js/jquery.tabs.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.tipTip.minified.js')}}"></script>
	
	<script src="{{URL::asset('js/jquery-easing-1.3.js')}}" type="text/javascript"></script>
    
    <script src="{{URL::asset('js/jquery.parallax-1.1.3.js')}}" type="text/javascript"></script>
    
    <script src="{{URL::asset('js/jquery.carouFredSel-6.2.1-packed.js')}}" type="text/javascript"></script>
    
    <script src="{{URL::asset('js/jquery.inview.js')}}" type="text/javascript"></script>
    
    <script src="{{URL::asset('js/jquery.bxslider.min.js')}}" type="text/javascript"></script>
	
	<script src="{{URL::asset('js/jquery.nav.js')}}" type="text/javascript"></script>
    
    <script src="{{URL::asset('js/jquery.donutchart.js')}}" type="text/javascript"></script>
	
	<script src="{{URL::asset('js/jquery.jcarousel.min.js')}}" type="text/javascript"></script>
	
    <script src="{{URL::asset('js/jquery.isotope.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
	
	<script src="{{URL::asset('js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
    
    <script src="{{URL::asset('js/jquery.smartresize.js')}}" type="text/javascript"></script>
	
	<script src="{{URL::asset('js/responsive-nav.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/jquery.meanmenu.min.js')}}" type="text/javascript"></script>
	
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="{{URL::asset('js/jquery.gmap.min.js')}}"></script>
	
	<script src="{{URL::asset('js/layerslider.transitions.js')}}"></script> 
    <script src="{{URL::asset('js/layerslider.kreaturamedia.jquery.js')}}"></script> 
    <script src="{{URL::asset('js/greensock.js')}}"></script> 
    
    <script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script><script data-cfasync="false" type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_9','jquery'); } else { lsjQuery("#layerslider_9").layerSlider({responsiveUnder: 1240, layersContainer: 1170, startInViewport: false, pauseOnHover: false, forceLoopNum: false, autoPlayVideos: false, skinsPath: 'js/layerslider/skins/'}) } }); </script>
	
    
	<!-- **Sticky Nav** -->
	<script src="{{URL::asset('js/jquery.sticky.js')}}" type="text/javascript"></script>

	<!-- **To Top** -->
	<script src="{{URL::asset('js/jquery.ui.totop.min.js')}}" type="text/javascript"></script>
	
	<script type="text/javascript" src="{{URL::asset('js/twitter/jquery.tweet.min.js')}}"></script>
    
    <script src="{{URL::asset('js/jquery.viewport.js')}}" type="text/javascript"></script> 
	
	<script type="text/javascript" src="{{URL::asset('js/jquery.validate.min.js')}}"></script>
	
	<script src="{{URL::asset('js/retina.js')}}" type="text/javascript"></script>
	
	<script src="{{URL::asset('js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
    
	<script src="{{URL::asset('js/custom.js')}}" type="text/javascript"></script>       
        
</body>
</html>



