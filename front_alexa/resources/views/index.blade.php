<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Breadth 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140331

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Front Alexa</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ url('/css/default.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('/css/font.css.css') }}" />


<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links right">
                    @auth
                        <a class="link-auth" href="{{ url('/home') }}">Acceuil</a>
                    @else
                        <a class="link-auth" href="{{ route('login') }}">Se connecter</a>

                        @if (Route::has('register'))
                            <a class="link-auth" href="{{ route('register') }}">S'inscrire</a>
                        @endif
                    @endauth
                </div>
            @endif
<div id="header-wrapper">
  <div id="header" class="container">
    <div id="logo">
      <h1><a href="#">Alexa</a></h1>
</div>
    <div id="menu">
      <ul>
        <li class="current_page_item"><a href="/" accesskey="1" title="">Accueil</a></li>
        <li><a href="{{ route('skills.index') }}" accesskey="2" title="">Liste des speech</a></li>
        <li><a href="{{ route('skill.create') }}" accesskey="3" title="">Créer un speech</a></li>
        <li><a href="{{ route('skills_set.index') }}" accesskey="4" title="">Liste des skills</a></li>
        <li><a href="{{ route('skills_set.create') }}" accesskey="5" title="">Créer un skill</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="header-featured"> </div>

<div id="wrapper">
  <div id="featured-wrapper">
    <div id="featured" class="container">
      <div class="column1"> <span class="icon icon-cogs"></span>
        <div class="title">
          <h2>Maecenas lectus sapien</h2>
        </div>
        <p>In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</p>
      </div>
      <div class="column2"> <span class="icon icon-legal"></span>
        <div class="title">
          <h2>Praesent scelerisque</h2>
        </div>
        <p>In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</p>
      </div>
      <div class="column3"> <span class="icon icon-unlock"></span>
        <div class="title">
          <h2>Fusce ultrices fringilla</h2>
        </div>
        <p>In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</p>
      </div>
      <div class="column4"> <span class="icon icon-wrench"></span>
        <div class="title">
          <h2>Etiam posuere augue</h2>
        </div>
        <p>In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</p>
      </div>
    </div>
  </div>
  <div id="extra" class="container">
    <h2>Maecenas vitae orci vitae tellus feugiat eleifend</h2>
    <span>Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh</span> 
    <p>This is <strong>Breadth</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>

    <a href="#" class="button">Etiam posuere</a> </div>
</div>

<div id="copyright" class="container">
  <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
