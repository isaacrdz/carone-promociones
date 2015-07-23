<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Promociones</title>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '744685635678152',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</head>
<body>
  <img src="img/promo-julio.jpg" alt="">
  <div class="absolute">
    <a href="app_684336108254110">Cotizar aquí</a>
  </div>

  <style>

    img
    {
      position: relative;
    }
    .absolute
    {
         position: absolute;
    top: 150px;
    left: 600px;
    background-color: #415590;
    color: white;
    padding: 1em;
    border-radius: 10px;
    text-decoration: none;
    }

    a
    {
      color:white;
      text-decoration: none;
      font-family: Arial;
      text-transform: uppercase;
    }
    
  </style>
  
</body>
</html>