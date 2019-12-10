<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="http://miftyisbored.com/xmlrpc.php" />
      <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
      <![endif]-->
      <script>(function(){document.documentElement.className='js'})();</script>
      <title>A Complete Social Login Application Tutorial for CakePHP 2.3 (Twitter, Facebook and Google) - Mifty is Bored</title>
      <!-- HEAD START -->
      <title>A Complete Social Login Application Tutorial for CakePHP 2.3 (Twitter, Facebook and Google) - Mifty is Bored</title>

<!-- This site is optimized with the Yoast SEO plugin v3.2.5 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="A Complete Social Login Application Tutorial for CakePHP 2.3 (Twitter, Facebook and Google) using CakePHP&#039;s Auth Component"/>
<meta name="robots" content="noodp"/>
<link rel="canonical" href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="A Complete Social Login Application Tutorial for CakePHP 2.3 (Twitter, Facebook and Google) - Mifty is Bored" />
<meta property="og:description" content="A Complete Social Login Application Tutorial for CakePHP 2.3 (Twitter, Facebook and Google) using CakePHP&#039;s Auth Component" />
<meta property="og:url" content="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/" />
<meta property="og:site_name" content="Mifty is Bored" />
<meta property="article:author" content="https://www.facebook.com/mifty.yusuf" />
<meta property="article:section" content="CakePHP" />
<meta property="article:published_time" content="2014-08-01T20:13:25-04:00" />
<meta property="article:modified_time" content="2014-09-18T16:50:06-04:00" />
<meta property="og:updated_time" content="2014-09-18T16:50:06-04:00" />
<meta property="og:image" content="http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot.jpg" />
<!-- / Yoast SEO plugin. -->

<link rel="alternate" type="application/rss+xml" title="Mifty is Bored &raquo; A Complete Social Login Application Tutorial for CakePHP 2.3 (Twitter, Facebook and Google) Comments Feed" href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/miftyisbored.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.2"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='http://miftyisbored.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='ye_dynamic-css'  href='http://miftyisbored.com/wp-content/plugins/youtube-embed/css/main.min.css?ver=4.5.2' type='text/css' media='all' />
<script type='text/javascript' src='http://miftyisbored.com/wp-includes/js/jquery/jquery.js?ver=1.12.3'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.0'></script>
<link rel='https://api.w.org/' href='http://miftyisbored.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://miftyisbored.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://miftyisbored.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.5.2" />
<link rel='shortlink' href='http://miftyisbored.com/?p=1027' />
<link rel="alternate" type="application/json+oembed" href="http://miftyisbored.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fmiftyisbored.com%2Fcomplete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://miftyisbored.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fmiftyisbored.com%2Fcomplete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google%2F&#038;format=xml" />
<link rel='stylesheet' id='pagebar-stylesheet-css'  href='http://miftyisbored.com/wp-content/themes/MiB_V2/pagebar.css?ver=4.5.2' type='text/css' media='all' />
<script type="text/javascript" async defer data-pin-color="red"  data-pin-hover="true" src="http://miftyisbored.com/wp-content/plugins/pinterest-pin-it-button-on-image-hover-and-post/js/pinit.js"></script><style type="text/css" id="syntaxhighlighteranchor"></style>
      <!-- HEAD END -->
      <link rel='stylesheet' id='font-awesome-css'  href='http://miftyisbored.com/wp-content/themes/MiB_V2/framework/font-awesome/css/font-awesome.min.css?ver=4.3' type='text/css' media='all' />
      <link rel='stylesheet' id='style-css'  href='http://miftyisbored.com/wp-content/themes/MiB_V2/style.css' type='text/css' media='all' />
      <link rel='stylesheet' id='wi-responsive-css'  href='http://miftyisbored.com/wp-content/themes/MiB_V2/css/responsive.css' type='text/css' media='all' />
      <link rel='stylesheet' id='general-style-css'  href='http://miftyisbored.com/wp-content/themes/MiB_V2/css/styles.css?ver=4.4.1' type='text/css' media='all' />
      <link href='http://fonts.googleapis.com/css?family=Merriweather:100,200,300,400,500,600,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Oswald:100,200,300,400,500,600,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	  
	  <link rel="shortcut icon" href="http://miftyisbored.com/wp-content/themes/MiB_V2/images/favicon.ico">
	  
	<!-- analytics start -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-2984893-53', 'miftyisbored.com');
	  ga('send', 'pageview');

	</script>
	<!-- end analytics -->
	  
<!-- Begin Inspectlet Embed Code -->
<script type="text/javascript" id="inspectletjs">
	window.__insp = window.__insp || [];
	__insp.push(['wid', 1230979372]);
	(function() {
		function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); }
		if (window.attachEvent){
			window.attachEvent('onload', __ldinsp);
		}else{
			window.addEventListener('load', __ldinsp, false);
		}
	})();
</script>
<!-- End Inspectlet Embed Code -->

<!-- page-level ads start -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9232413282463697",
    enable_page_level_ads: true
  });
</script>
<!-- end page-level ads  -->


   </head>
      <body class="home blog has-sidebar sidebar-left disable-hand-lines submenu-dark HomePage">
   	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=265095253617651";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
      <div id="wi-all">
         <div id="wi-wrapper">
            <header id="wi-header" class="wi-header">
               <div class="container">
                  <div class="header-search" id="header-search">
                     <form role="search" method="get" action="http://miftyisbored.com">
                        <input type="text" name="s" class="s" value="" placeholder="Type & hit enter..." />
                        <button class="submit" role="button" title="Go"><span>Go</span></button>
                     </form>
                  </div>
                  <!-- .header-search -->
                  <div id="logo-area">
                     <div id="wi-logo">
                        <h2>
                           <a href="http://miftyisbored.com" rel="home" class="brand">
                           <img src="http://miftyisbored.com/wp-content/themes/MiB_V2/images/logo.png" alt="Logo" data-retina="http://miftyisbored.com/wp-content/themes/MiB_V2/images/logo@2x.png" />
                           </a>
                        
						
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- MiB responsive header -->
						<ins class="adsbygoogle MiB_responsive_header"
							 style="display:block"
							 data-ad-client="ca-pub-9232413282463697"
							 data-ad-slot="4824132848"
							 ></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
						</h2>
                     </div>
                     <!-- #wi-logo -->
                  </div>
                  <!-- #logo-area -->
                  <div class="clearfix"></div>
               </div>
               <!-- .container -->
            </header>
            <!-- #wi-header -->
            <div id="topbar-wrapper">
               <div class="wi-topbar" id="wi-topbar">
                  <div class="container">
                     <div class="topbar-inner">
                        <a class="toggle-menu" id="toggle-menu"><i class="fa fa-align-justify"></i> <span>Menu</span></a>
                        <nav id="wi-mainnav" class="navigation-ele wi-mainnav" role="navigation">
                           <div class="menu">
                              <ul id="menu-primary-menu" class="menu">
                                 <li id="menu-item-79" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children">
                                    <a href="http://miftyisbored.com/category/news-rants/"><span>NEWS</span></a>
                                    <ul class="sub-menu">
                                       <li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/news-rants/"><span>News & Rants</span></a></li>
									   <li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/all-thats-awesome/"><span>All Things Awesome</span></a></li>
									   <li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/entertainment/"><span>Entertainment</span></a></li>
										<li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/entertainment/comic-books/"><span>Comic Books</span></a></li>
									   <li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/entertainment/movies/"><span>Movies</span></a></li>
									   <li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/entertainment/television/"><span>Television</span></a></li>
									   <li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/entertainment/video-games/"><span>Video Games</span></a></li>
									   <li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/entertainment/sports/"><span>Sports</span></a></li>
									   <li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/entertainment/music/"><span>Music</span></a></li>
									   <li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/entertainment/action-figures/"><span>Action Figures</span></a></li>
									   <li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://miftyisbored.com/category/inspirations/"><span>Inspirations</span></a></li>
                                       <li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://miftyisbored.com/category/free-stuff/"><span>Free Stuff</span></a></li>
                                    </ul>
                                 </li>
                                 <li id="menu-item-92" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="http://miftyisbored.com/category/artworks/"><span>Artworks</span></a>
                                    <ul class="sub-menu">
                                       <li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://miftyisbored.com/category/artworks/completed-works/"><span>Completed Artworks</span></a></li>
                                       <li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://miftyisbored.com/category/artworks/sketches/"><span>Sketches</span></a></li>
									   <li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://miftyisbored.com/category/artworks/miftees/"><span>Miftees!</span></a></li>
                                    </ul>
                                 </li>
                                 <li id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="#"><span>Technology</span></a>
                                    <ul class="sub-menu">
                                       <li id="menu-item-214" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                          <a href="http://miftyisbored.com/category/software-development/"><span>Software Development</span></a>
                                          <ul class="sub-menu">
                                             <li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/software-development/java/"><span>JAVA</span></a></li>
											 <li id="menu-item-217" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/web-development/php/"><span>PHP</span></a></li>
											 <li id="menu-item-217" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/android-arena/"><span>ANDROID</span></a></li>
											 
                                          </ul>
                                       </li>
									   <li id="menu-item-214" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                          <a href="http://miftyisbored.com/category/web-development/"><span>Web Development</span></a>
                                          <ul class="sub-menu">
                                             <li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/web-development/ajax/"><span>AJAX</span></a></li>
                                             <li id="menu-item-217" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/web-development/html-css/"><span>HTML/CSS</span></a></li>
											 <li id="menu-item-217" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/web-development/jquery-javascript/"><span>Javascript/JQuery</span></a></li>
											 <li id="menu-item-217" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/web-development/php/"><span>PHP</span></a></li>
                                          </ul>
                                       </li>
                                       <li id="menu-item-101" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/web-development/cakephp/"><span>CakePHP</span></a></li>
									   <li id="menu-item-214" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                          <a href="http://miftyisbored.com/category/google/"><span>Google</span></a>
                                          <ul class="sub-menu">
                                             <li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/google/google-maps/"><span>Google Maps</span></a></li>                                            
                                          </ul>
                                       </li>
									   <li id="menu-item-101" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/web-development/laravel/"><span>Laravel</span></a></li>
									   <li id="menu-item-101" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/web-development/wordpress/"><span>WordPress</span></a></li>
                                    </ul>
                                 </li>
								 <li id="menu-item-93" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                    <a href="http://miftyisbored.com/category/tutorials-samples/"><i class="fa fa-pencil"></i><span>Tutorials</span></a></a>
                                 </li>
                                 <li id="menu-item-92" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="http://miftyisbored.com/about/"><span>About</span></a>
                                    <ul class="sub-menu">
                                       <li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://miftyisbored.com/about/"><span>About me</span></a></li>
                                       <li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://miftyisbored.com/contact-me/"><span>Contact me</span></a></li>
									   <li id="menu-item-214" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                          <a href="http://miftyisbored.com/category/my-creations/"><span>My Creations</span></a>
                                          <ul class="sub-menu">
                                             <li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/my-creations/my-softwares/"><span>Softwares</span></a></li>
											 <li id="menu-item-217" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/my-creations/my-websites/"><span>Websites</span></a></li>
											 <li id="menu-item-217" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/my-creations/my-illustrations/"><span>Illustrations</span></a></li>
											 <li id="menu-item-217" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/my-creations/my-apps/"><span>Apps</span></a></li>
											 <li id="menu-item-218" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/my-creations/my-social-pages/"><span>Social Pages</span></a></li>
                                             <li id="menu-item-216" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://miftyisbored.com/category/my-creations/my-webcomics/"><span>Webcomics</span></a></li>                                             
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                        <!-- #wi-mainnav -->
                        <div id="header-social" class="social-list">
                           <ul>
                              <li class="li-facebook-square"><a href="https://www.facebook.com/withemes" target="_blank" rel="alternate" title="Facebook"><i class="fa fa-facebook-square"></i> <span>Facebook</span></a></li>
                              <li class="li-rss"><a href="#" target="_blank" rel="alternate" title="Feed"><i class="fa fa-rss"></i> <span>Feed</span></a></li>
                              <li class="li-search"><a><i class="fa fa-search"></i> <span>Search</span></a></li>
                           </ul>
                        </div>
                        <!-- #header-social -->
                     </div>
                     <!-- .topbar-inner -->
                  </div>
                  <!-- .container -->
               </div>
               <!-- #wi-topbar -->
            </div>
            <!-- #topbar-wrapper -->
            <div id="wi-main">
               <div class="container">


<div class="container">
    
    <div class="content">
        
        
    
        <main id="primary" class="content-area" role="main">
            
            
			<div class="no-thumbnail-line"></div>

			            
            <header class="post-header">
            
                <h1 class="post-title single-title">A Complete Social Login Application Tutorial for CakePHP 2.3 (Twitter, Facebook and Google)</h1>

                <div class="post-header-meta">


                    <span class="meta-time">
                        <time datetime="2014-08-01T20:13:25+00:00">Published on August 1, 2014</time>
                    </span><!-- .meta-date -->

                    <span class="meta-category">
                        in <a href="http://miftyisbored.com/category/web-development/cakephp/" rel="category tag">CakePHP</a><span class="sep">/</span><a href="http://miftyisbored.com/category/web-development/php/" rel="category tag">PHP</a><span class="sep">/</span><a href="http://miftyisbored.com/category/tutorials-samples/" rel="category tag">Tutorials &amp; Samples</a><span class="sep">/</span><a href="http://miftyisbored.com/category/web-development/" rel="category tag">Web Development</a>                    </span><!-- .meta-category -->


                </div><!-- .post-header-meta -->

            </header><!-- .post-header -->
            
            <div class="single-body">

                <div class="entry-content">
					<div class="MiB_google_ad_left">
						<script type="text/javascript">
							google_ad_client = "ca-pub-9232413282463697";
							google_ad_slot = "4977080048";
							google_ad_width = 300;
							google_ad_height = 250;
						</script>
						<!-- MiB interior 300x250 -->
						<script type="text/javascript"
						src="//pagead2.googlesyndication.com/pagead/show_ads.js">
						</script>
					</div>
					                    <p>After writing the tutorial on how to create <a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/">a complete login system using CakePHP</a>, I have received a lot of requests for creating a tutorial on a social login system using CakePHP. Well, I&#8217;ve been real busy these days but I finally sat down to write the turorial&hellip; You can <a href="http://miftyisbored.com/wp-tutorials/cakephp-2_3-social-auth.zip">download it here</a> and check out a <a href="http://miftyisbored.com/wp-tutorials/cakephp-2_3-social-auth/">live demo</a> <a href="http://miftyisbored.com/wp-tutorials/cakephp-2_3-social-auth/">here</a>. According to Wikipedia:</p>
<blockquote><p>Social login, also known as social sign-in, is a form of single sign-on using existing login information from a social networking service such as Facebook, Twitter or Google+ to sign into a third party website in lieu of creating a new login account specifically for that website. It is designed to simplify logins for end users as well as provide more and more reliable demographic information to web developers</p></blockquote>
<p>The following tutorial will show you how to integrate social login with CakePHP. This tutorial is an extension of the original <a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/">complete login system using CakePHP</a>. So, if you have not read this tutorial, please read it <a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/">here</a>. Below is a screenshot of what we are going to be creating and there is a <a href="http://miftyisbored.com/wp-tutorials/cakephp-2_3-social-auth/">live demo here</a>.</p>
<p><a href="http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot.jpg"><img src="http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot.jpg" alt="cakephp-2_3-social-login-screenshot" width="900" height="381" class="alignnone size-full wp-image-1158" srcset="http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot.jpg 900w, http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot-300x127.jpg 300w, http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot-360x152.jpg 360w, http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot-460x194.jpg 460w" sizes="(max-width: 900px) 100vw, 900px" /></a></p>
<h2>Combining CakePHP&#8217;s Auth Component and Social Login</h2>
<p>For anybody who has ever played with CakePHP&#8217;s Auth component, you probably already know the golden rule: <strong>CakePHP&#8217;s Auth component does not play nice with other authorization mechanisms</strong>. That is why most people who setup social login with CakePHP bypass the Auth component (which I personally think should never be done&hellip;) So, for this tutorial, we are going to build a system that allows members to either login using their social profile or by using the Auth component to create a username and password combination. In order to handle the social login aspect, I will be using the very popular <a href="http://hybridauth.sourceforge.net/download.html">HybridAuth PHP library</a>. The actual protocol used for social login varies from provider to provider and the actual code for creating the login process is outside the scope of this tutorial. However, I will cover the top three social networks for social login: Facebook, Twitter and Google+. Before we start covering the actual steps of the tutorial, it is important to get your Social login credentials from the 3 providers mentioned above. Getting your social login API credentials for each of these social networks is explained below.</p>
<h2>Social Authenticaion for Facebook</h2>
<p>In order to be able to do social logins with Facebook, you need to obtain a key and a secret from Facebook. The following are the steps for getting your key and secret for Facebook</p>
<ol class="bullets-grey">
<li>Browse to&nbsp;<a href="https://developers.facebook.com/apps">https://developers.facebook.com/apps</a>.</li>
<li>Create an app, if you have not done so already. Set the &quot;App Domain&quot; as the domain name of your CakePHP site.</li>
<li>Click on &quot;Website with Facebook Login&quot;. set the site URL as the URL of your CakePHP site.</li>
<li>Save this information somewhere for later use.</li>
</ol>
<h2>Social Authenticaion for Twitter</h2>
<p>In order to be able to do social logins with Twitter, you need to obtain a key and a secret from Twitter. The following are the steps for getting your key and secret for Twitter</p>
<ol class="bullets-grey">
<li>Browse to&nbsp;<a href="https://dev.twitter.com/apps">https://dev.twitter.com/apps</a></li>
<li>Create an application if you have not got one already. The most important thing for the application is the Callback URL which we will explain later when we begin the implementation.</li>
<li>Save this information somewhere for later use.</li>
</ol>
<h2>Social Authenticaion for Google+</h2>
<p>In order to be able to do social logins with Google+, you need to obtain a key and a secret from Google. The following are the steps for getting your key and secret for Google+:</p>
<ol class="bullets-grey">
<li>Browse to&nbsp;<a href="https://code.google.com/apis/console">https://code.google.com/apis/console</a>.</li>
<li>Create a project, if you have not already.</li>
<li>Click on API Access</li>
<li>Create a client ID. You need to set the Redirect URI to <a href="http://example.com/auth_callback/google">http://example.com/auth_callback/google</a>&nbsp;(replace example.com with your domain name. You can&#39;t use an invalid TLD, such as example.dev, for testing &#8211; Google does not allow this. you&#39;ll need to use dev.example.com instead, as well as your example.com live domain.)</li>
<li>Save this information somewhere for later use.</li>
</ol>
<h2>The Setup</h2>
<p>As mentioned earlier, we will be starting with the original CakePHP login app that was created in a previous tutorial. (You can <a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/">download it here</a>). Then we will be adding social login to this app. By adding a social login to our current login application, we want to provide users the ability to login to our CakePHP app via Facebook, Twitter, and/or Google. So the first thing we need to do is download the workhorse that will be taking care of the login: <a href="http://hybridauth.sourceforge.net/download.html">HybridAuth</a>. HybridaAuth can be downloaded at <a href="http://hybridauth.sourceforge.net/download.html">http://hybridauth.sourceforge.net/download.html</a> It is a very well-written and easy to use social login library written in PHP. Download the latest version of HybridAuth, unzip it and place the content in the app/Vendor directory. With that done, we are ready to modify our application to support social login.</p>
<h2>Updating the Configuration Files</h2>
<p>Now that we have obtained the key and the secret for the various social networks, we need to modify the core.php file to include information about the various social media providers. Although this tutorial is limited to Google+, Twitter and Facebook, HybridAuth allows you to use other networks such as LinkedIn, MySpace and Yahoo.</p>
<h3>Core.php</h3>
<p>So the following lines need to be added into core.php:</p>
<pre class="brush: php; title: ; notranslate" title="">
/** 
 * HybridAuth component
 *
 */
 Configure::write('Hybridauth', array(
    // openid providers
    &quot;Google&quot; =&gt; array(
        &quot;enabled&quot; =&gt; true,
        &quot;keys&quot; =&gt; array(&quot;id&quot; =&gt; &quot;Your-Google-Key&quot;,&quot;secret&quot; =&gt; &quot;Your-Google-Secret&quot;),
    ),
	&quot;Twitter&quot; =&gt; array(
        &quot;enabled&quot; =&gt; true,
        &quot;keys&quot; =&gt; array(&quot;key&quot; =&gt; &quot;Your-Twitter-Key&quot;, &quot;secret&quot; =&gt; &quot;Your-Twitter-Secret&quot;)
    ),
	&quot;Facebook&quot; =&gt; array(
        &quot;enabled&quot; =&gt; true,
        &quot;keys&quot; =&gt; array(&quot;id&quot; =&gt; &quot;Your-Facebook-Key&quot;, &quot;secret&quot; =&gt; &quot;Your-Facebook-Secret&quot;),
    ),
	&quot;OpenID&quot; =&gt; array(
        &quot;enabled&quot; =&gt; false
    ),
    &quot;Yahoo&quot; =&gt; array(
        &quot;enabled&quot; =&gt; false,
        &quot;keys&quot; =&gt; array(&quot;id&quot; =&gt; &quot;&quot;, &quot;secret&quot; =&gt; &quot;&quot;),
    ),
    &quot;AOL&quot; =&gt; array(
        &quot;enabled&quot; =&gt; false
    ),
    &quot;Live&quot; =&gt; array(
        &quot;enabled&quot; =&gt; false,
        &quot;keys&quot; =&gt; array(&quot;id&quot; =&gt; &quot;&quot;, &quot;secret&quot; =&gt; &quot;&quot;)
    ),
    &quot;MySpace&quot; =&gt; array(
        &quot;enabled&quot; =&gt; false,
        &quot;keys&quot; =&gt; array(&quot;key&quot; =&gt; &quot;&quot;, &quot;secret&quot; =&gt; &quot;&quot;)
    ),
    &quot;LinkedIn&quot; =&gt; array(
        &quot;enabled&quot; =&gt; false,
        &quot;keys&quot; =&gt; array(&quot;key&quot; =&gt; &quot;&quot;, &quot;secret&quot; =&gt; &quot;&quot;)
    ),
    &quot;Foursquare&quot; =&gt; array(
        &quot;enabled&quot; =&gt; false,
        &quot;keys&quot; =&gt; array(&quot;id&quot; =&gt; &quot;&quot;, &quot;secret&quot; =&gt; &quot;&quot;)
    ),
));
</pre>
<p>Note that you should replace the <em>Your-Provider-Key</em> and by <em>Your-Provider-Secret</em> with the actual values that you got from the various providers.</p>
<h3>Routes.php</h3>
<p>Routes.php must also be updated so that we create routes for the social login controllers. In the case of social login, two new routes are needed: social_login and social_endpoint whose functions will be discussed later. &nbsp;Below are the 2 line changes needed in routes.php:</p>
<pre class="brush: php; title: ; notranslate" title="">
	Router::connect('/social_login/*', array( 'controller' =&gt; 'users', 'action' =&gt; 'social_login'));
	Router::connect('/social_endpoint/*', array( 'controller' =&gt; 'users', 'action' =&gt; 'social_endpoint'));
</pre>
<h2>Updating the Models</h2>
<p>At the model level, we will create a new model called SocialProfile. The SocialProfile object will be used to store social profile information. And as you can imagine, a social profile must belong to a user so the file SocialProfile.php will look like so:</p>
<pre class="brush: php; title: ; notranslate" title="">
App::uses('AuthComponent', 'Controller/Component');

class SocialProfile extends AppModel {
	
	public $belongsTo = 'User';

}
</pre>
<p>Now that we have a model called socialProfile, we need to associate it to the user model. To do so, we modify the Users model to indicate that it can have multiple social profiles. Here is the code that needs to be added:</p>
<pre class="brush: php; title: ; notranslate" title="">
	public $hasMany = array(
        'SocialProfile' =&gt; array(
            'className' =&gt; 'SocialProfile',
        )
    );
</pre>
<p>For now, the models are ready and we can begin to modify our controllers.</p>
<h2>Creating A Component for HybridAuth</h2>
<p>Instead of simply calling the HybridAuth library that we downloaded earlier, I have created a CakePHP Component called HybridAuthComponent. (I know the name is real original&hellip;). For those who have never played with components in CakePHP before, here is the <a href="http://book.cakephp.org/2.0/en/controllers/components.html">definition of a component from the book</a>: </p>
<blockquote><p>Components are packages of logic that are shared between controllers</p></blockquote>
<p>. This is exactly what we want: a reusable component that can be used from any controller. The component must be placed in the folder Controller/Component folder.</p>
<h2>Analysis of the HybridAuth Component</h2>
<p>The HybridAuth component will be the only component that interacts directly with the HybridAuth library. It loads HybridAuth from the Vendors folder and takes care of all the HybridAuth interactions. The functions of the component are all explained below:</p>
<h3>Init()</h3>
<p>This function is responsible for initializing the HybridAuth library. It also loads the key and secret settings that are defined in core.php for the various social providers. The other important thing that it does is define the endpoint. The endpoint is the link that the social networks redirect to after they have verified your key and secret. In this tutorial I set it to social_endpoint which is actually a rout for users/social_endpoint as we had previously defined in routes.php</p>
<h3>processEndpoint()</h3>
<p>In the world of social login, the endpoint is the proxy that connects your web application to the social network that you want to authenticate with. It is where the login tokens are exchanged between your application and the social network. The function processEndpoint is wrapper function for handling HybridAuth&#8217;s <em>endpoint()</em> function. All communication between the social network and your application happen through this function.</p>
<h3>getSessionData() and restoreSessionData()</h3>
<p>These 2 functions are one again wrapper functions for HybridAuth, this time for dealing with Session variables. HybridAuth usese Session values for authenticating.</p>
<h3>Connect()</h3>
<p>This function starts the process of connecting to a social network to start the social login process. Once again it is a wrapper function for HybridAuth. It takes one parameter known as $provider which a string that corresponds to the social network that you wish to connect to. For example &ldquo;Google&rdquo;, &ldquo;Facebook&rdquo; or &ldquo;Twitter&rdquo;. It also handles the various exceptions that could happen during the connection process.</p>
<h3>normalizeSocialProfile()</h3>
<p>This function&#8217;s primary role is to normalize the data coming from the various social networks. Keep in mind that not every social network sends the same information. For example, Twitter does not send first names, last names and email addresses. So this function handles these issues and finds a way to normalize the data. The most important thing to remember is that, if you add a new social network, chances are high that you may have to modify this function to fix any issues with the new social media that you add. </p>
<p>Below is the full code for the HybridAuth component</p>
<pre class="brush: php; title: ; notranslate" title="">
&lt;?php

/**
 * CakePHP HybridauthComponent
 * @author mike
 */
class HybridauthComponent extends Component {

    public $hybridauth = null;
    public $adapter = null;
    public $user_profile = null;
    public $error = &quot;no error so far&quot;;
    public $provider = null;
    public $debug_mode = false;
    public $debug_file = &quot;&quot;;

    protected function init(){
        App::import('Vendor', 'hybridauth/Hybrid/Auth');
        $config = array(
            &quot;base_url&quot; =&gt; Router::url(&quot;/social_endpoint&quot;, true),
            &quot;providers&quot; =&gt; Configure::read('Hybridauth'),
            &quot;debug_mode&quot; =&gt; $this-&gt;debug_mode,
            &quot;debug_file&quot; =&gt; $this-&gt;debug_file,
        );
        $this-&gt;hybridauth = new Hybrid_Auth( $config );
    }
	
	/**
     * process the 
     * 
     * @return string
     */
    public function processEndpoint(){
        App::import('Vendor', 'hybridauth/Hybrid/Endpoint');
		
		if( !$this-&gt;hybridauth ) $this-&gt;init ();
        Hybrid_Endpoint::process();
    }
    
    /**
     * get serialized array of acctual Hybridauth from provider...
     * 
     * @return string
     */
    public function getSessionData(){
        if( !$this-&gt;hybridauth ) $this-&gt;init ();
        return $this-&gt;hybridauth-&gt;getSessionData();
    }
    
    /**
     * 
     * @param string $hybridauth_session_data pass a serialized array stored previously
     */
    public function restoreSessionData( $hybridauth_session_data ){
        if( !$this-&gt;hybridauth ) $this-&gt;init ();
        $hybridauth-&gt;restoreSessionData( $hybridauth_session_data );
    }
    
    /**
     * logs you out
     */
    public function logout(){
        if( !$this-&gt;hybridauth ) $this-&gt;init ();
        $providers = $this-&gt;hybridauth-&gt;getConnectedProviders();
        
        if( !empty( $providers ) ){
            foreach( $providers as $provider ){
                $adapter = $this-&gt;hybridauth-&gt;getAdapter($provider);
                $adapter-&gt;logout();
            }
        }
    }
    
    /**
     * connects to a provider
     * 
     * 
     * @param string $provider pass Google, Facebook etc...
     * @return boolean wether you have been logged in or not
     */
    public function connect($provider) {
        
        if( !$this-&gt;hybridauth ) $this-&gt;init ();
        
        $this-&gt;provider = $provider;

        try {
            
            // try to authenticate the selected $provider
            $this-&gt;adapter = $this-&gt;hybridauth-&gt;authenticate($this-&gt;provider);
            
            // grab the user profile
            $this-&gt;user_profile = $this-&gt;normalizeSocialProfile($provider);
            
            return true;
            
        } catch (Exception $e) {
            // Display the recived error
            switch ($e-&gt;getCode()) {
                case 0 : $this-&gt;error = &quot;Unspecified error.&quot;;
                    break;
                case 1 : $this-&gt;error = &quot;Hybriauth configuration error.&quot;;
                    break;
                case 2 : $this-&gt;error = &quot;Provider [&quot;.$provider.&quot;] not properly configured.&quot;;
                    break;
                case 3 : $this-&gt;error =  &quot;[&quot; .$provider. &quot;] is an unknown or disabled provider.&quot;;
                    break;
                case 4 : $this-&gt;error = &quot;Missing provider application credentials for Provider [&quot;.$provider.&quot;].&quot;;
                    break;
                case 5 : $this-&gt;error = &quot;Authentification failed. The user has canceled the authentication or the provider [&quot; .$provider. &quot;] refused the connection.&quot;;
                    break;
                case 6 : $this-&gt;error = &quot;User profile request failed. Most likely the user is not connected to the provider [&quot; .$provider. &quot;] and he/she should try to authenticate again.&quot;;
                    $this-&gt;adapter-&gt;logout();
                    break;
                case 7 : $this-&gt;error = &quot;User not connected to the provider [&quot; .$provider. &quot;].&quot;;
                    $this-&gt;adapter-&gt;logout();
                    break;
            }

            // well, basically your should not display this to the end user, just give him a hint and move on..
            if( $this-&gt;debug_mode ){
                $this-&gt;error .= &quot;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Original error message:&lt;/b&gt; &quot; . $e-&gt;getMessage();
                $this-&gt;error .= &quot;&lt;hr /&gt;&lt;pre&gt;Trace:&lt;br /&gt;&quot; . $e-&gt;getTraceAsString() . &quot;&lt;/pre&gt;&quot;; 
            }
            

            return false;
        }
    }
	
	/**
     * creates a social profile array based on the hybridauth profile object
     * 
     * 
     * @param string $provider the provider given from hybridauth
     * @return boolean wether you have been logged in or not
     */
	protected function normalizeSocialProfile($provider){
		// convert our object to an array
		$incomingProfile = (Array)$this-&gt;adapter-&gt;getUserProfile();
		
		// populate our social profile
		$socialProfile['SocialProfile']['social_network_name'] = $provider;
		$socialProfile['SocialProfile']['social_network_id'] = $incomingProfile['identifier'];
		$socialProfile['SocialProfile']['email'] = $incomingProfile['email'];
		$socialProfile['SocialProfile']['display_name'] = $incomingProfile['displayName'];
		$socialProfile['SocialProfile']['first_name'] = $incomingProfile['firstName'];
		$socialProfile['SocialProfile']['last_name'] = $incomingProfile['lastName'];
		$socialProfile['SocialProfile']['link'] = $incomingProfile['profileURL'];
		$socialProfile['SocialProfile']['picture'] = $incomingProfile['photoURL'];
		$socialProfile['SocialProfile']['created'] = date('Y-m-d h:i:s');
		$socialProfile['SocialProfile']['modified'] = date('Y-m-d h:i:s');
			
		// twitter does not provide email so we need to build someting
		if($provider == 'Twitter'){
			$names = explode(' ', $socialProfile['SocialProfile']['first_name']);
			$socialProfile['SocialProfile']['first_name'] = $names[0];
			$socialProfile['SocialProfile']['last_name'] = (count($names)&gt;1 ? end($names) : '');
			$socialProfile['SocialProfile']['display_name'] = $socialProfile['SocialProfile']['first_name'] .'_'. $socialProfile['SocialProfile']['last_name'];
			$socialProfile['SocialProfile']['email'] = $socialProfile['SocialProfile']['display_name'] .'@Twitter.com';
		}
		
		return $socialProfile;
    }

}
</pre>
<h2>Updating the Controllers</h2>
<p>With the component ready, we can update the controllers. Before modifying the controllers, we need to modify the base file AppController by adding one line of code that is necessary for HybridAuth to work:</p>
<pre class="brush: php; title: ; notranslate" title="">
session_start();
</pre>
<p>This is required since HybridAuth requires this function to operate properly but CakePHP by default does not use it. With this done, we can modify the actual controllers. The only controller that we need to modify is the users controller. The first thing to do is create a dependency on the SocialProfile model. So we need to add the following line to indicate which models this controller uses:</p>
<pre class="brush: php; title: ; notranslate" title="">
	var $uses = array('User','SocialProfile');
</pre>
<p>Then we need to indicate that we will be using our newly created HybridAuthComponent. This is done with the following line of code:</p>
<pre class="brush: php; title: ; notranslate" title="">
	public $components = array('Hybridauth');
</pre>
<p>Finally, we need to modify the beforeFiler() function to tell the Auth component to allow 2 new functions to be available even if the user is not logged-in. There 2 functions are social_login and social_endpoint, which are covered later. Remember that these 2 functions are the same 2 functions that we created new routes for inside routes.php For now, here is how beforeFilter() now looks like:</p>
<pre class="brush: php; title: ; notranslate" title="">
    public function beforeFilter() {
        parent::beforeFilter();
        $this-&gt;Auth-&gt;allow('login','add','social_login','social_endpoint'); 
    }
</pre>
<p>Now we are ready to do the actual social login. Let&#8217;s start with the function social_login(). This function is used as the alternate way that users can login to the application. So the function login(), which already existed is left intact for users that want to use the usernema/password combination. And social_login() is created to handle all social logins. Below is the code for social_login()</p>
<pre class="brush: php; title: ; notranslate" title="">
	public function social_login($provider) {
		if( $this-&gt;Hybridauth-&gt;connect($provider) ){
			$this-&gt;_successfulHybridauth($provider,$this-&gt;Hybridauth-&gt;user_profile);
        }else{
            // error
			$this-&gt;Session-&gt;setFlash($this-&gt;Hybridauth-&gt;error);
			$this-&gt;redirect($this-&gt;Auth-&gt;loginAction);
        }
	}
</pre>
<p>This function is very simple: all it does is call HybridAuthCompoent with the $provider parameter. The $provider parameter is whichever provider that you wish to use for doing the actual social login. In this tutorial, it is limited to Facebook, Twitter or Google+, however it can be expanded to cover LinkedIn and other social networks. The function tells HybridAuth to try to connect using the provider that we specified. The credentials for that provider should have been placed inside your core.php configuration file under the HybridAuth section. If it is successful, we are redirected to the private function _successfulHybridauth(), if we fail, we are redirected to the login page with an error message.</p>
<p>If HybridaAuth is able to properly complete the social login, it will redirect to the function _successfulHybridauth(), which completes the actual login process and also informs the Auth component to let the user in. <strong>Remember that HybridAuth handles the authentication on the social network side and that CakePHP&#8217;s Auth component handles authentication on your application&#8217;s side</strong>. Here is what the function does:</p>
<ul class="bullets-grey">
<li>It checks to see if the user has already authenticated into our application using the provided social network.</li>
<li>If a user has previously logged-in, then the user would have an entry inside the social profile table. So in this case, the social profile is already linked to a user and we simply have to retrieve the user and call the private function _doSocialLogin with the provided user.</li>
<li>If a user has never logged-in, we need to create a social profile for the user. But before doing so, we have to check to ensure that they are not currently logged-in using the traditional username and password combination.
<ul >
<li>If they are already logged-in, we create their social profile and let them know that their social profile is now linked to their account.</li>
<li>If they are not logged-in, then the user is logging into our system for the first time using their social profile. In this case, we need to create the user as well as their social profile. This is done in the user model with a function called: createFromSocialProfile. This function will be explained later but for the moment, you need to know that it will return a user object that can then be passed to the private function _ doSocialLogin.</li>
</ul>
</li>
</ul>
<p>Below is the full source code for _succesfulHybridauth:</p>
<pre class="brush: php; title: ; notranslate" title="">
	private function _successfulHybridauth($provider, $incomingProfile){

		// #1 - check if user already authenticated using this provider before
		$this-&gt;SocialProfile-&gt;recursive = -1;
		$existingProfile = $this-&gt;SocialProfile-&gt;find('first', array(
			'conditions' =&gt; array('social_network_id' =&gt; $incomingProfile['SocialProfile']['social_network_id'], 'social_network_name' =&gt; $provider)
		));
		
		if ($existingProfile) {
			// #2 - if an existing profile is available, then we set the user as connected and log them in
			$user = $this-&gt;User-&gt;find('first', array(
				'conditions' =&gt; array('id' =&gt; $existingProfile['SocialProfile']['user_id'])
			));
			
			$this-&gt;_doSocialLogin($user,true);
		} else {
			
			// New profile.
			if ($this-&gt;Auth-&gt;loggedIn()) {
				// user is already logged-in , attach profile to logged in user.
				// create social profile linked to current user
				$incomingProfile['SocialProfile']['user_id'] = $this-&gt;Auth-&gt;user('id');
				$this-&gt;SocialProfile-&gt;save($incomingProfile);
				
				$this-&gt;Session-&gt;setFlash('Your ' . $incomingProfile['SocialProfile']['social_network_name'] . ' account is now linked to your account.');
				$this-&gt;redirect($this-&gt;Auth-&gt;redirectUrl());

			} else {
				// no-one logged and no profile, must be a registration.
				$user = $this-&gt;User-&gt;createFromSocialProfile($incomingProfile);
				$incomingProfile['SocialProfile']['user_id'] = $user['User']['id'];
				$this-&gt;SocialProfile-&gt;save($incomingProfile);

				// log in with the newly created user
				$this-&gt;_doSocialLogin($user);
			}
		}	
	}
</pre>
<p>We have talked a few times about the private function _doSocialLogin so let&#8217;s look closely at this function. This is the most important function in the whole process because it is the function that tells CakePHP&#8217;s Auth component that the user has been authenticated. It takes in a parameter called $user. This parameter is super important since this is the user object that we will tell the Auth component to validate against. If Auth can validate the user, it will let the user through and you have successfully logged-in a social user, otherwise, Auth will block the user from accessing the restricted parts of the app. How can this all work? Well, its very simple: <strong>CakePHP&#8217;s Auth component has an alternative login function that takes as parameter the user object</strong>. That is why we need to pass the $user object to this function because it authenticates the user based on the user object instead of the traditional username and password combination. Below is the full code for the _doSocialLogin() function:</p>
<pre class="brush: php; title: ; notranslate" title="">
	private function _doSocialLogin($user, $returning = false) {

		if ($this-&gt;Auth-&gt;login($user['User'])) {
			if($returning){
				$this-&gt;Session-&gt;setFlash(__('Welcome back, '. $this-&gt;Auth-&gt;user('username')));
			} else {
				$this-&gt;Session-&gt;setFlash(__('Welcome to our community, '. $this-&gt;Auth-&gt;user('username')));
			}
			$this-&gt;redirect($this-&gt;Auth-&gt;loginRedirect);
			
		} else {
			$this-&gt;Session-&gt;setFlash(__('Unknown Error could not verify the user: '. $this-&gt;Auth-&gt;user('username')));
		}
	}
</pre>
<p>You are probably wondering what the optional flag $returning is for. Well, it&#8217;s just a fancy flag that allows you to change your message depending if the user is a returning visitor or a first time visitor. Remember that, in the function succesfulHybridauth(), we determine if the user is logging in for the first time or if they have logged-in already. So, we can then call _doSocialLogin() with this flag to indicate if it&#8217;s a returning visitor.</p>
<h2>Updating the User Model to support First-Time social logins</h2>
<p>The final part that we need to cover is the function in the user model that is responsible for creating the user from a given social profile. This is the function that I rightfully named: createFromSocialProfile(). This function basically creates a brand new user from a given social profile. Since the way we determine that a user is unique in our application is through their email address, this function checks to see if the email address is already in use or if a brand new user with the provided email address is required. The most important thing that this function does is map the user fields to the fields provided by the incoming social profile so that we have all basic information that we need to create a proper user that CakePHP&#8217;s Auth component can accept. At the end of it all, this function returns a user that can then be passed over to the _doSocialLogin() function.</p>
<pre class="brush: php; title: ; notranslate" title="">
	public function createFromSocialProfile($incomingProfile){
	
		// check to ensure that we are not using an email that already exists
		$existingUser = $this-&gt;find('first', array(
			'conditions' =&gt; array('email' =&gt; $incomingProfile['SocialProfile']['email'])));
		
		if($existingUser){
			// this email address is already associated to a member
			return $existingUser;
		}
		
		// brand new user
		$socialUser['User']['email'] = $incomingProfile['SocialProfile']['email'];
		$socialUser['User']['username'] = str_replace(' ', '_',$incomingProfile['SocialProfile']['display_name']);
		$socialUser['User']['role'] = 'bishop'; // by default all social logins will have a role of bishop
		$socialUser['User']['password'] = date('Y-m-d h:i:s'); // although it technically means nothing, we still need a password for social. setting it to something random like the current time..
		$socialUser['User']['created'] = date('Y-m-d h:i:s');
		$socialUser['User']['modified'] = date('Y-m-d h:i:s');
		
		// save and store our ID
		$this-&gt;save($socialUser);
		$socialUser['User']['id'] = $this-&gt;id;
		
		return $socialUser;
		
	
	}
</pre>
<h2>Updating the Views</h2>
<p>There is very little to modify at the views level other than the login.ctp file. We simply have to add the links to the social platforms and call the social_login function from the Users controller. This includes the links for Facebook, Twitter and Google+. For the purposes of this tutorial, I decided to use fancy images instead of boring text links. Here is what the links code looks like:</p>
<pre class="brush: php; title: ; notranslate" title="">
&lt;?php
echo $this-&gt;Html-&gt;image(&quot;login-facebook.jpg&quot;, array(
    &quot;alt&quot; =&gt; &quot;Signin with Facebook&quot;,
    'url' =&gt; array('action'=&gt;'social_login', 'Facebook')
));

echo $this-&gt;Html-&gt;image(&quot;login-google.jpg&quot;, array(
    &quot;alt&quot; =&gt; &quot;Signin with Google&quot;,
    'url' =&gt; array('action'=&gt;'social_login', 'Google')
));

echo $this-&gt;Html-&gt;image(&quot;login-twitter.jpg&quot;, array(
    &quot;alt&quot; =&gt; &quot;Signin with Twitter&quot;,
    'url' =&gt; array('action'=&gt;'social_login', 'Twitter')
));
?&gt;
</pre>
<p>And here is what they produce:</p>
<p><a href="http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot.jpg"><img src="http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot.jpg" alt="cakephp-2_3-social-login-screenshot" width="900" height="381" class="alignnone size-full wp-image-1158" srcset="http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot.jpg 900w, http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot-300x127.jpg 300w, http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot-360x152.jpg 360w, http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot-460x194.jpg 460w" sizes="(max-width: 900px) 100vw, 900px" /></a></p>
<h2>Final Notes</h2>
<p>Although we have covered the social_login() function, the social_endpoint() function was never covered. That&#8217;s because it is simply a wrapper class for our HybridAuthComponent&#8217;s endpoint function. Remember that the endpoint is the one responsible for all interactions with the social network and that it is the URL that the social network will call when it needs information from our appliactoin. Below is the code for social_endpoint()</p>
<pre class="brush: php; title: ; notranslate" title="">
	public function social_endpoint($provider) {
		$this-&gt;Hybridauth-&gt;processEndpoint();
	}
</pre>
<p>The users controller&#8217;s logout function must also be modified so that it calls our HybridAuthComponent&#8217;s logout function as well. This function now looks like so:</p>
<pre class="brush: php; title: ; notranslate" title="">
	public function logout() {
		$this-&gt;Hybridauth-&gt;logout();
		$this-&gt;redirect($this-&gt;Auth-&gt;logout());
	}
</pre>
<h2>Download it all</h2>
<p>That&#8217;s all there is to being able to login to a CakePHP App using social login. &nbsp;You can <a href="http://miftyisbored.com/wp-tutorials/cakephp-2_3-social-auth.zip">download the entire tutorial</a> in zip format <a href="http://miftyisbored.com/wp-tutorials/cakephp-2_3-social-auth.zip">here</a>.</p>
<p><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="128"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a></p>                    <div class="clearfix"></div>

                </div><!-- .entry-content -->


                    <div class="post-share share-4 single-share">
                        <ul>
                            <li class="li-facebook"><a data-href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmiftyisbored.com%2Fcomplete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google%2F&p[images][0]=" title="Facebook" class="share"><span>Facebook</span></a></li>
                    <li class="li-twitter"><a data-href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fmiftyisbored.com%2Fcomplete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google%2F&amp;text=A+Complete+Social+Login+Application+Tutorial+for+CakePHP+2.3+%28Twitter%2C+Facebook+and+Google%29" title="Twitter" class="share"><span>Twitter</span></a></li>
                    <li class="li-google-plus"><a data-href="https://plus.google.com/share?url=http%3A%2F%2Fmiftyisbored.com%2Fcomplete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google%2F" title="Google+" class="share"><span>Google</span></a></li>
                    <li class="li-pinterest"><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" title="Google+"><span>Pinterest</span></a></li>
                        </ul>
                    </div><!-- .post-share -->
                    
            </div><!-- .single-body -->

            <div class="clearfix"></div>
            
                        <div class="single-tags">
                <span class="tag-label">Tags: </span>
                				
            </div><!-- .tags -->
            

            			<div class="related-posts" id="related-posts">
                        
				<h3 class="related-heading"><span>You may also like</span></h3>
				
				<div class="related-list blog-grid column-3 inview">
					<article id="post-864" class="post-related"><div class="related-inner"><figure class="grid-thumbnail thumbnail-type-secondary"><a href="http://miftyisbored.com/cakephp-accessing-auth-component-view/"><img width="360" height="210" src="http://miftyisbored.com/wp-content/uploads/2013/08/cakephp-login-system.png" class="attachment-480x384 size-480x384 wp-post-image" alt="cakephp-login-system" srcset="http://miftyisbored.com/wp-content/uploads/2013/08/cakephp-login-system.png 360w, http://miftyisbored.com/wp-content/uploads/2013/08/cakephp-login-system-300x175.png 300w" sizes="(max-width: 360px) 100vw, 360px" /></a></figure><section class="related-body"> <div class="post-content"> <header class="related-header"> <h3 class="related-title"><a href="http://miftyisbored.com/cakephp-accessing-auth-component-view/">CakePHP: Accessing the Auth Component from a view</a></h3> </header><div class="related-excerpt"> <p>In CakePHP, it is sometimes necessary to access the Auth component from a view or a helper. For instance, you may want to use the</p> </div><div class="clearfix"></div></div></section><div class="clearfix"></div> </div></article>

<article id="post-744" class="post-related"><div class="related-inner"><figure class="grid-thumbnail thumbnail-type-secondary"><a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/"><img width="360" height="210" src="http://miftyisbored.com/wp-content/uploads/2013/08/cakephp-login-system.png" class="attachment-480x384 size-480x384 wp-post-image" alt="cakephp-login-system" srcset="http://miftyisbored.com/wp-content/uploads/2013/08/cakephp-login-system.png 360w, http://miftyisbored.com/wp-content/uploads/2013/08/cakephp-login-system-300x175.png 300w" sizes="(max-width: 360px) 100vw, 360px" /></a></figure><section class="related-body"> <div class="post-content"> <header class="related-header"> <h3 class="related-title"><a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/">A Complete Login and Authentication Application Tutorial for CakePHP 2.3</a></h3> </header><div class="related-excerpt"> <p>Cake provides a very good tutorial on how to use the Auth component, but its not complete. So, I spent a couple hours setting up</p> </div><div class="clearfix"></div></div></section><div class="clearfix"></div> </div></article>

<article id="post-1479" class="post-related"><div class="related-inner"><figure class="grid-thumbnail thumbnail-type-secondary"><a href="http://miftyisbored.com/complete-tutorial-admin-routing-cakephp/"></a></figure><section class="related-body"> <div class="post-content"> <header class="related-header"> <h3 class="related-title"><a href="http://miftyisbored.com/complete-tutorial-admin-routing-cakephp/">A complete tutorial on Admin Routing for CakePHP</a></h3> </header><div class="related-excerpt"> <p>Although CakePHP’s cookbook does a pretty good job at explaining admin routing, I’ve still received requests for a tutorial on admin routing. So, for my</p> </div><div class="clearfix"></div></div></section><div class="clearfix"></div> </div></article>
<!-- Similar Posts took 171.259 ms -->					<div class="clearfix"></div>
					
				</div><!-- .related-list -->
			</div><!-- #related-posts -->
		
	

                <div class="authorbox" id="authorbox"><div class="authorbox-inner">
                    <div class="author-avatar">
                        <a href="http://miftyisbored.com/author/admin/" rel="author">
                            <img alt='' src='http://2.gravatar.com/avatar/e7421eb2ff62513efa9b8d818bdb3bb7?s=120&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/e7421eb2ff62513efa9b8d818bdb3bb7?s=240&amp;d=mm&amp;r=g 2x' class='avatar avatar-120 photo' height='120' width='120' />                        </a>
                    </div>
                    <div class="authorbox-content">

                        
                        <nav class="authorbox-nav">
                            <ul>
                                <li class="active"><a data-href="#authorbox-info">Mifty</a></li>
                                <li><a data-href="#same-author">Latest posts</a></li>
                            </ul>
                        </nav><!-- .authorbox-nav -->


                        
                        <div class="authorbox-info authorbox-tab active" id="authorbox-info">
                            
                            <div class="desc">
                                <p>Mifty Yusuf is a Montreal-based software developer who enjoys playing with new web technologies as well as comic books and illustrations.</p>
                            </div>
							<div class="author-social social-list">
                                <ul>	
									<li><a target="_blank" rel="alternate" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a target="_blank" rel="alternate" href="#"><i class="fa fa-facebook-square"></i></a></li>
									<li><a target="_blank" rel="alternate" href="#"><i class="fa fa-tumblr"></i></a></li>
									<li><a target="_blank" rel="alternate" href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a target="_blank" rel="alternate" href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a target="_blank" rel="alternate" href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
                                <div class="clearfix"></div>
                            </div>

                        </div><!-- .authorbox-info -->

                        
                        <div class="authorbox-tab" id="same-author">

                                                            <div class="same-author-posts">

                                    <ul class="same-author-list">
                                                                                <li>
                                            <a href="http://miftyisbored.com/caribbean-curry-house-sample-site/">Caribbean Curry House Sample Site</a>
                                        </li>
                                                                                <li>
                                            <a href="http://miftyisbored.com/016-art-iron-man/">016 &#8211; Art by Iron Man</a>
                                        </li>
                                                                                <li>
                                            <a href="http://miftyisbored.com/015-shhh-first-order-no-idea/">015 &#8211; Shhh&#8230; The First Order Has No Idea</a>
                                        </li>
                                                                                <li>
                                            <a href="http://miftyisbored.com/intersting-facts-from-star-wars-the-force-awakens-visual-dictionary/">Intersting facts from Star Wars: The Force Awakens Visual Dictionary</a>
                                        </li>
                                                                            </ul><!-- .related-list -->
                                    <div class="clearfix"></div>
                                    
                                    <a href="http://miftyisbored.com/author/admin/" rel="author" class="viewall">
                                        <span>View all</span>
                                    </a>
                                    
                                </div><!-- .same-author-posts -->	
                                
                        </div><!-- #same-author -->
                    </div><!-- .authorbox-content -->
                    </div><!-- .authorbox-inner -->
                </div><!-- #authorbox -->


            
            
<div id="comments" class="comments-area">

	
			<h2 class="comments-title"><span>
			114 Comments		</span></h2>

		<ol class="commentlist">
					<li id="comment-45456" class="comment even thread-even depth-1">
			<article id="div-comment-45456" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://1.gravatar.com/avatar/4a8442ebd0289bba3c590d17b475a2f9?s=60&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/4a8442ebd0289bba3c590d17b475a2f9?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn"><a href='http://laxman.grn.cc' rel='external ' class='url'>laxman</a></b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-45456">
							<time datetime="2015-10-28T01:24:00+00:00">
								October 28, 2015 at 1:24 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Hi,Can You Tell Me How do In CakePHP 3.1.2</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=45456#respond' onclick='return addComment.moveForm( "div-comment-45456", "45456", "respond", "1027" )' aria-label='Reply to laxman'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-45474" class="comment odd alt thread-odd thread-alt depth-1">
			<article id="div-comment-45474" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://2.gravatar.com/avatar/8d9b92209279ff11556f498a5db2300a?s=60&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/8d9b92209279ff11556f498a5db2300a?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Testing</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-45474">
							<time datetime="2015-10-28T09:41:03+00:00">
								October 28, 2015 at 9:41 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Unable to update profile.Gives validation error email already in use</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=45474#respond' onclick='return addComment.moveForm( "div-comment-45474", "45474", "respond", "1027" )' aria-label='Reply to Testing'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-46584" class="comment even thread-even depth-1">
			<article id="div-comment-46584" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://2.gravatar.com/avatar/2e798364094e3c0da0a40552e7771f90?s=60&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/2e798364094e3c0da0a40552e7771f90?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Alec</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-46584">
							<time datetime="2015-11-25T23:13:27+00:00">
								November 25, 2015 at 11:13 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Notice (1024): Element Not Found: Elements/default.ctp [CORE/Cake/View/View.php, line 425]</p>
<p>Error: The view for UsersController::social_login() was not found.</p>
<p>Stack Trace<br />
CORE/Cake/View/View.php line 470 ? View-&gt;_getViewFileName(null)<br />
CORE/Cake/Controller/Controller.php line 960 ? View-&gt;render(null, null)<br />
CORE/Cake/Routing/Dispatcher.php line 200 ? Controller-&gt;render()<br />
CORE/Cake/Routing/Dispatcher.php line 167 ? Dispatcher-&gt;_invoke(UsersController, CakeRequest)<br />
APP/webroot/index.php line 111 ? Dispatcher-&gt;dispatch(CakeRequest, CakeResponse)</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=46584#respond' onclick='return addComment.moveForm( "div-comment-46584", "46584", "respond", "1027" )' aria-label='Reply to Alec'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-46991" class="comment odd alt thread-odd thread-alt depth-1">
			<article id="div-comment-46991" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://1.gravatar.com/avatar/d2b5d9af96316188131eddf8b8f489f2?s=60&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/d2b5d9af96316188131eddf8b8f489f2?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Nil</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-46991">
							<time datetime="2015-12-07T10:09:24+00:00">
								December 7, 2015 at 10:09 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Hi,</p>
<p>When we are trying to login using FB at that time one copy of data was not saved in users table and because of that when i try to login again using FB it gives me error with blank $user array.</p>
<p>Can you please help me to sort out this issue.</p>
<p>Thanks,</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=46991#respond' onclick='return addComment.moveForm( "div-comment-46991", "46991", "respond", "1027" )' aria-label='Reply to Nil'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-47221" class="comment even thread-even depth-1">
			<article id="div-comment-47221" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://0.gravatar.com/avatar/6baff7709da5c5f95f62582cfff5f9d3?s=60&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/6baff7709da5c5f95f62582cfff5f9d3?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">latah</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-47221">
							<time datetime="2015-12-16T00:30:10+00:00">
								December 16, 2015 at 12:30 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Hi Mifty i tried to implement the code which u have publish but if iam trying to login with social ids iam getting error as                  Invalid App ID: Your-Facebook-Key same for google+ also</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=47221#respond' onclick='return addComment.moveForm( "div-comment-47221", "47221", "respond", "1027" )' aria-label='Reply to latah'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-47247" class="comment odd alt thread-odd thread-alt depth-1">
			<article id="div-comment-47247" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://1.gravatar.com/avatar/a4d23f3be0239fab4a30265eb5c0c41c?s=60&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/a4d23f3be0239fab4a30265eb5c0c41c?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn"><a href='http://hopeana.ignivastaging.com/' rel='external ' class='url'>Manish Kumar</a></b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-47247">
							<time datetime="2015-12-17T06:15:27+00:00">
								December 17, 2015 at 6:15 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>My Callback url gives error when i cancel login from google and twitter. Please help, i didn&#8217;t find any proper solutions for this.</p>
<p>Error message is &#8220;Authentication failed! Twitter returned an invalid oauth verifier.&#8221;;</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=47247#respond' onclick='return addComment.moveForm( "div-comment-47247", "47247", "respond", "1027" )' aria-label='Reply to Manish Kumar'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-47445" class="comment even thread-even depth-1 parent">
			<article id="div-comment-47445" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://2.gravatar.com/avatar/e6f0d3ba636902d38dbece2daa72a329?s=60&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/e6f0d3ba636902d38dbece2daa72a329?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Erik</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-47445">
							<time datetime="2015-12-26T14:53:04+00:00">
								December 26, 2015 at 2:53 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Hi Mifty, I have been trying to get this code working the last week or so. Google and Facebook worked almost rightaway but Twitter gave me some hassle. The first login with Twitter worked OK but the second time threw errors. I just found out what caused this behaviour so I thought I could help other users.<br />
In the HybridAuthComponent, the normalizeSocialProfile() method makes up a placeholder emailaddress for the incoming Twitter user. This emailaddress was stored in the social_profiles table but not in the users table. It turns out that the placeholder emailaddress was not accepted in the validation rules in the User Model so the save() action in the createFromSocialProfile() method didn&#8217;t work.<br />
 I removed the &#8216;alphaNumericDashUnderscore&#8217; rule for username in the User Model and I changed the underscore to a dot in the creation of display_name in the normalizeSocialProfile method of the HybridAuthComponent. After these changes, the incoming Twitter user was saved in the user table and Twitter authentication worked fine.</p>
<p>Cheers,</p>
<p>Erik.</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=47445#respond' onclick='return addComment.moveForm( "div-comment-47445", "47445", "respond", "1027" )' aria-label='Reply to Erik'>Reply</a></div>			</article><!-- .comment-body -->
<ul class="children">
		<li id="comment-47448" class="comment byuser comment-author-admin bypostauthor odd alt depth-2">
			<article id="div-comment-47448" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://2.gravatar.com/avatar/e7421eb2ff62513efa9b8d818bdb3bb7?s=60&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/e7421eb2ff62513efa9b8d818bdb3bb7?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn"><a href='http://miftyisbored.com' rel='external ' class='url'>Mifty</a></b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-47448">
							<time datetime="2015-12-26T19:42:39+00:00">
								December 26, 2015 at 7:42 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Hi Erik,<br />
Thanks for sharing your experience and letting others know how it worked out for you. I am a bit surprised that you had to remove the method alphaNumericDashUnderscore. I am using it on the live demo that i have up and running on this blog. Anyways, I&#8217;m glad you were able to make it work.</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=47448#respond' onclick='return addComment.moveForm( "div-comment-47448", "47448", "respond", "1027" )' aria-label='Reply to Mifty'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
		<li id="comment-47709" class="comment even thread-odd thread-alt depth-1 parent">
			<article id="div-comment-47709" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://1.gravatar.com/avatar/1166aa58b1ec371d955384f69705a756?s=60&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/1166aa58b1ec371d955384f69705a756?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">komal</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-47709">
							<time datetime="2016-01-06T00:58:58+00:00">
								January 6, 2016 at 12:58 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Hi,<br />
When we are trying to login using FB i found error like &#8221; You are not logged in: You are not logged in. Please log in and try again.&#8221;</p>
<p>i cant understand what can i do????????????? i am putting all thing that have you told please suggest </p>
<p>Thanks</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=47709#respond' onclick='return addComment.moveForm( "div-comment-47709", "47709", "respond", "1027" )' aria-label='Reply to komal'>Reply</a></div>			</article><!-- .comment-body -->
<ul class="children">
		<li id="comment-48081" class="comment byuser comment-author-admin bypostauthor odd alt depth-2">
			<article id="div-comment-48081" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://2.gravatar.com/avatar/e7421eb2ff62513efa9b8d818bdb3bb7?s=60&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/e7421eb2ff62513efa9b8d818bdb3bb7?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn"><a href='http://miftyisbored.com' rel='external ' class='url'>Mifty</a></b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-48081">
							<time datetime="2016-01-14T22:28:15+00:00">
								January 14, 2016 at 10:28 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>you are mostly likely not logged-in to facebook or you are logged-in to facebook but as a page instead of your regular profile. If thats the case, all you have to do is switch from page profile to your normal profile and you should be fine</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=48081#respond' onclick='return addComment.moveForm( "div-comment-48081", "48081", "respond", "1027" )' aria-label='Reply to Mifty'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
		<li id="comment-48008" class="comment even thread-even depth-1">
			<article id="div-comment-48008" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://1.gravatar.com/avatar/42b7c3f20c6c3896db6539fd508fc9c3?s=60&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/42b7c3f20c6c3896db6539fd508fc9c3?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">fam</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-48008">
							<time datetime="2016-01-12T13:54:56+00:00">
								January 12, 2016 at 1:54 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Thank you so much, i have setup successfuly.<br />
everything is ok&#8230;. but afterfter login, my page redirect to index, but have some character &#8220;#_=_&#8221; on address i dont know why </p>
<p>ex. mysite.com/#_=_</p>
<p>&#8212;&#8211;<br />
my AppcontrollerAppcontroller<br />
redirect in my auth is &#8216;loginRedirect&#8217; =&gt; &#8216;/&#8217;,<br />
please help me! sorry my english</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=48008#respond' onclick='return addComment.moveForm( "div-comment-48008", "48008", "respond", "1027" )' aria-label='Reply to fam'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-48203" class="comment odd alt thread-odd thread-alt depth-1 parent">
			<article id="div-comment-48203" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://0.gravatar.com/avatar/01ce614c223039c33c8a69632af348f4?s=60&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/01ce614c223039c33c8a69632af348f4?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Maddy</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-48203">
							<time datetime="2016-01-20T09:17:01+00:00">
								January 20, 2016 at 9:17 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Hi,</p>
<p>My code is working fine with Google+ but it is giving problem with twitter and facebook.<br />
For twitter its giving:<br />
Warning (2): Missing argument 1 for UsersController::social_endpoint() [APP/Controller/UsersController.php, line 83]<br />
Notice (8): Undefined index: oauth_token [APP/Vendor/hybridauth/Hybrid/thirdparty/OAuth/OAuth1Client.php, line 85]<br />
Notice (8): Undefined index: oauth_token_secret [APP/Vendor/hybridauth/Hybrid/thirdparty/OAuth/OAuth1Client.php, line 85]<br />
Warning (2): Cannot modify header information &#8211; headers already sent by (output started at /var/www/html/cakephpProjects/reelie/lib/Cake/Utility/Debugger.php:801) [APP/Vendor/hybridauth/Hybrid/Auth.php, line 363]</p>
<p>For facebook:<br />
Given URL is not permitted by the Application configuration: One or more of the given URLs is not permitted by the App&#8217;s settings. It must match the Website URL or Canvas URL, or the domain must be a subdomain of one of the App&#8217;s domains.</p>
<p>But my apps setting is totally fine. Please guide on this.<br />
Thank you.</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=48203#respond' onclick='return addComment.moveForm( "div-comment-48203", "48203", "respond", "1027" )' aria-label='Reply to Maddy'>Reply</a></div>			</article><!-- .comment-body -->
<ul class="children">
		<li id="comment-48234" class="comment even depth-2">
			<article id="div-comment-48234" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://0.gravatar.com/avatar/01ce614c223039c33c8a69632af348f4?s=60&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/01ce614c223039c33c8a69632af348f4?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Maddy</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-48234">
							<time datetime="2016-01-22T05:37:26+00:00">
								January 22, 2016 at 5:37 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Hi,</p>
<p>Your tutorial is really very helpful.Thanks for sharing.<br />
Its working for Google and Twitter. But still no luck for facebook.<br />
I have tried so much. But it is giving error like &#8211;<br />
&#8220;You are not logged in: You are not logged in. Please log in and try again.&#8221;</p>
<p>I have checked all settings. But I am not getting any solution for facebook. I appreciate if I can get reply soon.<br />
Thank you in advance.</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=48234#respond' onclick='return addComment.moveForm( "div-comment-48234", "48234", "respond", "1027" )' aria-label='Reply to Maddy'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
		<li id="comment-48215" class="comment odd alt thread-even depth-1">
			<article id="div-comment-48215" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://1.gravatar.com/avatar/1166aa58b1ec371d955384f69705a756?s=60&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/1166aa58b1ec371d955384f69705a756?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Komal Kharche</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-48215">
							<time datetime="2016-01-21T01:10:56+00:00">
								January 21, 2016 at 1:10 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>i have successfully integrated for twitter,google  but for Facebook I am having issue.<br />
Error:<br />
Given URL is not permitted by the Application configuration: One or more of the given URLs is not permitted by the App&#8217;s settings. It must match the Website URL or Canvas URL, or the domain must be a sub domain of one of the App&#8217;s domains.</p>
<p>My apps setting and coding settings for URL are correct. but I am not getting solution. Please guide on this.</p>
<p>Thanks in advance</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=48215#respond' onclick='return addComment.moveForm( "div-comment-48215", "48215", "respond", "1027" )' aria-label='Reply to Komal Kharche'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-48231" class="comment even thread-odd thread-alt depth-1">
			<article id="div-comment-48231" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://0.gravatar.com/avatar/6766073fbeacea384df88f5f5503404e?s=60&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/6766073fbeacea384df88f5f5503404e?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Rohit</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-48231">
							<time datetime="2016-01-22T00:13:20+00:00">
								January 22, 2016 at 12:13 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>HI,<br />
I am facing login redirect issue on a server, when i am login with facebook then after that it will redirect to blank page</p>
<p>please suggest, it&#8217;s urgent</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=48231#respond' onclick='return addComment.moveForm( "div-comment-48231", "48231", "respond", "1027" )' aria-label='Reply to Rohit'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-48273" class="comment odd alt thread-even depth-1">
			<article id="div-comment-48273" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://2.gravatar.com/avatar/5d523cb50c1c04de5ab0cbdbda2b12b5?s=60&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/5d523cb50c1c04de5ab0cbdbda2b12b5?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Orfevre</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-48273">
							<time datetime="2016-01-26T12:31:53+00:00">
								January 26, 2016 at 12:31 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Hello Mifty, first, i&#8217;d like to thank you for this tutorial.<br />
I&#8217;m trying to follow it but i&#8217;m facing an issue.<br />
The social profile is saving on table but nothing in user table. Have you an idea about how to proceed? sorry for my english</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=48273#respond' onclick='return addComment.moveForm( "div-comment-48273", "48273", "respond", "1027" )' aria-label='Reply to Orfevre'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-48288" class="comment even thread-odd thread-alt depth-1">
			<article id="div-comment-48288" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://2.gravatar.com/avatar/2501f1446aa4829f24dd1b26a599a333?s=60&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/2501f1446aa4829f24dd1b26a599a333?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">fam</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-48288">
							<time datetime="2016-01-27T18:22:45+00:00">
								January 27, 2016 at 6:22 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>thank you so much<br />
can you help me how to share something to facebook or twiter after logged</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=48288#respond' onclick='return addComment.moveForm( "div-comment-48288", "48288", "respond", "1027" )' aria-label='Reply to fam'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-48488" class="comment odd alt thread-even depth-1">
			<article id="div-comment-48488" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://1.gravatar.com/avatar/4cdf1fb80ad431bd33ccebfdda7bab8c?s=60&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/4cdf1fb80ad431bd33ccebfdda7bab8c?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Guilherme</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-48488">
							<time datetime="2016-02-09T19:49:42+00:00">
								February 9, 2016 at 7:49 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Thanks this fucking awesome contribution. I&#8217;m facing the 400 error on google+ The url needs to be verified? I can&#8217;t figure out why, but I did this and I can&#8217;t add the domain before validated. any glue?</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=48488#respond' onclick='return addComment.moveForm( "div-comment-48488", "48488", "respond", "1027" )' aria-label='Reply to Guilherme'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-48707" class="comment even thread-odd thread-alt depth-1">
			<article id="div-comment-48707" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://2.gravatar.com/avatar/80658920ab7a222a8d4033f410460c28?s=60&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/80658920ab7a222a8d4033f410460c28?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Andres</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-48707">
							<time datetime="2016-02-22T15:53:41+00:00">
								February 22, 2016 at 3:53 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>This tutorial is awesome, worked fine. Keep rocking.</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=48707#respond' onclick='return addComment.moveForm( "div-comment-48707", "48707", "respond", "1027" )' aria-label='Reply to Andres'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		<li id="comment-49140" class="comment odd alt thread-even depth-1">
			<article id="div-comment-49140" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='http://2.gravatar.com/avatar/b68401ff70384df113a49d352c352cbe?s=60&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/b68401ff70384df113a49d352c352cbe?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />						<b class="fn">Akshay kumar</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-3/#comment-49140">
							<time datetime="2016-03-08T04:11:12+00:00">
								March 8, 2016 at 4:11 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>hello</p>
<p>i m trying your code but i got an error in login with google&#8230;</p>
<p>Error: redirect_uri_mismatch<br />
please help to solve this<br />
please</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/?replytocom=49140#respond' onclick='return addComment.moveForm( "div-comment-49140", "49140", "respond", "1027" )' aria-label='Reply to Akshay kumar'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
		</ol><!-- .commentlist -->

				<nav id="comment-nav-below" class="comments-navigation" role="navigation">
			<div class="nav-previous"><a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/comment-page-2/#comments" >&larr; Older Comments</a></div>
			<div class="nav-next"></div>
			<div class="clearfix"></div>
		</nav>
		
		
		
						<div id="respond" class="comment-respond">
			<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/#respond" style="display:none;">Cancel reply</a></small></h3>				<form action="http://miftyisbored.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
					<p class="comment-notes">Your email address will not be published.</p><p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Write your comment..."></textarea></p><p class="comment-form-author"><label for="author">Name</label> <span class="required">*</span><input id="author" name="author" type="text" value="" size="30" aria-required='true' placeholder="Name *" /></p>
<p class="comment-form-email"><label for="email">Email</label> <span class="required">*</span><input id="email" name="email" type="email" value="" size="30" aria-required='true' placeholder="Email *" /></p>
<p class="comment-form-url"><label for="url">Website</label><input id="url" name="url" type="url" value="" size="30" placeholder="Website" /></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='1027' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="79a9afb961" /></p><p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="198"/></p>				</form>
					</div><!-- #respond -->
		</div><!-- #comments .comments-area -->
            
        </main><!-- .content-area -->
        
        <div id="secondary" class="secondary">
				                <div class="theiaStickySidebar">

                    <div id="widget-area" class="widget-area" role="complementary">

                        						<aside class="widget widget_ads" id="ads-2" style="">
							<div class="ad-container">
								<script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<!-- MiB responsive 300x250 -->
								<ins class="adsbygoogle MiB_responsive_300x250"
									 style="display:block"
									 data-ad-client="ca-pub-9232413282463697"
									 data-ad-slot="4821766446"
									 ></ins>
								<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
								<div class="clearfix"></div>
							</div>
						</aside>						
												<aside id="search-2" class="widget widget_search">
                            <h3 class="widget-title">
                                <span>Search</span>
                            </h3>
                            <div class="searchform">
                                <form role="search" method="get" action="http://withemes.com/fox">
                                    <input type="text" name="s" class="s" value="" placeholder="Search..."/>
                                    <button class="submit" role="button" title="Go">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <!-- .header-search -->
                        </aside>						
						                        <aside id="most-viewed-posts-2" class="widget widget_most_viewed_entries">
                            <h3 class="widget-title">
                                <span>Random Goodness</span>
                            </h3>

                            <div class="wi-popular popular-big">

																
								<div class="popular-thumbnail-container">
									
        <figure class="popular-thumbnail thumbnail-type-secondary">
            <a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/">
                <img src="http://miftyisbored.com/wp-content/uploads/2014/08/cakephp-2_3-social-login-screenshot.jpg" width="480" height="203" alt="" />
            
            
            </a>        </figure>
    									<span class="popular-counter">01</span>
																	</div><!-- .thumbnail-container -->
								
								<h3 class="popular-title"><a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/">A Complete Social Login Application Tutorial for CakePHP 2.3 (Twitter, Facebook and Google)</a></h3>
								
								<div class="popular-content">
									<p>After writing the tutorial on how to create a complete login system using CakePHP, I have received a lot of &hellip; <a href="http://miftyisbored.com/complete-social-login-application-tutorial-cakephp-2-3-twitter-facebook-google/" class="readmore">More</a></p>
								</div><!-- .popular-content -->
								
																
								<div class="popular-thumbnail-container">
									        <figure class="popular-thumbnail">
            <a href="http://miftyisbored.com/a-complete-tutorial-on-cakephp-and-ajax-forms-using-jquery/">                <img width="480" height="257" src="http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery.png" class="attachment-thumbnail-medium size-thumbnail-medium wp-post-image" alt="CakePHP-jquery" srcset="http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery.png 500w, http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery-300x161.png 300w, http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery-360x193.png 360w, http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery-453x243.png 453w" sizes="(max-width: 480px) 100vw, 480px" />            
                            
            </a>        </figure>
    									<span class="popular-counter">02</span>
																	</div><!-- .thumbnail-container -->
								
								<h3 class="popular-title"><a href="http://miftyisbored.com/a-complete-tutorial-on-cakephp-and-ajax-forms-using-jquery/">A complete tutorial on CakePHP and AJAX forms using jQuery</a></h3>
								
								<div class="popular-content">
									<p>The following is a complete tutorial on how to setup a CakePHP AJAX form using jQuery. In this tutorial I&#39;ll &hellip; <a href="http://miftyisbored.com/a-complete-tutorial-on-cakephp-and-ajax-forms-using-jquery/" class="readmore">More</a></p>
								</div><!-- .popular-content -->
								
																
								<div class="popular-thumbnail-container">
									        <figure class="popular-thumbnail">
            <a href="http://miftyisbored.com/avengers-artwork-from-jeremy-love/">                <img width="360" height="210" src="http://miftyisbored.com/wp-content/uploads/2013/07/avengers-game-preview.png" class="attachment-thumbnail-medium size-thumbnail-medium wp-post-image" alt="avengers-game-preview" srcset="http://miftyisbored.com/wp-content/uploads/2013/07/avengers-game-preview.png 360w, http://miftyisbored.com/wp-content/uploads/2013/07/avengers-game-preview-300x175.png 300w" sizes="(max-width: 360px) 100vw, 360px" />            
                            
            </a>        </figure>
    									<span class="popular-counter">03</span>
																	</div><!-- .thumbnail-container -->
								
								<h3 class="popular-title"><a href="http://miftyisbored.com/avengers-artwork-from-jeremy-love/">Avengers Artwork From Jeremy Love</a></h3>
								
								<div class="popular-content">
									<p>I found this really cool set of concept art created by Jeremy Love that was supposed to be used for &hellip; <a href="http://miftyisbored.com/avengers-artwork-from-jeremy-love/" class="readmore">More</a></p>
								</div><!-- .popular-content -->
								
																
								<div class="popular-thumbnail-container">
									        <figure class="popular-thumbnail">
            <a href="http://miftyisbored.com/001-vader-throne/">                <img width="480" height="384" src="http://miftyisbored.com/wp-content/uploads/2016/05/001-the-vader-throne-480x384.jpg" class="attachment-thumbnail-medium size-thumbnail-medium wp-post-image" alt="001-the-vader-throne" />            
                            
            </a>        </figure>
    									<span class="popular-counter">04</span>
																	</div><!-- .thumbnail-container -->
								
								<h3 class="popular-title"><a href="http://miftyisbored.com/001-vader-throne/">001 &#8211; The Vader Throne</a></h3>
								
								<div class="popular-content">
									<p>So, for the very first comic that I publish on MifTees, I am combining two extremely popular franchises that I &hellip; <a href="http://miftyisbored.com/001-vader-throne/" class="readmore">More</a></p>
								</div><!-- .popular-content -->
								
								
                            </div>
                            <!-- .wi-popular -->

                        </aside>						
												<aside id="latest-posts-2" class="widget widget_display_posts">
                            <h3 class="widget-title">
                                <span>Tutorials</span>
                            </h3>
                            <div class="latest-posts">

                                <ul class="latest-list">
																		<li class="latest-article format-standard">
                    
																				<figure class="latest-thumb">
											<a href="http://miftyisbored.com/a-complete-tutorial-on-cakephp-and-ajax-forms-using-jquery/">
												<img width="480" height="257" src="http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery.png" class="attachment-thumbnail-medium size-thumbnail-medium wp-post-image" alt="CakePHP-jquery" srcset="http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery.png 500w, http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery-300x161.png 300w, http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery-360x193.png 360w, http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery-453x243.png 453w" sizes="(max-width: 480px) 100vw, 480px" />											</a>
										</figure><!-- .latest-thumb -->
																				<section class="latest-content">
											<time class="latest-date" datetime="2015-05-02T10:08:03+00:00">May 2, 2015</time>
											<h3 class="latest-title"><a href="http://miftyisbored.com/a-complete-tutorial-on-cakephp-and-ajax-forms-using-jquery/">A complete tutorial on CakePHP and AJAX forms using jQuery</a></h3>
										</section>
										
										<div class="clearfix"></div>
										
									</li><!-- .post-item -->
																		<li class="latest-article format-standard">
                    
																				<div class="latest-pseudo-thumb latest-thumb">
											<span class="format-indicator"><i class="fa fa-file-text-o"></i></span>
										</div><!-- .latest-thumb -->
																				<section class="latest-content">
											<time class="latest-date" datetime="2015-04-18T13:19:35+00:00">April 18, 2015</time>
											<h3 class="latest-title"><a href="http://miftyisbored.com/cakephp-find-and-pagination-with-habtm-models/">CakePHP find and pagination with HABTM models</a></h3>
										</section>
										
										<div class="clearfix"></div>
										
									</li><!-- .post-item -->
																		<li class="latest-article format-standard">
                    
																				
										<figure class="latest-thumb">
											<a href="http://miftyisbored.com/merge-sort-implementation-java/">
																								<img src="http://miftyisbored.com/wp-content/uploads/2015/01/Merge-sort-analysis.jpg" width="480" height="364" alt="" />
												
											</a>
										</figure><!-- .latest-thumb -->
										
																				<section class="latest-content">
											<time class="latest-date" datetime="2015-01-31T17:02:50+00:00">January 31, 2015</time>
											<h3 class="latest-title"><a href="http://miftyisbored.com/merge-sort-implementation-java/">Merge Sort Implementation in Java</a></h3>
										</section>
										
										<div class="clearfix"></div>
										
									</li><!-- .post-item -->
																		<li class="latest-article format-standard">
                    
																				
										<figure class="latest-thumb">
											<a href="http://miftyisbored.com/quicksort-implementation-java/">
																								<img src="http://miftyisbored.com/wp-content/uploads/2015/01/quick-sort.png" width="322" height="384" alt="" />
												
											</a>
										</figure><!-- .latest-thumb -->
										
																				<section class="latest-content">
											<time class="latest-date" datetime="2015-01-31T13:53:55+00:00">January 31, 2015</time>
											<h3 class="latest-title"><a href="http://miftyisbored.com/quicksort-implementation-java/">QuickSort Implementation in Java</a></h3>
										</section>
										
										<div class="clearfix"></div>
										
									</li><!-- .post-item -->
																		<li class="latest-article format-standard">
                    
																				
										<figure class="latest-thumb">
											<a href="http://miftyisbored.com/insertion-sort-implementation-java/">
																								<img src="http://miftyisbored.com/wp-content/uploads/2015/01/Insertion-Sort-demo.jpg" width="480" height="339" alt="" />
												
											</a>
										</figure><!-- .latest-thumb -->
										
																				<section class="latest-content">
											<time class="latest-date" datetime="2015-01-30T01:06:53+00:00">January 30, 2015</time>
											<h3 class="latest-title"><a href="http://miftyisbored.com/insertion-sort-implementation-java/">Insertion Sort Implementation in Java</a></h3>
										</section>
										
										<div class="clearfix"></div>
										
									</li><!-- .post-item -->
									
                                </ul>

                                <div class="clearfix"></div>

                            </div>
                            <!-- .latest--posts -->

                        </aside>						
												<aside id="facebook-2" class="widget widget_facebook">
                            <h3 class="widget-title">
                                <span>Let's Get Social</span>
                            </h3>
                            <!-- facebook like box -->
							<div class="small-teaser">		
								<div class="inner">	
									<div class="fb-like-box" style="margin: auto" data-href="https://www.facebook.com/MiftyIsBored" data-width="300" data-height="185" data-show-faces="true" data-stream="false" data-show-border="true" data-header="false"></div>
									
								</div>
							</div>
                        </aside>						
												<aside class="widget widget_ads" id="ads-2" style="">
							<div class="ad-container">
								<!-- Place this tag where you want the widget to render. -->
								<div style="min-height: 131px;"><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
								<g:plus href="https://plus.google.com/100259526922889769032/"></g:plus></div>

								<div class="clearfix"></div>
							</div>
						</aside>
                        <div class="gutter-sidebar"></div>
                    </div>
                    <!-- .widget-area -->

                </div>            </div>
            <!-- #secondary -->
        <div class="clearfix"></div>
        
    </div><!-- .content -->
</div><!-- .container -->


<nav class="post-nav">
	<div class="container">
		
	<nav class="navigation post-navigation" role="navigation">
		<h2 class="screen-reader-text">Post navigation</h2>
		<div class="nav-links"><div class="nav-previous"><a href="http://miftyisbored.com/power-rangers-live-wall-street/" rel="prev"><span class="meta-nav" aria-hidden="true"><i class="fa fa-caret-left"></i>Previous Article</span> <span class="screen-reader-text">Previous post:</span> <span class="post-title">Power Rangers live on Wall Street</span></a></div><div class="nav-next"><a href="http://miftyisbored.com/avengers-s-t-t-o-n-exhibition-nyc/" rel="next"><span class="meta-nav" aria-hidden="true">Next Article<i class="fa fa-caret-right"></i></span> <span class="screen-reader-text">Next post:</span> <span class="post-title">Avengers S.T.A.T.I.O.N.: the Exhibition in NYC</span></a></div></div>
	</nav>	</div><!-- .container -->
</nav><!-- .post-nav -->




            <div id="posts-small-wrapper">
                <div class="container">
                    
                    <h3 id="posts-small-heading"><span>Latest from CakePHP</span></h3>

                    <div id="posts-small">

                    
                        <article id="post-1583" class="post-small small-item post-1583 post type-post status-publish format-standard has-post-thumbnail hentry category-ajax category-cakephp category-jquery-javascript category-tutorials-samples category-web-development"><div class="small-inner">
    
            <figure class="small-thumbnail">
            <a href="http://miftyisbored.com/a-complete-tutorial-on-cakephp-and-ajax-forms-using-jquery/">                <img width="480" height="257" src="http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery.png" class="attachment-thumbnail-medium size-thumbnail-medium wp-post-image" alt="CakePHP-jquery" srcset="http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery.png 500w, http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery-300x161.png 300w, http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery-360x193.png 360w, http://miftyisbored.com/wp-content/uploads/2015/05/CakePHP-jquery-453x243.png 453w" sizes="(max-width: 480px) 100vw, 480px" />            
                            
            </a>        </figure>
            
    <section class="small-body">
            
        <header class="small-header">

            <div class="small-meta">

                <span class="small-date">
                    <time datetime="2015-05-02T10:08:03+00:00" title="May 2, 2015">May 2, 2015</time>
                </span>

            </div><!-- .small-meta -->

            <h3 class="small-title"><a href="http://miftyisbored.com/a-complete-tutorial-on-cakephp-and-ajax-forms-using-jquery/">A complete tutorial on CakePHP and AJAX forms using jQuery</a></h3>

        </header><!-- .small-header -->

        <div class="small-excerpt">
            The following is a complete tutorial on how to setup a CakePHP        </div>

        <div class="clearfix"></div>
        
    </section><!-- .small-body -->
    
    <div class="clearfix"></div>
    
    </div></article><!-- .post-small -->

                        
                        <article id="post-1572" class="post-small small-item post-1572 post type-post status-publish format-standard hentry category-cakephp category-php category-web-development"><div class="small-inner">
    
    
        <figure class="small-thumbnail thumbnail-type-secondary">
            <a href="http://miftyisbored.com/a-tutorial-on-how-to-setup-a-cron-job-for-cakephp-2-x-on-shared-hosting/">
                <img src="http://miftyisbored.com/wp-content/uploads/2015/04/bluehost-cronjob-menu.png" width="465" height="384" alt="" />
            
            
            </a>        </figure>
            
    <section class="small-body">
            
        <header class="small-header">

            <div class="small-meta">

                <span class="small-date">
                    <time datetime="2015-04-22T19:29:28+00:00" title="April 22, 2015">April 22, 2015</time>
                </span>

            </div><!-- .small-meta -->

            <h3 class="small-title"><a href="http://miftyisbored.com/a-tutorial-on-how-to-setup-a-cron-job-for-cakephp-2-x-on-shared-hosting/">A Tutorial on how to setup a Cron Job for CakePHP 2.x on shared hosting</a></h3>

        </header><!-- .small-header -->

        <div class="small-excerpt">
            I recently had to setup a cron job on shared hosting for        </div>

        <div class="clearfix"></div>
        
    </section><!-- .small-body -->
    
    <div class="clearfix"></div>
    
    </div></article><!-- .post-small -->

                        
                        <article id="post-1566" class="post-small small-item post-1566 post type-post status-publish format-standard hentry category-cakephp category-php category-tutorials-samples"><div class="small-inner">
    
            <figure class="small-thumbnail thumbnail-pseudo">
            <a href="http://miftyisbored.com/cakephp-find-and-pagination-with-habtm-models/">        
                <img src="http://miftyisbored.com/wp-content/themes/MiB_V2/images/thumbnail-medium.png" width="400" height="320" alt="Placeholder" />
            
            </a>        </figure>
            
    <section class="small-body">
            
        <header class="small-header">

            <div class="small-meta">

                <span class="small-date">
                    <time datetime="2015-04-18T13:19:35+00:00" title="April 18, 2015">April 18, 2015</time>
                </span>

            </div><!-- .small-meta -->

            <h3 class="small-title"><a href="http://miftyisbored.com/cakephp-find-and-pagination-with-habtm-models/">CakePHP find and pagination with HABTM models</a></h3>

        </header><!-- .small-header -->

        <div class="small-excerpt">
            A little while back, I create a tutorial on how to setup        </div>

        <div class="clearfix"></div>
        
    </section><!-- .small-body -->
    
    <div class="clearfix"></div>
    
    </div></article><!-- .post-small -->

                        
                        <article id="post-1479" class="post-small small-item post-1479 post type-post status-publish format-standard hentry category-cakephp category-php category-tutorials-samples"><div class="small-inner">
    
    
        <figure class="small-thumbnail thumbnail-type-secondary">
            <a href="http://miftyisbored.com/complete-tutorial-admin-routing-cakephp/">
                <img src="http://miftyisbored.com/wp-content/uploads/2015/01/front-section.jpg" width="480" height="125" alt="" />
            
            
            </a>        </figure>
            
    <section class="small-body">
            
        <header class="small-header">

            <div class="small-meta">

                <span class="small-date">
                    <time datetime="2015-01-12T13:23:03+00:00" title="January 12, 2015">January 12, 2015</time>
                </span>

            </div><!-- .small-meta -->

            <h3 class="small-title"><a href="http://miftyisbored.com/complete-tutorial-admin-routing-cakephp/">A complete tutorial on Admin Routing for CakePHP</a></h3>

        </header><!-- .small-header -->

        <div class="small-excerpt">
            Although CakePHP’s cookbook does a pretty good job at explaining admin routing,        </div>

        <div class="clearfix"></div>
        
    </section><!-- .small-body -->
    
    <div class="clearfix"></div>
    
    </div></article><!-- .post-small -->

                        
                        <article id="post-1152" class="post-small small-item post-1152 post type-post status-publish format-standard has-post-thumbnail hentry category-cakephp category-tutorials-samples tag-cakephp-2"><div class="small-inner">
    
            <figure class="small-thumbnail">
            <a href="http://miftyisbored.com/setup-google-analytics-event-tracking-cakephp/">                <img width="330" height="236" src="http://miftyisbored.com/wp-content/uploads/2014/09/ga-event-tracker-preview.jpg" class="attachment-thumbnail-medium size-thumbnail-medium wp-post-image" alt="ga-event-tracker-preview" srcset="http://miftyisbored.com/wp-content/uploads/2014/09/ga-event-tracker-preview.jpg 330w, http://miftyisbored.com/wp-content/uploads/2014/09/ga-event-tracker-preview-300x214.jpg 300w, http://miftyisbored.com/wp-content/uploads/2014/09/ga-event-tracker-preview-293x210.jpg 293w" sizes="(max-width: 330px) 100vw, 330px" />            
                            
            </a>        </figure>
            
    <section class="small-body">
            
        <header class="small-header">

            <div class="small-meta">

                <span class="small-date">
                    <time datetime="2014-09-15T22:26:17+00:00" title="September 15, 2014">September 15, 2014</time>
                </span>

            </div><!-- .small-meta -->

            <h3 class="small-title"><a href="http://miftyisbored.com/setup-google-analytics-event-tracking-cakephp/">How to Setup Google Analytics Event Tracking with CakePHP</a></h3>

        </header><!-- .small-header -->

        <div class="small-excerpt">
            These days, I am using CakePHP more and more for many of        </div>

        <div class="clearfix"></div>
        
    </section><!-- .small-body -->
    
    <div class="clearfix"></div>
    
    </div></article><!-- .post-small -->

                        
                    </div><!-- #posts-small -->
                </div><!-- .container -->
            </div><!-- #posts-small-wrapper -->

        



        
</div><!-- .container -->

        </div><!-- #wi-main -->

<footer id="wi-footer">
    
        
    <div id="footer-widgets">
        <div class="container">
            <div class="footer-widgets-inner">
                                    
                <div class="footer-col">
                    <aside id="recent-posts-3" class="widget widget_recent_entries">		
						<h3 class="widget-title"><span>Recent Posts</span></h3>		
						<ul>
							<li><a href="http://miftyisbored.com/016-art-iron-man/" rel="bookmark" title="016 &#8211; Art by Iron Man">016 &#8211; Art by Iron Man</a><span class="post-date">February 1, 2016</span></li>

<li><a href="http://miftyisbored.com/015-shhh-first-order-no-idea/" rel="bookmark" title="015 &#8211; Shhh&#8230; The First Order Has No Idea">015 &#8211; Shhh&#8230; The First Order Has No Idea</a><span class="post-date">January 4, 2016</span></li>

<li><a href="http://miftyisbored.com/intersting-facts-from-star-wars-the-force-awakens-visual-dictionary/" rel="bookmark" title="Intersting facts from Star Wars: The Force Awakens Visual Dictionary">Intersting facts from Star Wars: The Force Awakens Visual Dictionary</a><span class="post-date">January 4, 2016</span></li>

<li><a href="http://miftyisbored.com/014-shhh-empire-no-idea/" rel="bookmark" title="014 &#8211; Shhh&#8230; The Empire Has No Idea">014 &#8211; Shhh&#8230; The Empire Has No Idea</a><span class="post-date">January 3, 2016</span></li>

<li><a href="http://miftyisbored.com/013-chef-deadpool/" rel="bookmark" title="013 &#8211; Chef DeadPool">013 &#8211; Chef DeadPool</a><span class="post-date">December 31, 2015</span></li>
<!-- Recent Posts took 21.341 ms -->						</ul>
					</aside>		                    
                </div><!-- .footer-col -->

                                    
                <div class="footer-col">
                    
                    <aside id="recent-comments-3" class="widget widget_recent_comments">
						<h3 class="widget-title"><span>Recent Comments</span></h3>
						<ul id="recentcomments">
					<li class="recentcomments"><span class="comment-author-link"><a href="http://miftyisbored.com/004-vader-bacon/#comment-50001" rel="external nofollow" class="url">stan</a></span> on <a href="http://miftyisbored.com/004-vader-bacon/">004 &#8211; Vader Bacon</a></li>

<li class="recentcomments"><span class="comment-author-link"><a href="http://miftyisbored.com/cakephp-paginator-and-twitter-boostrap/#comment-49874" rel="external nofollow" class="url">aditya</a></span> on <a href="http://miftyisbored.com/cakephp-paginator-and-twitter-boostrap/">CakePHP Paginator and Twitter Boostrap</a></li>

<li class="recentcomments"><span class="comment-author-link"><a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/#comment-49664" rel="external nofollow" class="url">jason</a></span> on <a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/">A Complete Login and Authentication Application Tutorial for CakePHP 2.3</a></li>

<li class="recentcomments"><span class="comment-author-link"><a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/#comment-49586" rel="external nofollow" class="url">mandeep khaleriya</a></span> on <a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/">A Complete Login and Authentication Application Tutorial for CakePHP 2.3</a></li>

<li class="recentcomments"><span class="comment-author-link"><a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/#comment-49585" rel="external nofollow" class="url">mandeep khaleriya</a></span> on <a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/">A Complete Login and Authentication Application Tutorial for CakePHP 2.3</a></li>
<!-- Recent Comments took 21.439 ms -->					
						</ul>
					</aside>                    
                </div><!-- .footer-col -->

                                    
                <div class="footer-col">
                    <aside id="recent-posts-3" class="widget widget_recent_entries">		
						<h3 class="widget-title"><span>Popular Posts</span></h3>		
						<ul>
							<li><a href="http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3/" rel="bookmark" title="A Complete Login and Authentication Application Tutorial for CakePHP 2.3">A Complete Login and Authentication Application Tutorial for CakePHP 2.3</a><span class="post-date">August 11, 2013</span></li>

<li><a href="http://miftyisbored.com/complete-restful-service-client-cakephp-tutorial/" rel="bookmark" title="A complete RESTful service and client in CakePHP tutorial">A complete RESTful service and client in CakePHP tutorial</a><span class="post-date">December 13, 2013</span></li>

<li><a href="http://miftyisbored.com/magic-the-gathering-artwork-by-aleksi-briclot/" rel="bookmark" title="Magic The Gathering Artwork by Aleksi Briclot">Magic The Gathering Artwork by Aleksi Briclot</a><span class="post-date">March 10, 2011</span></li>

<li><a href="http://miftyisbored.com/a-complete-list-of-standard-google-maps-marker-icons/" rel="bookmark" title="A Complete List of Standard Google Maps Marker Icons">A Complete List of Standard Google Maps Marker Icons</a><span class="post-date">June 4, 2011</span></li>

<li><a href="http://miftyisbored.com/iron-man-obama-poster/" rel="bookmark" title="Iron Man 2 Hope and Change Obama-style Poster">Iron Man 2 Hope and Change Obama-style Poster</a><span class="post-date">February 16, 2011</span></li>
<!-- popular Posts took 17.805 ms -->						</ul>
					</aside>		                    
                </div><!-- .footer-col -->

                                    
                <div class="footer-col">
                    
                    <aside id="tag_cloud-2" class="widget widget_tag_cloud"><h3 class="widget-title"><span>Tagcloud</span></h3><div class="tagcloud">
					<a href='http://miftyisbored.com/tag/hulk/' class='tag-link-83 tag-link-position-1' title='3 topics' style='font-size: 12.064516129032pt;'>Hulk</a>
<a href='http://miftyisbored.com/tag/spiderman/' class='tag-link-82 tag-link-position-2' title='3 topics' style='font-size: 12.064516129032pt;'>Spiderman</a>
<a href='http://miftyisbored.com/tag/czarface/' class='tag-link-62 tag-link-position-3' title='2 topics' style='font-size: 11pt;'>CZARFACE</a>
<a href='http://miftyisbored.com/tag/green-lantern/' class='tag-link-92 tag-link-position-4' title='3 topics' style='font-size: 12.064516129032pt;'>Green Lantern</a>
<a href='http://miftyisbored.com/tag/sorting-algorithms/' class='tag-link-128 tag-link-position-5' title='5 topics' style='font-size: 13.661290322581pt;'>Sorting Algorithms</a>
<a href='http://miftyisbored.com/tag/google/' class='tag-link-133 tag-link-position-6' title='4 topics' style='font-size: 12.951612903226pt;'>Google</a>
<a href='http://miftyisbored.com/tag/marvel-comics/' class='tag-link-56 tag-link-position-7' title='52 topics' style='font-size: 22pt;'>Marvel Comics</a>
<a href='http://miftyisbored.com/tag/captain-america/' class='tag-link-24 tag-link-position-8' title='4 topics' style='font-size: 12.951612903226pt;'>Captain America</a>
<a href='http://miftyisbored.com/tag/star-wars/' class='tag-link-59 tag-link-position-9' title='13 topics' style='font-size: 16.943548387097pt;'>Star Wars</a>
<a href='http://miftyisbored.com/tag/wolverine/' class='tag-link-89 tag-link-position-10' title='3 topics' style='font-size: 12.064516129032pt;'>Wolverine</a>
<a href='http://miftyisbored.com/tag/marvel/' class='tag-link-38 tag-link-position-11' title='23 topics' style='font-size: 18.983870967742pt;'>Marvel</a>
<a href='http://miftyisbored.com/tag/hot-toys/' class='tag-link-120 tag-link-position-12' title='21 topics' style='font-size: 18.629032258065pt;'>Hot Toys</a>
<a href='http://miftyisbored.com/tag/wordpress/' class='tag-link-132 tag-link-position-13' title='3 topics' style='font-size: 12.064516129032pt;'>Wordpress</a>
<a href='http://miftyisbored.com/tag/cakephp-2/' class='tag-link-111 tag-link-position-14' title='3 topics' style='font-size: 12.064516129032pt;'>cakephp</a>
<a href='http://miftyisbored.com/tag/full-course/' class='tag-link-76 tag-link-position-15' title='3 topics' style='font-size: 12.064516129032pt;'>Full Course</a>
<a href='http://miftyisbored.com/tag/game-of-thrones/' class='tag-link-143 tag-link-position-16' title='3 topics' style='font-size: 12.064516129032pt;'>Game of Thrones</a>
<a href='http://miftyisbored.com/tag/avengers/' class='tag-link-22 tag-link-position-17' title='5 topics' style='font-size: 13.661290322581pt;'>Avengers</a>
<a href='http://miftyisbored.com/tag/dc-comics/' class='tag-link-81 tag-link-position-18' title='9 topics' style='font-size: 15.612903225806pt;'>DC Comics</a>
<a href='http://miftyisbored.com/tag/thanos/' class='tag-link-104 tag-link-position-19' title='2 topics' style='font-size: 11pt;'>Thanos</a>
<a href='http://miftyisbored.com/tag/iron-man/' class='tag-link-35 tag-link-position-20' title='31 topics' style='font-size: 20.137096774194pt;'>Iron Man</a>
<a href='http://miftyisbored.com/tag/deadpool/' class='tag-link-144 tag-link-position-21' title='3 topics' style='font-size: 12.064516129032pt;'>Deadpool</a>
<a href='http://miftyisbored.com/tag/darth-vader/' class='tag-link-139 tag-link-position-22' title='3 topics' style='font-size: 12.064516129032pt;'>Darth Vader</a>
<a href='http://miftyisbored.com/tag/batman/' class='tag-link-116 tag-link-position-23' title='5 topics' style='font-size: 13.661290322581pt;'>Batman</a>
<a href='http://miftyisbored.com/tag/thor/' class='tag-link-84 tag-link-position-24' title='2 topics' style='font-size: 11pt;'>Thor</a>
<a href='http://miftyisbored.com/tag/halo/' class='tag-link-87 tag-link-position-25' title='3 topics' style='font-size: 12.064516129032pt;'>Halo</a></div>
</aside>                    
                </div><!-- .footer-col -->

                                <div class="clearfix"></div>
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div><!-- .footer-widgets-inner -->
        </div><!-- .container -->
    </div><!-- #footer-widgets -->
    
    <div id="footer-bottom" role="contentinfo">
        
        <div class="container">
            
            <div id="footer-logo">
                <a href="http://miftyisbored.com" rel="home"  class="brandf">
                    <img src="http://miftyisbored.com/wp-content/themes/MiB_V2/images/footer-logo.png" data-retina="http://miftyisbored.com/wp-content/themes/MiB_V2/images/footer-logo@2x.png" alt="Footer logo" />
                </a>
            </div>
			
            
            <div id="footer-social" class="social-list">
                <ul>
                    <li class="li-facebook-square"><a href="https://www.facebook.com/MiftyIsBored/" target="_blank" rel="alternate" title="Facebook"><i class="fa fa-facebook-square"></i> <span>Facebook</span></a></li>
                    <li class="li-twitter"><a href="https://plus.google.com/100259526922889769032/" target="_blank" rel="alternate" title="Google Pluss"><i class="fa fa-google-plus-square"></i> <span>Twitter</span></a></li>
					<!--<li class="li-pinterest"><a href="#" target="_blank" rel="alternate" title="Pinterest"><i class="fa fa-pinterest"></i> <span>Pinterest</span></a></li>
					<li class="li-youtube"><a href="#" target="_blank" rel="alternate" title="YouTube"><i class="fa fa-youtube"></i> <span>YouTube</span></a></li>
					<li class="li-instagram"><a href="#" target="_blank" rel="alternate" title="Instagram"><i class="fa fa-instagram"></i> <span>Instagram</span></a></li>-->
					<li class="li-rss"><a href="http://miftyisbored.com/feed" target="_blank" rel="alternate" title="Feed"><i class="fa fa-rss"></i> <span>Feed</span></a></li>
                </ul>
            </div><!-- #footer-social -->
                        
            
            

                        
            <p class="copyright">All rights reserved. <a href="http://miftyisbored.com/" >Mifty Yusuf</a></p>
            
        </div><!-- .container -->    
    </div><!-- #footer-bottom --> 
</footer><!-- #wi-footer -->

</div><!-- #wi-wrapper -->

<div class="clearfix"></div>
</div><!-- #wi-all -->

    <div id="backtotop" class="backtotop">
        <span class="go">Go to</span>
        <span class="top">Top</span>
    </div><!-- #backtotop -->

<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/jquery/jquery.js?ver=1.12.3'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/jquery/jquery-migrate.min.js?ver=1.4.0'></script>

<script type='text/javascript' src='http://miftyisbored.com/wp-content/plugins/akismet/_inc/form.js?ver=3.1.11'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shCore.js?ver=3.0.9b'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shBrushPhp.js?ver=3.0.9b'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shBrushSql.js?ver=3.0.9b'></script>
<script type='text/javascript'>
	(function(){
		var corecss = document.createElement('link');
		var themecss = document.createElement('link');
		var corecssurl = "http://miftyisbored.com/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/styles/shCore.css?ver=3.0.9b";
		if ( corecss.setAttribute ) {
				corecss.setAttribute( "rel", "stylesheet" );
				corecss.setAttribute( "type", "text/css" );
				corecss.setAttribute( "href", corecssurl );
		} else {
				corecss.rel = "stylesheet";
				corecss.href = corecssurl;
		}
		document.getElementsByTagName("head")[0].insertBefore( corecss, document.getElementById("syntaxhighlighteranchor") );
		var themecssurl = "http://miftyisbored.com/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/styles/shThemeDefault.css?ver=3.0.9b";
		if ( themecss.setAttribute ) {
				themecss.setAttribute( "rel", "stylesheet" );
				themecss.setAttribute( "type", "text/css" );
				themecss.setAttribute( "href", themecssurl );
		} else {
				themecss.rel = "stylesheet";
				themecss.href = themecssurl;
		}
		//document.getElementById("syntaxhighlighteranchor").appendChild(themecss);
		document.getElementsByTagName("head")[0].insertBefore( themecss, document.getElementById("syntaxhighlighteranchor") );
	})();
	SyntaxHighlighter.config.strings.expandSource = '+ expand source';
	SyntaxHighlighter.config.strings.help = '?';
	SyntaxHighlighter.config.strings.alert = 'SyntaxHighlighter\n\n';
	SyntaxHighlighter.config.strings.noBrush = 'Can\'t find brush for: ';
	SyntaxHighlighter.config.strings.brushNotHtmlScript = 'Brush wasn\'t configured for html-script option: ';
	SyntaxHighlighter.defaults['pad-line-numbers'] = false;
	SyntaxHighlighter.defaults['toolbar'] = false;
	SyntaxHighlighter.all();
</script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/miftyisbored.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.4.2'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-includes/js/wp-embed.min.js?ver=4.5.2'></script>

<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/jquery.easing.1.3.js?ver=1.3'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/jquery.inview.min.js?ver=1.0'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/jquery.retina.min.js?ver=1.0'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/jquery.fitvids.js?ver=1.0'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/matchMedia.js?ver=2012'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/jquery.colorbox-min.js?ver=1.6'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/imagesloaded.pkgd.min.js?ver=3.1.8'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/masonry.pkgd.min.js?ver=3.2.2'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/jquery.flexslider-min.js?ver=2.4'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/slick.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/theia-sticky-sidebar.js?ver=1.3.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var WITHEMES = {"l10n":{"prev":"Previous","next":"Next"},"enable_sticky_sidebar":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://miftyisbored.com/wp-content/themes/MiB_V2/js/main.js?ver=1.0'></script>


</body>
</html>

