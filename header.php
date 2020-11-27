<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= wp_get_document_title() ?></title>
    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>
	
<!-- Site header markup goes here -->
<div class="wrapper">
      <!-- Navbar Section -->
      <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container container">
          <a class="navbar-brand" href="#">BSLaravelMix</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right">
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#features">Features</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#reviews">Reviews</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pricing">Pricing</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#buy">Signup</a></li>
            </ul>
          </div>
        </div>
      </nav><!-- Navbar End -->

