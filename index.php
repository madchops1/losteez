<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Chicago');

include 'classes/website.class.php';
include 'classes/users.class.php';
include 'classes/user.class.php';
include 'classes/qr.class.php';
include 'classes/controller.php';
include 'classes/view.php';

$website = new website;

?>
<!DOCTYPE html>
<!--[if lt IE 7]>     <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US"><![endif]-->
<!--[if IE 7]>        <html class="no-js lt-ie9 lt-ie8" lang="en-US">       <![endif]-->
<!--[if IE 8]>        <html class="no-js lt-ie9" lang="en-US">              <![endif]-->
<!--[if gt IE 8]>

<!--><html lang="en-US"><!--<![endif]-->
<!--[if !IE]><!--><script>if (/*@cc_on!@*/false) { document.documentElement.className+=' lt-ie10'; }</script><!--<![endif]-->  

<head>

	<!-- META TAGS -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?=$website->siteName?> | Lost &amp; Found at its Finest</title>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<link rel='stylesheet' id='bean-css'  href='wp-content/themes/base/assets/css/framework5152.css?ver=1.0' type='text/css' media='all' />
  <link rel='stylesheet' id='main-style-css'  href='wp-content/themes/base/stylead05.css?ver=1.4' type='text/css' media='all' />
  <link rel='stylesheet' id='mobile-css'  href='wp-content/themes/base/assets/css/mobile5152.css?ver=1.0' type='text/css' media='all' />
  <link rel='stylesheet' id='bean-pricingtables-style-css'  href='wp-content/plugins/bean-pricingtables/css/bean-pricingtables5152.css?ver=1.0' type='text/css' media='all' />
  <link rel='stylesheet' id='bean-shortcodes-style-css'  href='wp-content/plugins/bean-shortcodes/themes/Base/bean-shortcodes5152.css?ver=1.0' type='text/css' media='all' />
  <script type='text/javascript' src='wp-includes/js/jquery/jquery3e5a.js?ver=1.10.2'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
  <script type='text/javascript' src='wp-includes/js/comment-reply.minf43b.js?ver=3.7.1'></script>

	<script type="text/javascript">
		jQuery(document).ready(function($){

			// flip boxes
			$('.hover').hover(function(){
				$(this).addClass('flip');
			},function(){
				$(this).removeClass('flip');
			});	
						
		});
	</script>
	
	
  <style>
  
  /* ACCENT COLOR */	
  		
  </style>

	<link rel="shortcut icon" href="wp-content/themes/base/assets/images/favicon.png"/> 
	<link rel="apple-touch-icon-precomposed" href="wp-content/themes/base/assets/images/apple-touch-icon.png"/>
	
		
	<style></style>		
			
</head>

<body class="home page page-id-13 page-template page-template-page-home-php animated BeanFadeIn unknown">
 	<div id="responsive-nav" class="show-for-small">
 	  <div class="menu-footer-container">
 	    <form method="get" id="responsive-nav-form" action="http://demo.themebeans.com/base" class="custom">
 	      <select id="menu-footer" class="menu dropdown-menu"  onchange="if(this.options[this.selectedIndex].value != &#39;&#39;){window.top.location.href=this.options[this.selectedIndex].value}">
   	    <?=$website->responsiveNav?>
   	    
   	    </select>
      </form>
    </div> 		
	</div><!-- END #responsive-nav --> 	
  <div class="drop-in-header full">
	  <div class="row">	
  		<div class="logo four columns">
  			<a href="/" title="Base" rel="home">
	        <h1 class="logo_text"><?=$website->siteName?></h1>
				</a>
		  </div><!-- END .logo -->
			
			<div class="eight columns right">
				<div class="menu-footer-container">
				  <ul id="menu-footer-1" class="main-menu"><li id="menu-item-216" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-216"><a href="http://demo.themebeans.com/base">Home</a></li>
            <li id="menu-item-265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265"><a href="the-blogroll/index.html">Blog</a></li>
            <li id="menu-item-217" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-217"><a href="shortcodes/index.html">Shortcodes</a>
            <ul class="sub-menu">
            	<li id="menu-item-268" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268"><a href="buttons/index.html">Buttons</a></li>
            	<li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-267"><a href="feature-area-shortcodes/index.html">Feature Area Shortcodes</a></li>
            	<li id="menu-item-269" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-269"><a href="typography/index.html">Typography</a></li>
            	<li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a href="archives/index.html">Archives</a></li>
            </ul>
            </li>
            <li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="contact/index.html">Contact</a></li>
            <li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-215"><a href="http://themeforest.net/item/base-premium-knowledge-base-wiki-faq-theme/4636112/?ref=themebeans">Purchase</a></li>
          </ul>
        </div>				
			</div><!-- END .eight columns -->
	  </div><!-- END .row -->
	</div><!-- END .drop-in-header full -->
	
	<div id="header-container">
		<div class="row">		
			<div class="header-navigation">
				<div class="logo three columns">
	      	<a href="http://demo.themebeans.com/base" title="Base" rel="home"><h1 class="logo_text">lostEEZ</h1></a>
		    </div><!-- END .logo -->
				<div class="nine columns hide-for-small">	
				  <nav id="navigation" role="navigation">
						<div class="main_menu">
							<div class="menu-footer-container">
							  <ul id="menu-footer-2" class="main-menu">
							    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-216"><a href="/">Home</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265"><a href="/about">About</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="/register">Register</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="/found">Found <?=$website->siteName?></a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-215"><a href="/contact">Contact</a></li>
                </ul>
              </div>							
						</div>
					</nav>
				</div>
			</div>
			
			<header id="page-header" class="twelve columns">
				<div class="eleven columns centered">
					<h1 class="animated BeanFadeDown">Welcome,  meet <?=$website->siteName?>.<br>Lost and Found at its Finest.</h1><p>Place a <?=$website->siteName?> QR code on any item, your phone case, on your keys, in your wallet, your coat, your laptops &amp; tablets, need we go on... This stuff is important to you.<br>Now help you're fellow human give it back to you!</p>
          <form id="searchform" class="searchform animated BeanBounceUp" method="get" action="">
          	<input type="text" name="s" class="s" value="Enter QR code number..." onfocus="this.value='';" onblur="if(this.value=='')this.value='Enter QR code number...';" />
          	<button type="submit" class="button animated BeanButtonShake"><span>Found!</span></button>
          </form><!-- END #searchform -->
				</div><!-- END .ten columns centered -->
			</header><!-- END #page-header -->
			
		</div><!-- END .row -->
	</div><!-- END #header-container -->	
	
	<div class="home-widgets-featured twelve animated BeanFadeIn">
		<div class="row">
			<div class="twelve">
				<div class="widget widget_bean_feature_area clearfix"> 
		
      		<div class="bean-panel animated BeanFadeIn hover six columns mobile-six">
      			<div class="front">
      			
      				<div class="feature-icon Check">				
      				<style scoped>.feature-icon { background-color:#97D798; }</style>
      				
      				</div>
      			
      				<h2>Register a New <?=$website->siteName?></h2>
      			
      				<p>Maecenas sed diam eget risus varius blandit sit amet.</p>
      			
      			</div><!-- END .front -->
      			
      						
      				<div class="back twelve columns">
      				
      					<h5>More Info</h5>
      				
      					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dsed consecteturs.</p>
      					<a href="#" class="base-button">Register a <?=$website->siteName?></a>
      				</div><!-- END .back -->
      		
      						
      		</div><!--END .bean-panel hover four columns-->
      		
      		
	

	
		
		<div class="bean-panel animated BeanFadeIn hover six columns mobile-six">
		
			<div class="front">
			
				<div class="feature-icon Compass"></div>
			
				<h2>I found a <?=$website->siteName?>!</h2>
			
				<p>If you found a lost item with a <?=$website->siteName?> QR code this is the place for you.</p>
			
			</div><!-- END .front -->
			
						
				<div class="back twelve columns">
				
					<h5>More Info</h5>
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dsed consecteturs.</p>
				
										
						<a href="#" class="base-button">I found a <?=$website->siteName?>.</a>
				
										
				</div><!-- END .back -->
		
						
		</div><!--END .bean-panel hover four columns-->
		
		
	
		
		
		<!-- 
		<div class="bean-panel animated BeanFadeIn hover four columns mobile-four">
		
			<div class="front">
			
				<div class="feature-icon Team"></div>
			
				<h2>Feature Area 3</h2>
			
				<p>Maecenas sed diam eget risus varius blandit sit amet.</p>
			
			</div>
			
						
				<div class="back twelve columns">
				
					<h5>More Info</h5>
				
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dsed consecteturs.</p>
				
										
						<a href="#" class="base-button">Click Here</a>
				
										
				</div>
		
						
		</div>
		-->
		
				

	
	</div>				
			</div><!-- END .twelve columns -->
	
		</div><!-- END .row -->
	
	</div><!-- END .home-widgets-featured -->
	
 

<div id="main-container" class="twelve animated BeanFadeIn"> 
	
	<div class="row">
		<div class="seven columns clearfix" role="main">
			<section id="post-13" class="post-13 page type-page status-publish hentry">	
      	<div class="entry-content">
      		<h5>Welcome to <?=$website->siteName?>!</h5>
          <p>
            The idea behind our lost &amp; found system is simple. 
            Stick a <?=$website->siteName?> on anything. 
            If you lose that item, and it is found by some greedy 
            fellow out there. You can offer them a reward to return 
            your item. The QR code is accompanied by a message informing 
            the finder of the reward. Providing a hefty incentive, and an 
            easy way to return your lost phone, or keys. <?=$website->siteName?> 
            is free pay nothing until you get your item back!.
          </p>
      	</div><!-- END .entry-content -->
      </section><!-- END #post-13 -->
		
			<div class="home-widgets">
			
				<div class="widget widget_bean_category clearfix">	
	
	
	<div class="bean-category cats-1 six columns twelve ">		
		<h3 class="widget-title"><span>Getting Started.</span></h3><span class="number"> 11</span>				
		<ul>
						
				
				<li class="cat">
				
					<a href="using-password-protection/index.html">Using Password Protection.</a>
				
				</li>
			
						
				
				<li class="cat">
				
					<a href="validating-html-from-your-website/index.html">Validating HTML from your Website.</a>
				
				</li>
			
						
				
				<li class="cat">
				
					<a href="using-wordpress-themes-your-first-time/index.html">Your First WordPress Theme.</a>
				
				</li>
			
						
				
				<li class="cat">
				
					<a href="styling-lists-with-css/index.html">Styling Lists with CSS.</a>
				
				</li>
			
						
				
				<li class="cat">
				
					<a href="hosted-video-post-format/index.html">Hosted Video Post Format.</a>
				
				</li>
			
					
		</ul>	
			
				
			<div class="view-all">
		
				<a href="category/getting-started/index.html?cat=4" class="base-button">View All</a>
		
			</div><!-- END .view-all -->
	
			

	</div><!-- END .bean-category -->	
	
	


	
	
	<div class="bean-category cats-2 six columns">	
	
		<h3 class="widget-title"><span>Frequently Asked</span></h3><span class="number"> 8</span>		
		<ul>		
						
				
				<li class="cat">
				
					<a href="writing-code-elements-in-your-post/index.html">Writing Code Elements in your&hellip;</a>
				
				</li>
			
						
				
				<li class="cat">
				
					<a href="validating-html-from-your-website/index.html">Validating HTML from your Website.</a>
				
				</li>
			
						
				
				<li class="cat">
				
					<a href="adding-a-custom-favicon/index.html">Adding a Custom Favicon.</a>
				
				</li>
			
						
				
				<li class="cat">
				
					<a href="uploading-files-via-file-transfer-protocol/index.html">Upload with File Transfer Protocol.</a>
				
				</li>
			
						
				
				<li class="cat">
				
					<a href="developing-a-nice-color-scheme/index.html">Developing a Nice Color Scheme.</a>
				
				</li>
			
					
		</ul>
			
				
			<div class="view-all">
		
				<a href="category/frequently-asked/index.html?cat=3" class="base-button">View All</a>
		
			</div><!-- END .view-all -->
	
			
		
	</div><!-- END .bean-category -->
	
	


</div>			
			</div><!-- END .home-widgets -->
				
		</div><!-- END $bean_content_class -->
		
				
			<aside class="sidebar five columns sidebar-right hide-for-small" role="complementary">
				
				<div class="widget widget_bean_social clearfix">
				  <h3 class="widget-title"><span>We're in Chicago!</span></h3>
				  <!-- <ul class='bean_social_icons'>
				    <a title='Twitter' href='#'><li class='bean_social_icon bean_social-twitter'></li></a>
				    <a title='Facebook' href='#'><li class='bean_social_icon bean_social-facebook'></li></a>
				    <a title='Dribbble' href='#'><li class='bean_social_icon bean_social-dribbble'></li></a><a title='Mail' href='#'><li class='bean_social_icon bean_social-mail'></li></a><a title='Instagram' href='#'><li class='bean_social_icon bean_social-instagram'></li></a><a title='Pinterest' href='#'><li class='bean_social_icon bean_social-pinterest'></li></a><a title='Vimeo' href='#'><li class='bean_social_icon bean_social-vimeo'></li></a><a title='Evernote' href='#'><li class='bean_social_icon bean_social-evernote'></li></a><a title='MySpace' href='#'><li class='bean_social_icon bean_social-myspace'></li></a><a title='LinkedIn' href='#'><li class='bean_social_icon bean_social-linkedin'></li></a><a title='Forrest' href='#'><li class='bean_social_icon bean_social-forrest'></li></a><a title='PayPal' href='#'><li class='bean_social_icon bean_social-paypal'></li></a><a title='Google Plus' href='#'><li class='bean_social_icon bean_social-googleplus'></li></a><a title='Spotify' href='#'><li class='bean_social_icon bean_social-spotify'></li></a><a title='Behance' href='#'><li class='bean_social_icon bean_social-behance'></li></a><a title='RSS' href='#'><li class='bean_social_icon bean_social-rss'></li></a><a title='Dropbox' href='#'><li class='bean_social_icon bean_social-dropbox'></li></a><a title='Soundcloud' href='#'><li class='bean_social_icon bean_social-soundcloud'></li></a><a title='Rdio' href='#'><li class='bean_social_icon bean_social-rdio'></li></a><a title='deviantART' href='#'><li class='bean_social_icon bean_social-deviantart'></li></a><a title='Skype' href='#'><li class='bean_social_icon bean_social-skype'></li></a><a title='Zerply' href='#'><li class='bean_social_icon bean_social-zerply'></li></a><a title='Picasa' href='#'><li class='bean_social_icon bean_social-picasa'></li></a><a title='500px' href='#'><li class='bean_social_icon bean_social-500px'></li></a><a title='YouTube' href='#'><li class='bean_social_icon bean_social-youtube'></li></a><a title='Steam' href='#'><li class='bean_social_icon bean_social-steam'></li></a><a title='Reddit' href='#'><li class='bean_social_icon bean_social-reddit'></li></a>
				  </ul> -->
				</div>
				
				<div class="widget widget_bean_newsletter clearfix"> 
  		
  	      <h3 class="widget-title"><span>Newsletter.</span></h3>	
  		    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna.</p>	
  		    
  		    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
		
			    <input type="email" name="EMAIL" class="email-newsletter" id="mce-EMAIL" value="Enter your email..." required="" onfocus="this.value='';" onblur="if(this.value=='')this.value='Enter your email...';">
					<input type="submit" value="Subscribe" class="base-button animated BeanButtonShake ">
		
		      </form><!-- END .form -->
	      </div>			
	    </aside><!-- END #sidebar -->
	  </div><!-- END .row -->
  </div><!-- END #main-container -->


	<div class="home-widgets-featured btm no-footer twelve animated BeanFadeIn">
		<div class="row">
			<div class="twelve">
							
			</div><!-- END .twelve columns -->
		</div><!-- END .row -->
	</div><!-- END .home-widgets-featured -->

 

	


<footer class="animated BeanFadeIn">
	<div class="footer-btm">
		<div class="row">
			<div class="twelve columns">
			
				<ul id="menu-footer-3" class="footer-navigation"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-216"><a href="http://demo.themebeans.com/base">Home</a><span class="nav-sep">&middot;</span></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265"><a href="the-blogroll/index.html">Blog</a><span class="nav-sep">&middot;</span></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-217"><a href="shortcodes/index.html">Shortcodes</a><span class="nav-sep">&middot;</span></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="contact/index.html">Contact</a><span class="nav-sep">&middot;</span></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-215"><a href="http://themeforest.net/item/base-premium-knowledge-base-wiki-faq-theme/4636112/?ref=themebeans">Purchase</a><span class="nav-sep">&middot;</span></li>
        </ul>			
						
		    <div class="copyright">
			    Copyright &copy; <?=date('Y') ?> <a href=""><?=$website->siteName?></a>. Powered by <a href="http://webksd.com">KSD</a>. 
		    </div>
		    <!--END .colophon-->
				
					
  					<!-- 
  		  <ul class="social-foot">
  							 	
  				<li>
  				    <a href="" title="Twitter" class="social-icon twitter"></a>
  				</li>
  				
  							 	
  				<li>
  				    <a href="" title="Facebook" class="social-icon facebook"></a>
  				</li>
  				
  							 	
  				<li>
  				    <a href=" title="Dribbble" class="social-icon dribbble"></a>
  				</li>
  			
  							 	
  				<li>
  				    <a href="" title="Instagram" class="social-icon instagram"></a>
  				</li>
  			
  							 	
  				<li>
  				    <a href="" title="Google Plus" class="social-icon googleplus"></a>
  				</li>
  			
  							 	
  				<li>
  				    <a href="" title="Linkedin" class="social-icon linkedin"></a>
  				</li>	
  			
  							 	
  				<li>
  				    <a href="" title="Zerply" class="social-icon zerply"></a>
  				</li>			
  			
  							 	
  				<li>
  				    <a href="" title="Behance" class="social-icon behance"></a>
  				</li>	
  			
  							 	
  				<li>
  				    <a href="" title="Pinterst" class="social-icon pinterest"></a>
  				</li>	
  				
  							 	
  				<li>
  				    <a href="" title="GitHub" class="social-icon github"></a>
  				</li>		
  			
  							 	
  				<li>
  				    <a href="" title="YouTube" class="social-icon youtube"></a>
  				</li>
  			
  							 	
  				<li>
  				    <a href="" title="Email Us" class="social-icon email"></a>
  				</li>			
  			
  							 	
  				<li>
  				    <a href="" title="Flickr" class="social-icon flickr"></a>
  				</li>			
  				<li>
  				    <a href="" title="Subscribe via RSS" class="social-icon rss"></a>
  				</li>
  				<li>
  				    <a href="" title="Forrst" class="social-icon forrst"></a>
  				</li>
    								
  		    </ul>				
  		    -->
  		    
  			</div><!-- END .twelve columns -->
  		</div><!-- END .row -->
  	</div><!-- END .footer-btm -->

  </footer>
   	
  <link rel='stylesheet' id='bean-social-style-css'  href='wp-content/plugins/bean-social/css/bean-social5152.css?ver=1.0' type='text/css' media='all' />
  <script type='text/javascript' src='wp-content/themes/base/assets/js/custom-libraries5152.js?ver=1.0'></script>
  <script type='text/javascript' src='wp-content/themes/base/assets/js/customd5f7.js?ver=2.0'></script>
  <script type='text/javascript' src='wp-content/themes/base/assets/js/retinad5f7.js?ver=2.0'></script>
  <script type='text/javascript' src='wp-content/themes/base/assets/js/jquery.validate.min3aa8.js?ver=1.9'></script>
  
  <script type='text/javascript' src='wp-content/themes/base/assets/js/post-likes5152.js?ver=1.0'></script>
  <script type='text/javascript' src='wp-content/plugins/bean-pricingtables/js/bean-pricingtables5152.js?ver=1.0'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.core.mindb08.js?ver=1.10.3'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.widget.mindb08.js?ver=1.10.3'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.accordion.mindb08.js?ver=1.10.3'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.tabs.mindb08.js?ver=1.10.3'></script>
  <script type='text/javascript' src='wp-content/plugins/bean-shortcodes/js/bean-shortcodes5152.js?ver=1.0'></script>
  <script type='text/javascript' src='wp-content/plugins/bean-shortcodes/js/prettify5152.js?ver=1.0'></script>

</body>
</html>