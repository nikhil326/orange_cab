<?php
session_start();
include_once 'config.php';
//echo $_SESSION['customer_id'];
if(isset($_POST['submit'])){
		$_SESSION['source'] = $_POST['source'];
		$_SESSION['destination'] = $_POST['destination'];
		$_SESSION['date'] = $_POST['date'];
		$_SESSION['time'] = $_POST['time'];
		$_SESSION['type'] = $_POST['type'];
		echo ("<script language='JavaScript'>
												 window.location.href='login.php';
												 
											   </script>");  
		exit();
	
}
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://crunchpress.com/demo/taxigo/xmlrpc.php">
<title>TaxiGo &#8211; Cabs for you</title>
<link rel="alternate" type="application/rss+xml" title="TaxiGo &raquo; Feed" href="http://crunchpress.com/demo/taxigo/?feed=rss2"/>
<link rel="alternate" type="application/rss+xml" title="TaxiGo &raquo; Comments Feed" href="http://crunchpress.com/demo/taxigo/?feed=comments-rss2"/>
<link rel="alternate" type="application/rss+xml" title="TaxiGo &raquo; Home Comments Feed" href="http://crunchpress.com/demo/taxigo/?feed=rss2&#038;page_id=2"/>
<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/crunchpress.com\/demo\/taxigo\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.9"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-0.1em!important;background:none!important;padding:0!important;}</style>
<link rel='stylesheet' id='contact-form-7-css' href='css/styles.css?ver=4.4.2' type='text/css' media='all'/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' id='default-style-css' href='css/style.css?ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='icomoon-css' href='css/icomoon.css?ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='cp-bootstrap-css' href='css/bootstrap.css?ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='cp-wp-cp_default-css' href='css/cp_widgets.css?ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='cp-responsive-css-css' href='css/responsive.css?ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='cp-svg-icon-css-css' href='css/style.css?ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='cp-header-css' href='css/header.css?ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='cp-fontAW-css' href='css/font-awesome.css?ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='cp-bx-slider-css' href='css/jquery.bxslider.css?ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='googleFonts-css' href='http://fonts.googleapis.com/css?family=Exo+2%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=latin%2Ccyrillic%2Clatin-ext&#038;ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='googleFonts-heading-css' href='http://fonts.googleapis.com/css?family=Exo+2%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=latin%2Ccyrillic%2Clatin-ext&#038;ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='menu-googleFonts-heading-css' href='http://fonts.googleapis.com/css?family=Exo+2%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=latin%2Ccyrillic%2Clatin-ext&#038;ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='owl-css-css' href='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/css/owl.carousel.css?ver=4.5.9' type='text/css' media='all'/>
<link rel='stylesheet' id='js_composer_front-css' href='http://crunchpress.com/demo/taxigo/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=4.12' type='text/css' media='all'/>
<link rel='stylesheet' id='jquery-ui-smoothness-css' href='http://crunchpress.com/demo/taxigo/wp-content/plugins/contact-form-7/includes/js/jquery-ui/themes/smoothness/jquery-ui.min.css?ver=1.10.3' type='text/css' media='screen'/>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ajax_login_object = {"ajaxurl":"http:\/\/crunchpress.com\/demo\/taxigo\/wp-admin\/admin-ajax.php","redirecturl":"http:\/\/crunchpress.com\/demo\/taxigo\/","loadingmessage":"Sending user info, please wait..."};
/* ]]> */
</script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/ajax-login-script.js?ver=4.5.9'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/html5shive.js?ver=1.5.1'></script>
<![endif]-->
<link rel='https://api.w.org/' href='http://crunchpress.com/demo/taxigo/?rest_route=/'/>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://crunchpress.com/demo/taxigo/xmlrpc.php?rsd"/>
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://crunchpress.com/demo/taxigo/wp-includes/wlwmanifest.xml"/>
<meta name="generator" content="WordPress 4.5.9"/>
<link rel="canonical" href="http://crunchpress.com/demo/taxigo/"/>
<link rel='shortlink' href='http://crunchpress.com/demo/taxigo/'/>
<link rel="alternate" type="application/json+oembed" href="http://crunchpress.com/demo/taxigo/?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=http%3A%2F%2Fcrunchpress.com%2Fdemo%2Ftaxigo%2F"/>
<link rel="alternate" type="text/xml+oembed" href="http://crunchpress.com/demo/taxigo/?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=http%3A%2F%2Fcrunchpress.com%2Fdemo%2Ftaxigo%2F&#038;format=xml"/>
<script type="text/javascript">
		var ajaxurl = 'http://crunchpress.com/demo/taxigo/wp-admin/admin-ajax.php';
		</script>
<style type="text/css">h1{font-size:60px!important;}h2{font-size:48px!important;}h3{font-size:36px!important;}h4{font-size:20px!important;}h5{font-size:20px!important;}h6{font-size:15px!important;}body{font-size:14px!important;}.classes-page .skill-inner .label,body,.comments-list li .text p,.header-4-address strong.info,.header-4-address a.email,strong.copy,.widget-box-inner p,.blog-post-box .text p,.box-1 p,.box-1 .textwidget,.get-touch-form input,.get-touch-form strong.title,.footer-copyright strong.copy,#inner-banner p,.welcome-text-box p,.about-me-text p,.about-me-text blockquote q,.team-box .text p,.accordition-box .accordion-inner p,.facts-content-box p,.our-detail-box p,.our-detail-box ul li,.widget_em_widget ul li,.sidebar-recent-post ul li p,blockquote p,blockquote q,.author-box .text p,.contact-page address ul li strong.title,.contact-page address ul li strong.ph,.contact-page address ul li strong.mob,.contact-page address ul li a.email,a.comment-reply-link,.timeline-project-box>.text p,.comments .text p,.event-row .text p,.project-detail p,.news-box .text p,.error-page p,.cp-columns p,.cp-list-style ul li,.customization-options ul li,.cp-accordion .accordion-inner strong,.list-box ul li,.list-box2 ul li,.list-box3 ul li,.tab-content-area p,.blockquote-1 q,.blockquote-2 q,.map h3,.even-box .caption p,.header-4-address strong.info,.header-4-address a.email,strong.copy,.widget-box-inner p,.paging .pagination li a:hover,.paging .pagination li span:hover,.paging .pagination li.active span,.paging .pagination li.active a{font-family:"Exo 2";}h1,h2,h3,h4,h5,h6,.head-topbar .left ul li strong.number,.head-topbar .left ul li a,.navigation-area a.btn-donate-2,.footer-menu li a,.footer-menu2 li a,#nav-2 li a,#nav-2 li ul li a,.navigation-area a.btn-donate3,.top-search-input,a.btn-donate5,.navigation-area a.btn-donate,.top-search-input,#nav li a,#nav li ul li a,.cp-banner .caption h1,.cp-banner .caption h2,.cp-banner .caption strong.title,.cp-banner .caption a.view,.widget-box-inner h2,.entry-header>h1,.h-style,.latest-news-box h3,.css3accordion .content .top a,.css3accordion .content .top strong.mnt,.css3accordion .content .top a.comment,.css3accordion .content strong.title,.css3accordion .content p,.css3accordion .content a.readmore,.upcoming-heading h3,.upcoming-box .caption strong.title,.upcoming-box .caption strong.mnt,.upcoming-events-box a.btn-view,.countdown_holding span,.countdown_amount,.countdown_period,.our-project a.btn-view,.our-project h3,.portfolio-filter li a,.gallery-box .caption strong.title,.timeline-box h3,.timeline-head strong.mnt,.timeline-frame-outer .caption h4,.timeline-frame-outer .caption p,.blog-post h3,.blog-post-box .caption strong.date,.blog-post-box .caption strong.comment,.blog-post-box .text strong.title,.blog-post-box .text h4,.blog-post-box .text a.readmore,.blog-post-share strong.title1,.name-box strong.name,.name-box-inner strong,.text-row strong.title,.text-row strong.time,.twitter-info-box ul li strong.number,.twitter-info-box ul li a.tweet,.box-1 h4,.box-1 a.btn-readmore,.box-1 .text strong.title,.box-1 .text strong.mnt,#inner-banner h1,.welcome-text-box h2,.about-me-left .text ul li h3,.about-me-left .text ul li strong.title,.about-me-socila strong.title,.about-me-text h3,.team-member-box h3,.team-box .text h4,.team-box .text h4 a,.team-box .text strong.title,.heading h3,.our-facts-box strong.number,.our-facts-box a.detail,.our-detail-box h4,.accordition-box .accordion-heading .accordion-toggle strong,.facts-tab-box .nav-tabs>li>a,.nav-pills>li>a,.blog-box-1 strong.title,.bottom-row .left span,.bottom-row .left a,.bottom-row .left ul li a,.bottom-row .right strong.title,.blog-box-1 .text h2,.blog-box-1 .text a.readmore,.pagination-all.pagination ul>li>a,.pagination ul>li>span,.sidebar-input,.sidebar-member a.member-text,.sidebar-recent-post h3,.sidebar-recent-post ul li:hover .text strong.title,.widget_em_widget ul li a,.sidebar-recent-post ul li .text strong.title,.sidebar-recent-post ul li a.mnt,.sidebar-recent-post ul li a.readmore,.list-area ul li a,.archive-box ul li a,.tagcloud a,.share-socila strong.title,.author-box .text strong.title,.contact-me-row strong.title,.blog-detail-form h3,.form-area label,.detail-input,.detail-textarea,.detail-btn-sumbit,.post-password-form input[type="submit"],#searchsubmit,.detail-btn-sumbit2,a.comment-reply-link,.donate-page h2,.donate-form ul li a,.donate-form-area ul li label,.donate-input,.donate-btn-submit,.timeline-project-box .holder .heading-area,.timeline-project-box .blog-box-1>.text h2,.comment-box h3,.comments .text strong.title,.comments .text a.date,.comments .text a.reply,.timer-area ul li a,.event-detail-timer .countdown-amount,.countdown-period,.contact-me-row2 strong.title,.contact-me-row2 ul li a,.related-event-box h3,.related-box .text strong.title,.related-box .text a.date,.member-input,.member-input-2,.member-input-3,.member-form label,.check-box strong.title,.member-btn-submit,.event-heading a,.event-row .text h2,.detail-row li a,.map-row a.location,.project-detail h2,.project-detail-list li .even,.project-detail-list li .odd,.other-project h3,.news-box .text-top-row span,.news-box .text-top-row a,.news-box .text-top-row a,.news-box .text h2,.news-box .text a.readmore,.slide-out-div h3,.error-page h2,.cp-columns h2,.cp-columns strong.title,.customization-options h2,.cp-highlighter h2,.cp-accordion .accordion-heading .accordion-toggle strong,.cp-testimonials h2,.frame-box strong.name,.frame-box strong.title,.testimonial-box-1 blockquote q,.single-testimonial blockquote q,.frame-box2 strong.name,.frame-box2 strong.title,.button-box a,.typography h1,h2.cp-heading-full,.typography h2,h3.cp-heading-full,.typography h3,h4.cp-heading-full,.typography h4,h5.cp-heading-full,.typography h5,h6.cp-heading-full,.typography h6,.tabs-box .nav-tabs>li>a,.nav-pills>li>a,#wp-calendar caption,.even-box .caption h2,.timeline-round strong.year,#search-text input[type="text"],.sidebar-recent-post select,.content_section .review-final-score h3,.content_section .review-final-score h4,#cp_header7 .navigation-row .navbar-default li a,.thumb-style .caption h2,.thumb-style .caption strong,.services-box .cp_strong,.food-title h2,.food-title strong,.cp_special-menu .text h2,.cp_special-menu .btn-light,.cp_our-menu .nav-tabs>li>a,.food-title h2,.chef-info .text strong.title,.event-carousel-holder .event-info .cp_strong,.event-carousel-holder .countdown-amount,.our-facts-box strong,.cp_blog-section .blog-list .cp_strong,.cp_blog-section .more-info,.cp-few-words .cp-heading-full,.footer-top h2{font-family:"Exo 2";}#mega_main_menu.main-menu>.menu_holder>.menu_inner>.nav_logo>.mobile_toggle>.mobile_button,#mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li>.item_link,#mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li>.item_link .link_text,#mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li.nav_search_box *,#mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li .post_details>.post_title,#mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li .post_details>.post_title>.item_link,.navigation ul,.menu ul li>a{font-family:"Exo 2 !important";}</style><style id="stylesheet">::selection{background:#d82a2b;color:#fff;}::-moz-selection{background:#d82a2b;color:#fff;}a.cp-btn-style1,a.cp-btn-style2:before,.cp-driver-box .cp-caption:before,.cp-why-choose-listed .cp-box:hover,.cp-why-choose-listed .cp-box.active,.cp-advertising-box .thumb .num,.cp-accordian-item .panel-heading .panel-title>a:after,.cp-booking-form-outer .cp-btn-style1,#cp-slide-search form button,.cp-offers-inner .cp-text:before,.cp-offers-inner:hover .icon-holder,.cp-pagination-row .pagination li a:hover,.pagination li a:hover,.cp-pagination-row .pagination li span:hover,.pagination li span:hover,.cp-pagination-row .pagination li.active span,.pagination li.active span,.cp-pagination-row .pagination li.active a,.pagination li.active a,.cp-faq-holder .nav-tabs>li a,.cp-faq-tabs-holder .nav-tabs>li a,.cp-reservation-box .submit,.cp-get-in-outer,.cp-form-box .inner-holder .btn-submit,.cp-form-box.cp-form-box2 .inner-holder .btn-submit,.cp-ft-form-box form button:hover,.widget_search form button{background-color:#d82a2b;}.top-listed>li:hover>a,.top-listed li a:hover,.cp-nav-holder .nav-right-listed>li:hover,.cp-nav-holder .nav-right-listed>li:hover>a,.cp-nav-holder .navbar-nav>li:hover>a,.cp-nav-holder .navbar-nav li li a:hover,.cp-social-links li:hover a,.cp-social-links li:hover,.cp-ft-form-box h4 a:hover,.remember-pw,.cp-footer-nav li:hover a,.cp-taxi-holder .cp-text h3,.cp-app-text strong,.cp-why-choose-listed .cp-box h3,.cp-read-more,.cp-testimonial-box .test-bottom p,.cp-read-more:before,.cp-testimonial-box>p a,.cp-accordian-item .panel-body .cp-text h4,.cp_side-navigation li a:hover,.cp-choose-list li:before,.cp-choose-list li:hover,.cp-inner-banner-holder .breadcrumb>li:hover,.cp-inner-banner-holder .breadcrumb>li:hover a,.cp-offers-inner .cp-text h3,.widget-recent-post>ul>li,.widget-recent-post>ul>li>a,.cp-popular-holder .cp-text h5,.cp-faq-holder .cp-listed>li a,.cp-faq-holder .nav-tabs>li.active>a,.cp-faq-holder .nav-tabs>li.active>a:hover,.cp-faq-holder .nav-tabs>li.active>a:focus,.cp-faq-tabs-holder .nav-tabs>li.active>a,.cp-faq-tabs-holder .nav-tabs>li.active>a:hover,.cp-faq-tabs-holder .nav-tabs>li.active>a:focus,.cp-clients-box .cp-clients-listed li,.cp-clients-box .cp-clients-listed li a,.cp-blog-item .cp-meta-listed li,.cp-blog-item .cp-meta-listed li a,.cp-blog-item .cp-meta-listed li+li:before,.cp-author-info-holder .cp-text h4 a,.cp-author-info-holder .cp-meta-listed li,.cp-gallery-box .cp-caption h3,.cp-reservation-box .asked,.cp-reservation-box .lost-pw,.cp-location-box h3,.cp-topbar .tp-num,.widget_categories ul li a,.calendar_wrap table td a,.widget_archive ul li a,.widget_pages ul li:hover a,.widget_meta ul li:hover a{color:#d82a2b;}.cp-faq-holder .nav-tabs>li a,.cp-clients-box .cp-clients-listed,.cp-advertising-box .thumb:hover{border-color:#d82a2b;} {
					border-right-color:#d82a2b; 
				}
				 {
					border-top-color:#d82a2b;
				}
				 {
					border-color: transparent transparent transparent #d82a2b;
				}.cp_banner .banner-title,.cp-why-choose-text h2 span,.cp-why-choose-listed .cp-box .readmore:hover,.cp-parallax-box h3 span,.cp-testimonial-inner .cp-text strong,.cp-testimonial-inner .cp-text span

,.cp-tabs-holder .nav-tabs > li.active > a,.cp-tabs-holder .nav-tabs > li.active > a:hover,.cp-tabs-holder .nav-tabs > li.active > a:focus,.cp-inner-banner-holder .breadcrumb > li + li::before,.cp-inner-banner-holder .breadcrumb > li a

,.cp-inner-banner-holder .breadcrumb > li,.cp-inner-awwards-holder li span,.cp-accordian-item h3,.cp-faq-heading h3,.cp-faq-holder h3,.cp-clients-box .cp-clients-listed li:hover,.cp-reservation-box h3,.cp-contact-inner-holder h3,.cp-privacy-listed li:before

,.cp-reservation-box h2,.cp-reservation-box .inner-holder a
				 {
					color: #f7ad00;
				}a.cp-btn-style2,a.cp-btn-style1:before,#cp_banner-slider .owl-dots .owl-dot.active span,.cp-ft-form-box form button,.choose-btn:hover,.cp-testimonial-inner .cp-icon:before,#cp-testimonial-slider .owl-dots .owl-dot.active span,.cp-accordian-item .panel-heading .panel-title > a.collapsed:after,.cp-booking-form-outer .cp-btn-style1:hover

,.cp-clients-box .cp-clients-listed:before,.cp-form-box .inner-holder .btn-submit,.cp-form-box .inner-holder .btn-submit:hover

				 {
					background-color: #f7ad00;
				}.cp-testimonial-inner .cp-text span:before
				{
					border-bottom-color: #f7ad00;
				}.cp-nav-holder .navbar-nav li ul,#cp-testimonial-slider .owl-dots .owl-dot.active span
				{
					border-color: #f7ad00;
				}
				 {
					border-top-color:#d82a2b;
				}.copyright-row:before{
					border-bottom:12px solid #d82a2b;
				}
				
				{
					border-bottom-color:#d82a2b;
				}
				{
					background:#C0617D
				}
				{
					background:#d82a2b; 
				}.pattren_cp_footer {
					background-color:#fff;
					background-image: 
					radial-gradient(circle at 100% 150%,#d82a2b 24%,#d82a2b 25%,#d82a2b 28%,#d82a2b 29%,#d82a2b 36%,#d82a2b 36%,#d82a2b 40%, transparent 40%, transparent),
					radial-gradient(circle at 0    150%,#d82a2b 24%,#d82a2b 25%,#d82a2b 28%,#d82a2b 29%,#d82a2b 36%,#d82a2b 36%,#d82a2b 40%, transparent 40%, transparent),
					radial-gradient(circle at 50%  100%,#d82a2b 10%,#d82a2b 11%,#d82a2b 23%,#d82a2b 24%,#d82a2b 30%,#d82a2b 31%,#d82a2b 43%,#d82a2b 44%,#d82a2b 50%,#d82a2b 51%,#d82a2b 63%,#d82a2b 64%,#d82a2b 71%, transparent 71%, transparent),
					radial-gradient(circle at 100% 50%,#d82a2b 5%,#d82a2b 6%,#d82a2b 15%,#d82a2b 16%,#d82a2b 20%,#d82a2b 21%,#d82a2b 30%,#d82a2b 31%,#d82a2b 35%,#d82a2b 36%,#d82a2b 45%,#d82a2b 46%,#d82a2b 49%, transparent 50%, transparent),
					radial-gradient(circle at 0    50%,#d82a2b 5%,#d82a2b 6%,#d82a2b 15%,#d82a2b 16%,#d82a2b 20%,#d82a2b 21%,#d82a2b 30%,#d82a2b 31%,#d82a2b 35%,#d82a2b 36%,#d82a2b 45%,#d82a2b 46%,#d82a2b 49%, transparent 50%, transparent);
					background-size:30px 60px;
					height:25px;
				}.footer-copy {
					background:rgba(0,0,0,0.5);
				}.inner-titlebg {background: url(http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/images/inner-pagebg.jpg) no-repeat center center/cover}</style><meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://crunchpress.com/demo/taxigo/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="http://crunchpress.com/demo/taxigo/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]--><link rel="icon" href="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/cropped-taxi-icon-32x32.png" sizes="32x32" />
<link rel="icon" href="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/cropped-taxi-icon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/cropped-taxi-icon-180x180.png" />
<meta name="msapplication-TileImage" content="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/cropped-taxi-icon-270x270.png" />
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1459229892787{background-color: #ffffff !important;}.vc_custom_1460462365163{padding-top: 65px !important;}.vc_custom_1459252310084{padding-top: 55px !important;padding-bottom: 100px !important;background: #ffffff url(http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/why-choose-taxi-bg-img.jpg?id=482) !important;}.vc_custom_1459256445739{padding-top: 100px !important;}.vc_custom_1459256850164{padding-top: 55px !important;background-color: #000000 !important;}.vc_custom_1459320427117{padding-top: 65px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}.vc_custom_1460462400000{padding-top: 65px !important;}.vc_custom_1459333125101{padding-top: 65px !important;padding-bottom: 100px !important;background-color: #121212 !important;}.vc_custom_1459334138583{padding-top: 100px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>
<body class="home page page-id-2 page-template-default cp_full_width    taxigo wpb-js-composer js-comp-ver-4.12 vc_responsive">
	<!--Wrapper Start-->
		<div id="wrapper"> 
		<!--Header Start-->
    
     <header class="cp_header">
          
                <div id="cp-slide-menu" class="cp_side-navigation">
                	<div id="close"><a href="#"><i class="fa fa-close"></i></a></div>
											<ul id="menu-main-menu" class="navbar-nav"><li id="menu-item-192" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-192"><a href="http://crunchpress.com/demo/taxigo/">Home</a></li>
<li id="menu-item-193" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-193"><a href="http://crunchpress.com/demo/taxigo/?page_id=12">About</a></li>
<li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-194"><a href="http://crunchpress.com/demo/taxigo/?page_id=13">Online Offers</a></li>
<li id="menu-item-195" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-195"><a href="http://crunchpress.com/demo/taxigo/">FAQs</a>
<ul class="sub-menu">
	<li id="menu-item-196" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-196"><a href="http://crunchpress.com/demo/taxigo/?page_id=14">Faqs</a></li>
	<li id="menu-item-296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-296"><a href="http://crunchpress.com/demo/taxigo/?page_id=294">FAQs 2</a></li>
	<li id="menu-item-197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-197"><a href="http://crunchpress.com/demo/taxigo/?page_id=15">Faqs with Sidebar</a></li>
</ul>
</li>
<li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200"><a href="http://crunchpress.com/demo/taxigo/?page_id=23">View A Booking</a></li>
<li id="menu-item-201" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-201"><a href="http://crunchpress.com/demo/taxigo/">Blog</a>
<ul class="sub-menu">
	<li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="http://crunchpress.com/demo/taxigo/?page_id=24">Blog</a></li>
	<li id="menu-item-203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-203"><a href="http://crunchpress.com/demo/taxigo/?page_id=25">Blog with Sidebar</a></li>
	<li id="menu-item-204" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-204"><a href="http://crunchpress.com/demo/taxigo/?p=446">Blog Detail</a></li>
</ul>
</li>
<li id="menu-item-205" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-205"><a href="http://crunchpress.com/demo/taxigo/">Pages</a>
<ul class="sub-menu">
	<li id="menu-item-206" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-206"><a href="http://crunchpress.com/demo/taxigo/">Gallery</a>
	<ul class="sub-menu">
		<li id="menu-item-210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210"><a href="http://crunchpress.com/demo/taxigo/?page_id=26">Our Gallery</a></li>
		<li id="menu-item-207" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-207"><a href="http://crunchpress.com/demo/taxigo/?page_id=33">Gallery 2 col</a></li>
		<li id="menu-item-208" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-208"><a href="http://crunchpress.com/demo/taxigo/?page_id=34">Gallery 3 col</a></li>
		<li id="menu-item-209" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-209"><a href="http://crunchpress.com/demo/taxigo/?page_id=35">Gallery Full Width</a></li>
	</ul>
</li>
	<li id="menu-item-211" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-211"><a href="http://crunchpress.com/demo/taxigo/?page_id=36">Testimonials</a></li>
	<li id="menu-item-534" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-534"><a href="http://crunchpress.com/demo/taxigo/?page_id=528">Fleet</a></li>
	<li id="menu-item-547" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-547"><a href="http://crunchpress.com/demo/taxigo/?page_id=535">Drivers</a></li>
	<li id="menu-item-198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-198"><a href="http://crunchpress.com/demo/taxigo/?page_id=22">Privacy Policy</a></li>
	<li id="menu-item-199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-199"><a href="http://crunchpress.com/demo/taxigo/?page_id=16">Terms &#038; Conditions</a></li>
</ul>
</li>
<li id="menu-item-212" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-212"><a href="http://crunchpress.com/demo/taxigo/">Contact Us</a>
<ul class="sub-menu">
	<li id="menu-item-213" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213"><a href="http://crunchpress.com/demo/taxigo/?page_id=37">Contact us</a></li>
	<li id="menu-item-214" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-214"><a href="http://crunchpress.com/demo/taxigo/?page_id=44">Contact us 2</a></li>
</ul>
</li>
</ul>                
					                
                </div>
                <div id="cp-slide-search" class="cp_side-search">
                		<form method="get" class="searchform" action="http://crunchpress.com/demo/taxigo//">
	<input type="text" class="form-control" placeholder="Type Keyword Here" value="" name="s"  autocomplete="off" />
    
    <button type="submit"><i class="fa fa-search"></i></button>
</form>                </div>
                <!--Navigation Start-->
                <div class="cp-navigation-row">
                    <div class="container">
                        <div class="row">
                             <div class="col-md-12">
                                <!--Top Bar Start-->
                                <div class="cp-topbar">
                                    <ul class="top-listed">
                                    
								                                                                                                  
                                    </ul>
							<span class="tp-num">Call Us. +00 123 456 789</span>                                </div><!--Top Bar Start-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-6">
                                <!--Logo Start-->
                                <strong class="cp-logo">
                                    							<a class="logo" href="http://crunchpress.com/demo/taxigo/">
					<img class="logo_img" width="190" height="50" src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/logo-heder.png" alt="TaxiGo">
				</a>
				                                </strong><!--Logo End-->
                            </div>
                            <div class="col-md-9 col-sm-12 col-xs-6">
                                <!--Nav Holder Start-->
					                                <div class="cp-nav-holder">
												<?php include('nav.php');?>
                                </div><!--Nav Holder End-->
                            </div>
                        </div>
                    </div>
                </div><!--Navigation End-->
            </header>       
            
    <!--Header End-->
                  
	<div class="cp_banner"><div class="owl-carousel" id="cp_banner-slider">
								<div class="item">
									<img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/banner-img-01.jpg" alt="">
									<!--Banner Caption Start-->
									<div class="cp-banner-caption">
										<div class="container">
											<div class="banner-inner-holder">
												<strong class="banner-title">Book a Car</strong>
												<h2>A RELIABLE WAY TO TRAVEL</h2>
												<a href="http://crunchpress.com/demo/taxigo/" class="cp-btn-style1">Search Now</a>
											</div>
										</div>
									</div><!--Banner Caption End-->
								 </div>
								
								<div class="item">
									<img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/banner-img-02.jpg" alt="">
									<!--Banner Caption Start-->
									<div class="cp-banner-caption">
										<div class="container">
											<div class="banner-inner-holder">
												<strong class="banner-title">Save Time</strong>
												<h2>Save time when you arrive!</h2>
												<a href="http://crunchpress.com/demo/taxigo/" class="cp-btn-style1">Search Now</a>
											</div>
										</div>
									</div><!--Banner Caption End-->
								 </div>
								
								<div class="item">
									<img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/banner-img-03.jpg" alt="">
									<!--Banner Caption Start-->
									<div class="cp-banner-caption">
										<div class="container">
											<div class="banner-inner-holder">
												<strong class="banner-title">Get Startd!</strong>
												<h2>Rent for a month. Save $50.</h2>
												<a href="http://crunchpress.com/demo/taxigo/" class="cp-btn-style1">Search Now</a>
											</div>
										</div>
									</div><!--Banner Caption End-->
								 </div>
								</div></div>    <!-- BANNER/BREADCRUMS START -->
				<!-- BANNER/BREADCRUMS END --> 
                        													
        <!--CONTANT SECTION START-->
	<div id="cp-main-content">

			    
			<!--MAIN CONTANT ARTICLE START-->
			<div class="main-content margin-top-bottom-cp">
            					<div class="page_content container">
									<div id="block_content_first" class="col-md-12">
						<div class="container-res">
							<div class="">
										<div id="post-2" class="post-2 page type-page status-publish hentry">
			<div class="entry-content-cp  ">
				<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1459229892787 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cp-heading-style1"><h2>Book <span> Taxi Now</span></h2></div><div role="form" class="wpcf7" id="wpcf7-f478-p2-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="" method="post" class="wpcf7-form" >
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="478" />
<input type="hidden" name="_wpcf7_version" value="4.4.2" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f478-p2-o1" />
<input type="hidden" name="_wpnonce" value="4ca0887fa1" />
</div>
<section class="cp-booking-section pd-b80">
<div class="cp-booking-form-outer">
<div class="row">
<div class="col-md-4 col-sm-12">
		<div class="booking-inner-holder">
													<label>Pick-up Location</label><br />
													<span class="wpcf7-form-control-wrap menu-986"><input required="required" type="text" name="source" value=""  class="wpcf7-form-control wpcf7-text" aria-invalid="false" style="min-width: 260px; height: 40px; line-height: 40px"></span>
												</div>
												<div class="booking-inner-holder">
													<label>Drop-up Location</label><br />
													<span class="wpcf7-form-control-wrap menu-986"><input required="required" type="text" name="destination" value=""  class="wpcf7-form-control wpcf7-text" aria-invalid="false" style="min-width: 260px; height: 40px; line-height: 40px"></span>
												</div>
		<div class="booking-inner-holder">
													<label>Pick-up Date</label>
		<div class="booking-date">
		<div class="inner">
															<span class="wpcf7-form-control-wrap text-571"><input required="required" type="text" name="date" value="" size="" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="31" /></span><br />
															<span>Date</span>
														</div>


		<div class="inner inner2">
															<span>at</span>
														</div>
													<div class="inner">
														   <span class="wpcf7-form-control-wrap text-571">
																<input required="required" type="time" name="time" value="" size="" class="wpcf7-form-control wpcf7-text" aria-invalid="false" style="width: 90px;
			min-width: 90px;
			height: 39px;" />
															</span><br />
															<span>Time</span>
													</div>
		<div class="inner">
															
														   
														</div>
		<div class="inner inner2">
															<i class="fa fa-calendar-check-o"></i>
														</div></div></div>

</div>
<div class="col-md-8 col-sm-12">
				<div class="col-md-4">
							<!--<div class="booking-inner-holder">
																			<label>Drop-up Location</label><br />
																			<span class="wpcf7-form-control-wrap menu-414"><select name="menu-414" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="Uk">Uk</option><option value="USA">USA</option><option value="UAE">UAE</option><option value="Canada">Canada</option><option value="Denmark">Denmark</option><option value="Spain">Spain</option></select></span>
																		</div>
							<div class="booking-inner-holder">
																			<label>Drop-off Date </label>
							<div class="booking-date">
							<div class="inner">
																					<span class="wpcf7-form-control-wrap text-473"><input type="text" name="text-473" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="31" /></span><br />
																					<span>Day</span>
																				</div>
							<div class="inner">
																					<span class="wpcf7-form-control-wrap text-709"><input type="text" name="text-709" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="10" /></span><br />
																					<span>Month</span>
																				</div>
							<div class="inner">
																					<span class="wpcf7-form-control-wrap text-430"><input type="text" name="text-430" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="2016" /></span><br />
																					<span>Year</span>
																				</div>
							<div class="inner inner2">
																					<span>at</span>
																				</div>
							<div class="inner">
																				   <span class="wpcf7-form-control-wrap menu-620"><select name="menu-620" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="20">20</option><option value="19">19</option><option value="18">18</option><option value="17">17</option><option value="16">16</option></select></span><br />
																					<span>Hours</span>
																				</div>
							<div class="inner">
																					<span class="wpcf7-form-control-wrap menu-542"><select name="menu-542" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option></select></span><br />
																					<span>Minutas</span>
																				</div>
							<div class="inner inner2">
																					<i class="fa fa-calendar-check-o"></i>
																				</div></div></div>
							<div class="booking-inner-holder booking-inner-holder2">
																			<label>Drivers age:</label><br />
																			<span class="wpcf7-form-control-wrap menu-670"><select name="menu-670" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="20">20</option><option value="22">22</option><option value="25">25</option><option value="30">30</option><option value="34">34</option><option value="37">37</option></select></span>
																		</div>-->
																		
																		<div class="booking-check-box">
                                                <span>Car Type</span>
												<?php $result = mysqli_query($connect,"SELECT * FROM tbl_category");
												$path = "admin/";
														while($row = mysqli_fetch_assoc($result)){
														//print_r($row);
												?>
												<span class="wpcf7-form-control-wrap checkbox-238">
													<span class="wpcf7-form-control wpcf7-checkbox">
														<span class="wpcf7-list-item first last">
															<label>
																<span class="wpcf7-list-item-label"><img width="40" height="40" src="<?php echo $path; ?><?php echo $row['cat_img']; ?>" alt=""/></span>&nbsp;<span class="wpcf7-list-item-label"><?php echo $row['cat_name']; ?></span>&nbsp;<input type="radio" name="type" required="required" value="<?php echo $row['cat_id']; ?>" />
															</label>
														</span>
													</span>
												</span>
														<?php } ?>
                                            </div>
<p>                                            <input type="submit" value="Book Now" class="wpcf7-form-control wpcf7-submit cp-btn-style1" name="submit" />
                                        </p>
				</div>
<div class="col-md-3">
<!--<div class="booking-check-box">
                                                <span>Car Type</span><span class="wpcf7-form-control-wrap checkbox-238"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><span class="wpcf7-list-item-label">Convertible</span>&nbsp;<input type="checkbox" name="checkbox-238[]" value="Convertible" /></label></span></span></span><span class="wpcf7-form-control-wrap checkbox-234"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><span class="wpcf7-list-item-label">Luxury</span>&nbsp;<input type="checkbox" name="checkbox-234[]" value="Luxury" /></label></span></span></span><span class="wpcf7-form-control-wrap checkbox-132"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><span class="wpcf7-list-item-label">Cars</span>&nbsp;<input type="checkbox" name="checkbox-132[]" value="Cars" /></label></span></span></span><span class="wpcf7-form-control-wrap checkbox-802"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><span class="wpcf7-list-item-label">Vans</span>&nbsp;<input type="checkbox" name="checkbox-802[]" value="Vans" /></label></span></span></span><span class="wpcf7-form-control-wrap checkbox-740"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><span class="wpcf7-list-item-label">SUVs</span>&nbsp;<input type="checkbox" name="checkbox-740[]" value="SUVs" /></label></span></span></span>
                                            </div>
<p>                                            <input type="submit" value="Book Now" class="wpcf7-form-control wpcf7-submit cp-btn-style1" />
                                        </p>-->
										<div class="booking-check-box">
											<img src="img/taxigo2.gif" alt="" width="530" height="530" valign="10px"/>
										</div>
										</div>
</div>
</div>
</div>
<p><!--Booking Form Outer End--></section>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1460462365163"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cp-heading-style1 "><h2>Choose your <span> Taxi</span></h2></div><section class="cp-taxi-section"><div class=""><div class="cp-tabs-holder"><ul class="nav nav-tabs" role="tablist"><li class="active"><a href="#tab-01" aria-controls="tab-01" role="tab" data-toggle="tab">Town Taxi d</a></li><li><a href="#tab-02" aria-controls="tab-02" role="tab" data-toggle="tab">Hybrid Taxi d</a></li><li><a href="#tab-03" aria-controls="tab-03" role="tab" data-toggle="tab">Limousine Taxi d</a></li><li><a href="#tab-04" aria-controls="tab-04" role="tab" data-toggle="tab">SUV Taxi d</a></li></ul><div class="tab-content"><div role="tabpanel" class="tab-pane fade in active" id="tab-01"><div class="row"><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-02-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Cci-Fiat 500</h3><ul class="cp-meta-listed"><li>Type: <span>Fiat</span></li><li>Seating capacity: <span>2</span></li><li>Rent: <strong>$12 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-01-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Toyotie</h3><ul class="cp-meta-listed"><li>Type: <span>sports</span></li><li>Seating capacity: <span>4</span></li><li>Rent: <strong>$14 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-03-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Cci-Fiat 500</h3><ul class="cp-meta-listed"><li>Type: <span>Fiat</span></li><li>Seating capacity: <span>2</span></li><li>Rent: <strong>$12 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div></div></div><div role="tabpanel" class="tab-pane fade in" id="tab-02"><div class="row"><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-01-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Toyotie</h3><ul class="cp-meta-listed"><li>Type: <span>sports</span></li><li>Seating capacity: <span>4</span></li><li>Rent: <strong>$14 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-02-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Cci-Fiat 500</h3><ul class="cp-meta-listed"><li>Type: <span>Fiat</span></li><li>Seating capacity: <span>2</span></li><li>Rent: <strong>$12 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-03-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Toyotie</h3><ul class="cp-meta-listed"><li>Type: <span>sports</span></li><li>Seating capacity: <span>4</span></li><li>Rent: <strong>$14 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div></div></div><div role="tabpanel" class="tab-pane fade in" id="tab-03"><div class="row"><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-03-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Cci-Fiat 500</h3><ul class="cp-meta-listed"><li>Type: <span>Fiat</span></li><li>Seating capacity: <span>2</span></li><li>Rent: <strong>$12 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-02-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Toyotie</h3><ul class="cp-meta-listed"><li>Type: <span>sports</span></li><li>Seating capacity: <span>4</span></li><li>Rent: <strong>$14 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-01-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Cci-Fiat 500</h3><ul class="cp-meta-listed"><li>Type: <span>Fiat</span></li><li>Seating capacity: <span>2</span></li><li>Rent: <strong>$12 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div></div></div><div role="tabpanel" class="tab-pane fade in" id="tab-04"><div class="row"><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-01-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Toyotie</h3><ul class="cp-meta-listed"><li>Type: <span>sports</span></li><li>Seating capacity: <span>4</span></li><li>Rent: <strong>$14 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-02-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Cci-Fiat 500</h3><ul class="cp-meta-listed"><li>Type: <span>Fiat</span></li><li>Seating capacity: <span>2</span></li><li>Rent: <strong>$12 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div><div class="col-md-4 col-sm-6"><article class="cp-taxi-holder"><figure class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/taxi-img-03-360x230.jpg" alt=""></figure><div class="cp-text"><h3>Toyotie</h3><ul class="cp-meta-listed"><li>Type: <span>sports</span></li><li>Seating capacity: <span>4</span></li><li>Rent: <strong>$14 /km</strong></li></ul><a href="http://crunchpress.com/demo/taxigo/?page_id=23" class="cp-btn-style1">Book Now</a></div></article></div></div></div></div></div></div></section></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1459252310084 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><section class="cp-why-choose-section "><div class="container"><div class="cp-why-choose-text"><a class="choose-btn">Book your cab with confidence</a><h3>Why Choose </h3><h2> <span>TAXIGO</span>  for taxi hire </h2><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#8217;t look even slightly or randomised words which don&#8217;t believable.</p>
<a href="http://crunchpress.com/demo/taxigo/" class="cp-btn-style1">Book Now</a></div></div></section><div class="vc_row wpb_row vc_inner vc_row-fluid whychoose"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><ul class="cp-why-choose-listed "><li><div class="cp-box"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/why-choose-img-01.png" alt=""><h3>Inclusive Rates</h3><span class="icon-cash19 icomoon"></span><p>We offers Fully Inclusive car hire rates.There are no additional insurances that you need to purchase locally.</p>
<a href="http://localhost/taxigo/?page_id=12 " class="readmore"></a></div></li></ul>
							<script>
							jQuery(document).ready(function($) {
								var jj = jQuery( "ul.cp-why-choose-listed" ).closest( "div.vc_column-inner " );
								jQuery( jj ).closest( "div" ).css( "padding", "0" );
							});
							</script>
							</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><ul class="cp-why-choose-listed "><li><div class="cp-box"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/why-choose-img-03.png" alt=""><h3>Easy Searching</h3><span class="icon-transport1105 icomoon"></span><p>We offers Fully Inclusive car hire rates.There are no additional insurances that you need to purchase locally.</p>
<a href="http://localhost/taxigo/?page_id=12 " class="readmore"></a></div></li></ul>
							<script>
							jQuery(document).ready(function($) {
								var jj = jQuery( "ul.cp-why-choose-listed" ).closest( "div.vc_column-inner " );
								jQuery( jj ).closest( "div" ).css( "padding", "0" );
							});
							</script>
							</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><ul class="cp-why-choose-listed "><li><div class="cp-box"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/why-choose-img-02.png" alt=""><h3>Home Pickup</h3><span class="icon-house158 icomoon"></span><p>We offers Fully Inclusive car hire rates.There are no additional insurances that you need to purchase locally.</p>
<a href="http://localhost/taxigo/?page_id=12 " class="readmore"></a></div></li></ul>
							<script>
							jQuery(document).ready(function($) {
								var jj = jQuery( "ul.cp-why-choose-listed" ).closest( "div.vc_column-inner " );
								jQuery( jj ).closest( "div" ).css( "padding", "0" );
							});
							</script>
							</div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><section class="cp-parallax-section"><div id="cp-inner-map" style="background : rgba(0, 0, 0, 0) url(http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/07/taxi.png) repeat scroll 0 0"></div><div class="container"><div class="row"><div class="col-md-8 col-sm-12 col-md-offset-2"><div class="cp-parallax-box"><h2>Not sure where the best</h2><h3>Place to collect your <span> CAR RENTAL</span>  is?</h3><div class="cp-location-box"><h3>Try Our location finder</h3><ul class="cp-location-listed"><li>Find rental loaction on map</li><li>Check ‘One way rental’ Fees</li><li>Plan a route</li><a href="http://crunchpress.com/demo/taxigo/" class="cp-btn-style1">Contact Us Now</a></ul></div></div></div></div></div><div class="animate-bus"><img src="http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/images/animate-bus2.png" alt="animated bus"></div></section></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1459256445739"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cp-heading-style1 "><h2>Drivers <span> For Hire</span></h2></div><section class="cp-driver-section "><div class="row"><div class="col-md-3 col-sm-6 col-xs-12"><figure class="cp-driver-box"><img width="263" height="533" src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-01.jpg" class="attachment-614x614 size-614x614 wp-post-image" alt="driver-img-01" srcset="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-01.jpg 263w, http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-01-148x300.jpg 148w" sizes="(max-width: 263px) 100vw, 263px" /><figcaption class="cp-caption"><h4><a href="http://crunchpress.com/demo/taxigo/?drivers=anita-doe-2">Anita Doe</a></h4><ul class="cp-meta-listed"><li>Cab: <span>Driver</span></li><li>Age: <span>27</span></li></ul></figcaption></figure></div><div class="col-md-3 col-sm-6 col-xs-12"><figure class="cp-driver-box"><img width="263" height="533" src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-02.jpg" class="attachment-614x614 size-614x614 wp-post-image" alt="driver-img-02" srcset="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-02.jpg 263w, http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-02-148x300.jpg 148w" sizes="(max-width: 263px) 100vw, 263px" /><figcaption class="cp-caption"><h4><a href="http://crunchpress.com/demo/taxigo/?drivers=adam-eli">Adam Eli</a></h4><ul class="cp-meta-listed"><li>Part time: <span>Driver</span></li><li>Age: <span>25</span></li></ul></figcaption></figure></div><div class="col-md-3 col-sm-6 col-xs-12"><figure class="cp-driver-box"><img width="263" height="533" src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-03.jpg" class="attachment-614x614 size-614x614 wp-post-image" alt="driver-img-03" srcset="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-03.jpg 263w, http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-03-148x300.jpg 148w" sizes="(max-width: 263px) 100vw, 263px" /><figcaption class="cp-caption"><h4><a href="http://crunchpress.com/demo/taxigo/?drivers=johni-yoe">Johni Yoe</a></h4><ul class="cp-meta-listed"><li>Full time: <span>Driver</span></li><li>Age: <span>29</span></li></ul></figcaption></figure></div><div class="col-md-3 col-sm-6 col-xs-12"><figure class="cp-driver-box"><img width="263" height="533" src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-04.jpg" class="attachment-614x614 size-614x614 wp-post-image" alt="driver-img-04" srcset="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-04.jpg 263w, http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/driver-img-04-148x300.jpg 148w" sizes="(max-width: 263px) 100vw, 263px" /><figcaption class="cp-caption"><h4><a href="http://crunchpress.com/demo/taxigo/?drivers=bonita-poe">Bonita Poe</a></h4><ul class="cp-meta-listed"><li>Cab: <span>Driver</span></li><li>Age: <span>21</span></li></ul></figcaption></figure></div></div></section></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/testimonial-bg-img.jpg" class="vc_row wpb_row vc_row-fluid vc_custom_1459256850164 vc_row-has-fill vc_row-no-padding vc_general vc_parallax vc_parallax-content-moving"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cp-heading-style2 "><h2>Latest <span> Reviews</span></h2></div><section class="cp-testimonial-section "><div class="container"><div class="owl-carousel" id="cp-testimonial-slider"><div class="item"><div class="cp-testimonial-inner"><div class="row"><div class="col-md-8 col-sm-8"><div class="cp-text"><strong>Highly recommended by our customers</strong><blockquote class="cp-blockquote">Sabemos que el diferencial está en los detalles, y es por ello que nuestros se vicios en alquiler de vehículos, tanto en el sector turístico como en el empr sarial, se destacan por su calidad y buen gusto para brindarte una experien cia única, segura y agradable.</blockquote><span>ALBERT EISHAL, ART DIRECTOR</span></div></div><div class="col-md-4 col-sm-4"><span class="cp-icon"><i class="fa fa-user"></i></span></div></div></div></div><div class="item"><div class="cp-testimonial-inner"><div class="row"><div class="col-md-8 col-sm-8"><div class="cp-text"><strong>Highly recommended by our customers</strong><blockquote class="cp-blockquote">Sabemos que el diferencial está en los detalles, y es por ello que nuestros se vicios en alquiler de vehículos, tanto en el sector turístico como en el empr sarial, se destacan por su calidad y buen gusto para brindarte una experien cia única, segura y agradable.</blockquote><span>Niky John, ART DIRECTOR</span></div></div><div class="col-md-4 col-sm-4"><span class="cp-icon"><i class="fa fa-user"></i></span></div></div></div></div><div class="item"><div class="cp-testimonial-inner"><div class="row"><div class="col-md-8 col-sm-8"><div class="cp-text"><strong>Highly recommended by our customers</strong><blockquote class="cp-blockquote">Sabemos que el diferencial está en los detalles, y es por ello que nuestros se vicios en alquiler de vehículos, tanto en el sector turístico como en el empr sarial, se destacan por su calidad y buen gusto para brindarte una experien cia única, segura y agradable.</blockquote><span>William Bard, ART DIRECTOR</span></div></div><div class="col-md-4 col-sm-4"><span class="cp-icon"><i class="fa fa-user"></i></span></div></div></div></div></div></div></section></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1459320427117 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cp-heading-style1 "><h2>TaxiGo <span> Mobile App</span></h2></div><section class="cp-mobile-app-section "><div class=""><div class="row"><div class="col-md-6 col-sm-12"><div class="cp-app-thumb"><img class="app-img1" src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/mobile-img-02.png" alt="app image 1"><img class="app-img2" src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/mobile-img-01.png" alt="app image 2"></div></div><div class="col-md-6 col-sm-12"><div class="cp-app-text"><h4> Downlaod the TaxiGo voucher app free! <br>  Say Goodbye to paper vouchers</h4><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p><p>But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p><strong>Searcg TaxiGo on iphone &amp; Android market places</strong><ul class="cp-app-btn"><li><a href="https://play.google.com/store/apps?hl=en"><img src="http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/images/g-play-img.png" alt="google play store"></a></li><li><a href="http://www.appstore.com/"><img src="http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/images/app-img.png" alt="apple app store"></a></li></ul></div></div></div></div></section></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1460462400000"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cp-heading-style1 "><h2>Our News &amp;  <span>Faqs</span></h2></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_column-gap-30"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><section class="cp-faq-section2"><div class=""><div class="row"><div class="cp-accordian-item"><div class="panel-group" id="accordion15" role="tablist" aria-multiselectable="true"><div class="panel panel-default"><div class="panel-heading" role="tab" id="cp-tab-115"><div class="panel-title"><a class="" role="button" data-toggle="collapse" data-parent="#accordion15" href="#cp-tab-collapse115" aria-expanded="true" aria-controls="cp-tab-collapse115">How much One Way Rental charges?</a></div></div><div id="cp-tab-collapse115" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="cp-tab-115"><div class="panel-body"><div class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/car-sm-01-100x100.jpg" alt="faq image"></div><div class="cp-text"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.....</p></div></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab" id="cp-tab-215"><div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion15" href="#cp-tab-collapse215" aria-expanded="false" aria-controls="cp-tab-collapse215">Can I do a One Way Rental?</a></div></div><div id="cp-tab-collapse215" class="panel-collapse collapse " role="tabpanel" aria-labelledby="cp-tab-215"><div class="panel-body"><div class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/car-sm-01-100x100.jpg" alt="faq image"></div><div class="cp-text"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.....</p></div></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab" id="cp-tab-315"><div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion15" href="#cp-tab-collapse315" aria-expanded="false" aria-controls="cp-tab-collapse315">Are there any hidden charges?</a></div></div><div id="cp-tab-collapse315" class="panel-collapse collapse " role="tabpanel" aria-labelledby="cp-tab-315"><div class="panel-body"><div class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/car-sm-01-100x100.jpg" alt="faq image"></div><div class="cp-text"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.....</p></div></div></div></div><div class="panel panel-default"><div class="panel-heading" role="tab" id="cp-tab-415"><div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion15" href="#cp-tab-collapse415" aria-expanded="false" aria-controls="cp-tab-collapse415">Can I drive the vehicle out of State?</a></div></div><div id="cp-tab-collapse415" class="panel-collapse collapse " role="tabpanel" aria-labelledby="cp-tab-415"><div class="panel-body"><div class="cp-thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/car-sm-01-100x100.jpg" alt="faq image"></div><div class="cp-text"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.....</p></div></div></div></div></div></div></div></div></section></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><section class="cp-blog-section"><div class="row"><div class="cp-testimonial-outer"><div class="owl-carousel" id="cp-test-slider2"><div class="item"><div class="cp-testimonial-box"><span class="date">March 30,2016</span><h4>Here is the best way  to collect your taxi</h4><p>Speeding and minor offences are fine and will not incur any additional fee's. any other offences should be checked with our reservations  urna nibh ut,  etiam libero nisl, in magna...<a href="http://crunchpress.com/demo/taxigo/?p=503">{+}</a></p><div class="test-bottom"><div class="thumb"><img class="img-circle" src="http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/images/test-sm-thumb.jpg" alt=""></div><p>By addam ham</p></div></div></div><div class="item"><div class="cp-testimonial-box"><span class="date">March 30,2016</span><h4>Here is the best way  to collect your taxi1</h4><p>Speeding and minor offences are fine and will not incur any additional fee's. any other offences should be checked with our reservations  urna nibh ut,  etiam libero nisl, in magna...<a href="http://crunchpress.com/demo/taxigo/?p=505">{+}</a></p><div class="test-bottom"><div class="thumb"><img class="img-circle" src="http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/images/test-sm-thumb.jpg" alt=""></div><p>By addam ham</p></div></div></div><div class="item"><div class="cp-testimonial-box"><span class="date">March 30,2016</span><h4>Here is the best way  to collect your taxi2</h4><p>Speeding and minor offences are fine and will not incur any additional fee's. any other offences should be checked with our reservations  urna nibh ut,  etiam libero nisl, in magna...<a href="http://crunchpress.com/demo/taxigo/?p=506">{+}</a></p><div class="test-bottom"><div class="thumb"><img class="img-circle" src="http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/images/test-sm-thumb.jpg" alt=""></div><p>By addam ham</p></div></div></div></div></div></div></section></div></div></div></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid cp-advertising-section vc_custom_1459333125101 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1459334138583"><div class="wpb_wrapper"><div class="cp-heading-style2 "><h2>Taxi <span> Advertising</span></h2></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cp-advertising-box"><figure class="thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/blog-thumb-01-117x105.jpg" alt=""><span class="num">1</span></figure><div class="cp-text"><h4>Choose a taxi model</h4><p>Speeding and minor offences are fine and will not incur any additional</p></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cp-advertising-box"><figure class="thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/advertising-sm-thumb-02-117x105.png" alt=""><span class="num">2</span></figure><div class="cp-text"><h4>Advertising position</h4><p>Speeding and minor offences are fine and will not incur any additional</p></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cp-advertising-box"><figure class="thumb"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/advertising-sm-thumb-03-117x105.png" alt=""><span class="num">3</span></figure><div class="cp-text"><h4>Select time period</h4><p>Speeding and minor offences are fine and will not incur any additional</p></div></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>
			</div><!-- .entry-content -->
		</div><!-- #post-## -->
									</div>
					   </div>
        </div>									</div>
			</div>
		</div>
	<!--CONTANT SECTION ENDs-->
	            <!--Footer Start-->
            <footer class="cp_footer">
                <!--Footer Top Section Start-->
		  	             
                <section class="cp-ft-top-section pd-t80" style="background: #e4e4ee url(http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/footer-md-img.jpg) top right no-repeat;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="footer-about-box">
									<strong class="logo"><a href="http://crunchpress.com/demo/taxigo/"><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/footer-logo.png" alt="footer_logo"></a></strong>
                                    <p>The Company downminor offences are fine and will not incur any additional fee&#039;s. Any other offences should be checked with our reservations urna nibh ut, our reservations alias consequatur aut perferendis doloribus asurna etiam libero nisl, in magna feugia.</p>
                                    <ul class="cp-social-links">
                                        
								<li class=""><a href="http://twitter.com/home?status=Home%20-%20http://crunchpress.com/demo/taxigo"><i class="fa fa-twitter-square"></i></a></li>								<li class=""><a href="https://plus.google.com/share?url=http://crunchpress.com/demo/taxigo"><i class="fa fa-google-plus-square"></i></a></li>				<li class=""><a href="http://reddit.com/submit?url=http://crunchpress.com/demo/taxigo&#038;title=Home"><i class="fa fa-reddit-square"></i></a></li>				<li class=""><a href="http://digg.com/submit?url=http://crunchpress.com/demo/taxigo&#038;title=Home"><i class="fa fa-digg"></i></a></li>				<li class=""><a href="http://www.myspace.com/Modules/PostTo/Pages/?u=http://crunchpress.com/demo/taxigo"><i class="fa fa-maxcdn"></i></a></li>						
		                                    </ul>
                                    <ul class="cp-logo-listed">
                                                                            <li><a><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/company-logo1.jpg" alt="company-logo1"></a></li>
										
                                                                            <li><a><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/company-logo2.jpg" alt="company-logo2"></a></li>
										
                                                                            <li><a><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/company-logo3.jpg" alt="company-logo3"></a></li>
										
                                                                            <li><a><img src="http://crunchpress.com/demo/taxigo/wp-content/uploads/2016/03/company-logo4.jpg" alt="company-logo4"></a></li>
										
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--Footer Top Section End-->
			  
                <!--Footer Top Section End-->
                <!--Footer Bottom Section Start-->
                <section class="cp-ft-bottom-section">
                    <div class="container">
                        <div class="row">
                                                <div class="sidebar_section sidebar-recent-post newsletter newsletter-box footer-box-1">            
				<div class="cp-ft-form-box col-md-5">
                   <h4><a> Already Registered? Subscribe Now</a></h4>
            
		<form class="newsletter get-touch-form" id="frm_newsletter" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=http://feedburner.google.com/fb/a/mailverify?uri=MagnusJepson', 'popupwindow', 'scrollbars=yes,width=600,height=550');return true">
			<div class="inner-holder"> 
            <input type="text" name="text" value="Name" required pattern="[a-zA-Z ]+"/>
            </div>
			<div class="inner-holder"> 
            <input type="text" name="email" onblur="this.value=this.value==''?'Email  Address':this.value;" onfocus="this.value=this.value=='Email  Address'?'':this.value" value="Email  Address" />
            </div>
				<input type="hidden" value="http://feedburner.google.com/fb/a/mailverify?uri=MagnusJepson" name="uri"/>
				<input type="hidden" name="loc" value="en_US"/>
                <div class="inner-holder inner-holder2">
                <button type="submit" class="btn-submit" value="Submit">Subscribe</button>
                 </div>
		</form>
	</div>
	</div><div class="sidebar_section sidebar-recent-post widget_nav_menu"><nav class="cp-footer-nav"><ul id="menu-footer-menu" class=""><li id="menu-item-87" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-87"><a href="http://crunchpress.com/demo/taxigo/">Home</a></li>
<li id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88"><a href="http://crunchpress.com/demo/taxigo/?page_id=12">About</a></li>
<li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="http://crunchpress.com/demo/taxigo/?page_id=13">Online Offers</a></li>
<li id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89"><a href="http://crunchpress.com/demo/taxigo/?page_id=24">Blog</a></li>
<li id="menu-item-91" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91"><a href="http://crunchpress.com/demo/taxigo/?page_id=14">Faqs</a></li>
<li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="http://crunchpress.com/demo/taxigo/?page_id=36">Testimonials</a></li>
<li id="menu-item-90" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-90"><a href="http://crunchpress.com/demo/taxigo/?page_id=37">Contact us</a></li>
</ul></nav></div>                            <div class="footer_rights">
							 <p>All Rights Reserved 2016</p>                            </div>
                        </div>
                    </div>
                </section><!--Footer Bottom Section End-->
            </footer>
            <!--Footer End-->
	</div><!--Wrapper Content End-->
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/crunchpress.com\/demo\/taxigo\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ...","jqueryUi":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.4.2'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/html5.js?ver=1.0'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/custom.js?ver=1.0'></script>
<script type='text/javascript'>
var ajaxurl = 'http://crunchpress.com/demo/taxigo/wp-admin/admin-ajax.php';var directory_url = 'http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo';
</script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/bootstrap.min.js?ver=1.0'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/modernizr.js?ver=1.0'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/cp_search_classie.js?ver=1.0'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-includes/js/comment-reply.min.js?ver=4.5.9'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/owl.carousel.min.js?ver=1.0'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/jquery-migrate-1.2.1.min.js?ver=1.0'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/jquery-easing-1.3.js?ver=1.0'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-includes/js/jquery/ui/spinner.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-includes/js/wp-embed.min.js?ver=4.5.9'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=4.12'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min.js?ver=4.12'></script>
<script type='text/javascript' src='http://crunchpress.com/demo/taxigo/wp-content/themes/taxigo/frontend/js/jquery.accordion.js?ver=1.0'></script>
</body>
</html>