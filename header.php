<!doctype html>
<html <?php language_attributes(); ?> style="font-size: 62.5%;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/favicon.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css">
	<script>
	(function(d) {
		var config = {
		kitId: 'cro6qjr',
		scriptTimeout: 3000,
		async: true
		},
		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	})(document);
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrap">
	<header class="main_header">
		<div class="header_inner">
			<a class="logo" href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="ロゴ"></a>
			<button class="hum">
				<span></span>
				<span></span>
			</button>
			<div class="nav_container">
				<nav class="header_nav">
					<a class="header_nav_link" href="#menu1">メニュー1</a>
					<a class="header_nav_link" href="#menu2">メニュー2</a>
				</nav>
			</div>
		</div>
	</header>