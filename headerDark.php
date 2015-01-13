<!doctype html>
<html lang="en">
  <head>
    <title><?php echo site_name(); ?></title>

    <meta name="description" content="<?php echo site_description(); ?>">
    <meta name="keywords" content="Apsolute,Software,Business,HTML,CSS,XML,JavaScript,PHP,Mobile,Development,Denzil,Doyle,Kenycia,Darren,Corelle,Francis,Design,Code,Logos,Windows,Phone,iOS,Apple,Microsoft,Android">
    <meta name="author" content="Apsolute">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="<?php echo theme_url('/css/i.css'); ?>">
    
    <!-- Type -->
    <link href="http://fonts.googleapis.com/css?family=PT+Mono|Oswald:700" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,700,700italic' rel='stylesheet' type='text/css'>    
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo theme_url('/css/monokai.css'); ?>" media="all">    
    <link rel="stylesheet" href="<?php echo theme_url('/css/entypo.css'); ?>" media="all">
    <link rel="stylesheet" href="<?php echo theme_url('/css/fontello.css'); ?>" media="all">
    <!-- You need to go and purchase Calendas Plus and create a font-face package. I would try using IcoMoon or Fontsquirrel
    <link rel='stylesheet' href='<?php echo theme_url('/calendasplus.css'); ?>' media='all' />
  -->

    <!-- open google analytics  -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-38539184-2', 'apsolute-tt.com');
      ga('send', 'pageview');

    </script>
    <!-- close google analytics  -->
    
    <!-- RSS -->    
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="http://coletownsend.com/favicon.ico">

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>var base = '<?php echo theme_url(); ?>';</script>

    <!-- So Meta -->
    <meta name="viewport" content="width=device-width">
    <meta name="generator" content="Anchor CMS">

    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo current_url(); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">



    <?php if(customised()): ?>
      <!-- Custom CSS -->
      <style><?php echo article_css(); ?></style>
      <!--  Custom Javascript -->
      <script><?php echo article_js(); ?></script>
    <?php endif; ?>
  </head>

  <body class="<?php echo body_class(); ?>">
    <header class="site-header darken">
      <div class="wrap">
          <a href="http://www.apsolute-tt.com/"><span class="home"><img src="<?php echo theme_url('/img/logo.png'); ?>"></span></a>
      </div>
    </header>