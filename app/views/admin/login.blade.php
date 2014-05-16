<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Libras - CEULJI - ADMIN</title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="/css/semantic.css">
  <link rel="stylesheet" type="text/css" href="/css/homepage.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="/javascript/semantic.js"></script>
  <script src="/javascript/homepage.js"></script>
  <script type="text/javascript">
      $(function(){
          $(".logar").click(function(){
              $.ajax({
                type: "POST",
                url: "/admin",
                data: {
                  email: $("#email").val(),
                  password: $("#password").val(),
                },
                success: function(data){
                  if(data == "ok"){
                    window.location = '/admin/conteudos';
                  }else{
                    alert('OOOOOooOoOps');
                  }
                }
              })
          })
      });
  </script>
</head>
<body style="background-color:rgb(200, 132, 213)"><!--(97, 147, 185)-->

    <div class="ui form segment" style="width: 500px; margin:10% auto">
        
        <div>
            <h5>ADMIN</h5>
        </div>

        <div class="field">
            <label>E-mail</label>
            <div class="ui left labeled icon input">
                <input id="email" type="text" placeholder="E-mail">
                <i class="user icon"></i>
                <div class="ui corner label">
                   <i class="icon asterisk"></i>
                </div>
            </div>
        </div>

        <div class="field">
            <label>Senha</label>
            <div class="ui left labeled icon input">
                <input id="password" type="password" placeholder="Password">
                <i class="lock icon"></i>
                <div class="ui corner label">
                    <i class="icon asterisk"></i>
                </div>
            </div>
        </div>

        <div class="ui error message">
            <div class="header">We noticed some issues</div>
        </div>

        <div class="ui animated fade blue button logar" >
            <div class="visible content">Logar</div>
            <div class="hidden content">
                <i class="sign in icon"></i>
            </div>
        </div>

    </div>
</body>
</html>