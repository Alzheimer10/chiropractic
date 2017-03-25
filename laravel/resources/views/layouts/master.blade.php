<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="wide wow-animation smoothscroll scrollTo">
  <head>
    <!-- Site Title-->
    <title>Chiropractic</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="SANA design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald%7CLato:400italic,400,700">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/countrySelect.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
        <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
        <![endif]-->
  </head>
  <body>  
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Head-->
        @include('layouts/header')
      <!-- Page Contents-->
      <main class="page-content">
        @yield('content')
      </main>
      <!-- Page Footer-->
      <!-- Default footer-->
        @include('layouts/footer')
    </div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script>
      $.getJSON('http://api.wipmania.com/jsonp?callback=?', function (data) {
        console.log(data.address.country_code);
        console.log(data.address.country);
      });
    </script>
  </body>
</html>

