<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
<title>hacedor : le jeu de la créativité</title>
<title><?php
 if ( is_search() ) :
 echo 'Résultats de recherche pour "'.get_search_query().'" | ';
 else :
 wp_title('|', true, 'right');
 endif;
 bloginfo('name'); 
?></title>
<link rel="shortcut icon" href="http://www.biscaypla.in/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name=viewport content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta property="og:locale" content="fr_FR" />
<meta property="og:site_name" content="hacedor" />
<meta property="og:type" content="website" />
<meta property="og:title" content="hacedor : le jeu de la créativité." />
<link rel="canonical" href="www.biscaypla.in" />
<meta property="og:image" content="https://motif.imgix.com/i?url=http%3A%2F%2Fwww.biscaypla.in%2F&image_url=null&color=5b4e60&logo_url=https%3A%2F%2Flogo.clearbit.com%2Fwww.biscaypla.in%3Fformat%3Dpng%26size%3D300&logo_alignment=bottom%2Cright&text_alignment=top%2Cleft&logo_padding=0&font_family=Avenir%20Next%20Demi%2CBold&text_color=ffffff" />
<meta property="og:description" content="hacedor est un site sur la créativité." />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/osmplayer/templates/default/css/osmplayer_default.css"> -->
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- icon for iOS Devices -->
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-iphone4.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-ipad.png" />
<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/splash-screen-320x460.png"/>
<link rel="apple-touch-startup-image" sizes="1024x748" href="<?php echo get_template_directory_uri(); ?>/images/splash-screen-1024x748.png" />
<link rel="apple-touch-startup-image" sizes="768x1004" href="<?php echo get_template_directory_uri(); ?>/images/splash-screen-768x1004.png" />
<link rel="apple-touch-startup-image" sizes="640x960" href="<?php echo get_template_directory_uri(); ?>/images/splash-screen-640x960.png" />
<!-- END icon for iOS Devices -->
<script type="text/javascript">
function closeIt(ID) {
    document.getElementById(ID).style.display = "none";
}
</script>
<script language="JavaScript" type="text/javascript">
<!--
function getsupport ( selectedtype )
{
  document.supportform.supporttype.value = selectedtype ;
  document.supportform.submit() ;
}
</script>
<script>
window.addEventListener(
    'load',
    function load()
    {
        window.removeEventListener('load', load, false);
        document.body.classList.remove('loading');
    },
    false);
</script>
<!-- Hotjar Tracking Code for www.biscaypla.in -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:320090,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<script type=”application/ld+json”>

{

“@context”: “http://schema.org”,

“@type”: “WebSite”,

“url”: “https://www.biscaypla.in/”,

“potentialAction”: {

“@type”: “SearchAction”,

“target”: “https://query.example.com/search?q={search_term_string}”,

“query-input”: “required name=search_term_string”

}

}

</script>


</head>