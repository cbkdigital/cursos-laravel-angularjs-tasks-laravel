<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Libras - CEULJI</title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="/css/semantic.css">
  <link rel="stylesheet" type="text/css" href="/css/homepage.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="/javascript/semantic.js"></script>
  <script src="/javascript/homepage.js"></script>

</head>
<body  id="feed">  
  <div class="ui large pointing inverted vertical sidebar menu">
    @yield('menu')
  </div>
  <div class="ui black launch right attached button" style="width:111px">
        <i class="icon dashboard layout"></i>
        <span class="text menu">Menu</span>
      </div>
  <div class="ui celled grid">
    <div class="eight wide middle column">            
      <h2 class="ui header">
        @yield('video')      
      </h2>
    </div>
    <div class="eight wide right column">
      @yield('descricao')
      
    </div>
  </div>
</body>
</html>