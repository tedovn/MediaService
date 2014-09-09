<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> {{isset($title) ? $title : 'Default'}}</title>
  <!-- Bootstrap -->
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/popup.css" rel="stylesheet">

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script type="text/javascript" src='/js/main.js'></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="/css/main-style.css" type="text/css" rel="stylesheet">
    <link href="/css/layout-css.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/favicon.ico" alt="favicon">
  </head>
  <body>
    <!-- Static navbar -->
    <div class="navbar navbar-inverse" role="navigation">
      <div class="container wrapper">
      
          <div class=" Tlogo navbar-btn">
            <a class="navbar-brand" href="/">
              <img src="/img/final-logo-1.png" alt="logo" title='Media Serviceс, LTD'>
            </a>
          </div>
          <div >
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-text navbar-right">
                <!--                        <li class="-->
                <? //= ($page == "home" ? "Tactive" : "") ?><!--"><a href="/">Начало</a></li>-->
                <!--                        <li class="-->
                <? //= ($page == "services" ? "Tactive" : "") ?><!--"><a href='services'>Услуги</a></li>-->
                <!--                        <li class="-->
                <? //= ($page == "about" ? "Tactive" : "") ?><!--"><a href="about">За нас</a></li>-->
                <!--                        <li class="-->
                <? //= ($page == "contact" ? "Tactive" : "") ?><!--"><a href="contact">Контакти</a></li>-->
                <li
                @if(isset($page))class="<?= ($page == "home" ? "Tactive" : "") ?>"@endif><a
                href="/">Начало</a></li>
                <li
                @if(isset($page))class="<?= ($page == "services" ? "Tactive" : "") ?>"@endif><a
                href="/services">Услуги</a></li>
                <li
                @if(isset($page))class="<?= ($page == "about" ? "Tactive" : "") ?>"@endif><a href="/about">За
                нас</a></li>
                <li
                @if(isset($page))class="<?= ($page == "contact" ? "Tactive" : "") ?>"@endif><a href="/contact">Контакти</a></li>
                <!--                        <li class="-->
                <? //= ($page == "services" ? "Tactive" : "") ?><!--"><a href='services'>Услуги</a></li>-->
                <!--                        <li class="-->
                <? //= ($page == "about" ? "Tactive" : "") ?><!--"><a href="about">За нас</a></li>-->
                <!--                        <li class="-->
                <? //= ($page == "contact" ? "Tactive" : "") ?><!--"><a href="contact">Контакти</a></li>-->
              </ul>
            </div>
          </div>
       
      </div>
    </div>
    <!--laravel-->
    @yield('content')
    <!--larave end-->
    <div class="footer col-lg-12 col-md-12 col-sm-12 col-xs-12" id="Tfooter-color">
      <div class="container wrapper">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <p class="text-muted Tfooter-text-position">Copyright &copy; 2008-2014 MediaService</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <p class="text-muted Tfooter-text-position" id="developers">Design by B1 and B2</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <p class="text-muted Tfooter-text-position">
              <div id="tyxo-link"><a href="http://www.tyxo.bg/?62290" title="Tyxo.bg counter" target=" blank">
                      <img alt="Tyxo.bg counter"
                           src="http://cnt.tyxo.bg/62290?rnd=1706435938&amp;sp=1280x1024&amp;r="></a>
              </div>
              </p>
          </div>

      </div>
    </div>
    <div id='opa' style="text-align: center;font-size: 40px"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    
    
 
    
      <script src="/js/popup.min.js"></script>
      <script type="text/javascript" src='/js/main-jquery.js'></script>
</body>
</html>