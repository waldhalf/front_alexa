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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
      <h1><a href="/">Alexa</a></h1>
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
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>