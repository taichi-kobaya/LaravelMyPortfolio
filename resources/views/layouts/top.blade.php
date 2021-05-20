<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <meta property='og:type' content='website'>
  <meta property='og:title' content='Webエンジニア TAICHI KOBAYASHI ポートフォリオ'>
  <meta property='og:url' content='URLが入る'>
  <meta property='og:description' content='Webエンジニア TAICHI KOBAYASHIのポートフォリオサイトです！'>
  <meta property="og:image" content="img/ogp.png">
  <meta name="description" content="Webエンジニア TAICHI KOBAYASHIのポートフォリオサイトです！" />
  @yield('title')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/photoswipe/photoswipe.css') }}">
  <link rel="stylesheet" href="{{ asset('css/photoswipe/default-skin/default-skin.css') }}">
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel=”canonical” href=”URLが入る” />
</head>

<body>
  <div class="wrapper">

    <!-- .gnav -->
    <nav class="gnav" class="fixed">
      <ul class="gnav-list">
          <li class="gnav-item"><a class="gnav-link" href="#works-section">WORKS</a></li>
          <li class="gnav-item"><a class="gnav-link" href="#feature-section">FEATURE</a></li>
          <li class="gnav-item"><a class="gnav-link" href="#about-section">ABOUT</a></li>
          <li class="gnav-item"><a class="gnav-link" href="#skill-section">SKILL</a></li>
          <li class="gnav-item"><a class="gnav-link" href="#contact-section">CONTACT</a></li>
      </ul>
    </nav>
    <!-- /.gnav -->

    <!-- .header -->
      <header class="header">
        @include('layouts.header')        
      </header>
    <!-- /.header -->
    <main class="content">
        @yield('content')
    </main>
    <!-- .footer -->
    <footer class="footer">
        @include('layouts.footer')
    </footer>
    <!-- /.footer -->

  </div>
  @include('layouts.photoswipe')
  @include('layouts.script')
</body>
</html>
