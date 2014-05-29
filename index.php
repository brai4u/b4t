<?php
  include ('includes/main.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Hace tu banner para twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="hace banner para twitter, banner para twitter, como hacer un banner para twitter, como hago un banner para twitter">
    <meta name="description" content="banner for twitter es una aplicacion donde ustedes van a poder hacer un banner para su perfil de twitter, de una forma muy rapida y facil.">
    <meta name="keywords" content="banner para twitter">
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <link href="/twitter.css" rel="stylesheet">
    <link href="/twitter2.css" rel="stylesheet">
    <link href="/twitter3.css?v=1.4" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="bannerfortwitter.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/brai4u.js"></script>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-39036676-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=147672768714704";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div>
</head>

<body>
  <div class="jumbotron masthead">
<?php
$navegador = getenv("HTTP_USER_AGENT");
if (!(preg_match("/MSIE/i", "$navegador"))){
?>
  <div class="container">
<?php
    $status = $_GET['status'];
    if ($status == generado){
?>
    <h1 id="msj1">Gracias :)</h1>
    <p id="msj2">Gracias por usar bannerforwitter si te gusto, podes compartir tu sentimiento con tus amigos</p>
    <p>
      <a class="btn btn-primary btn-large" 
      href="http://twitter.com/share?text=Hey! Con esta web cree mi banner muy facil
      &url=http://bannerfortwitter.com.ar&hashtags=banner4twitter" onClick="window.open(this.href, this.target, 'width=500,height=500'); return false;"style="">Twettear :)</a> 
      
      <a class="btn btn-primary btn-large" 
      href="https://www.facebook.com/sharer/sharer.php?u=http://bannerfortwitter.com.ar" onClick="window.open(this.href, this.target, 'width=500,height=500'); return false;"style="">Compartir en fb :)</a> 
      </p>
<?php
}
    else{
?>
    <h1 id="msj1">Crea tu banner</h1>
    <p id="msj2">Genera un banner para tu perfil de twitter en dos simples pasos! r&#225;pido y f&#225;cil.</p>
    <p id="botones">
    <a class="btn btn-primary btn-large" id="1" style="">Seleccionar imagen</a> 
    <a class="btn btn-primary btn-large" id="listo" style="display: none"><img src="http://static.digg.com/static/images/icon_twitter.png" height="26" width="20"></img>Imagen seleccionada</a> 
    <a class="btn btn-primary btn-large" id="2" style="">Generar banner</a>
    <a class="btn btn-primary btn-large" id="generado" style="display: none">Generando banner <img  id="loading" src="loading.gif" style="display: none" height="32" width="32"></img></a>
    </p>
<?
}
?>

<table width="420" border="0" align="center" cellpadding="0" cellspacing="0" style="display:none">
  <tr>
    <td width="413" height="40" class="titulo"></td>
  </tr>
  <tr>
  <form action="index.php"method="post" enctype="multipart/form-data" id="form">
    <td height="50" valign="top" class="text">
      <input name="imagen" type="file" class="casilla" id="imagen" size="35" />
      <input name="enviar" type="submit" class="boton" id="enviar" value="generar banner" />
      <input name="action" type="hidden" value="upload" />      </td>
    </form>
  </tr>
</table>
</div>
<?php
}
else
{
?>
  <div class="container">
    <h2>Navegas con IE :(</h2>
    <p>Estas usando Internet Explorer, IE no es compatible con esta pagina. Pero no todo esta perdido te recomendamos estos navegadores para realizar tu banner</p>
    <p>
      <a class="btn btn-primary btn-large" href="https://www.google.com/intl/es/chrome/browser/?hl=es" ><img src="chrome.png"></img>Google Chrome</a> 
    <a class="btn btn-primary btn-large" href="http://www.mozilla.org/es-AR/firefox/new/" ><img src="mozilla.png"></img>Mozilla Firefox</a>
    </p>
  </div>
<?php
  }
?>
  
</div>
<div class="bs-docs-social">
  <div class="container">
    <ul class="bs-docs-social-buttons">
      <li class="follow-btn">
      <div class="fb-like" data-href="http://www.facebook.com/banner4twitter" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
  </li>
      <li class="follow-btn">
        <a href="https://twitter.com/brai4u" class="twitter-follow-button" data-show-count="true" id="twitterbrai" data-size="small">Follow @brai4u</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </li>
    <li><a href="https://plus.google.com/109710413719044160468" rel="publisher">Google+</a>
    </li>
    </ul>
  </div>
</div>

<div class="container">
  <div class="marketing">
    <h2>¿C&#243;mo funciona?</h2>
  <p class="marketing-byline">¿Quer&#233;s saber c&#243;mo funciona esta app?</p>
  <div class="row-fluid">
      <div class="span4">
        <img class="marketing-img" height="300" width="200" src="img/justin.png">
        <h2>Redimensionar.</h2>
        <p>Obtiene una imagen de cualquier tamaño y se redimensiona al tamaño necesario para el banner</p>
      </div>
      <div class="span4">
        <img class="marketing-img" height="300" width="200" src="img/justin2.png">
        <h2>Dividir en secciones.</h2>
        <p>La app de forma inteligente obtiene las medidas, y calcula los cortes para poder generar las partes del banner</p>
      </div>
      <div class="span4">
        <img class="marketing-img" height="300" width="200" src="img/justin3.png">
        <h2>Incluir banner en el perfil.</h2>
        <p>Gracias al api de twitter, esta app es capaz de colocar en tu perfil las imagenes necesarias para formar el banner</p>
      </div>
    </div>
  <h2>¿Quienes la usan?</h2>
  <br>
  <div class="members clearfix">
<?php
  $link = mysql_connect("", "", "");
  mysql_select_db("", $link);
  $result = mysql_query("SELECT usuario, link FROM usuarios", $link);
if ($row = mysql_fetch_array($result)){
  do{
    echo '<img src="' . $row['link'] . '" height="128" width="128"></img>';
  } 
    while ($row = mysql_fetch_array($result));
}
?>
  </div>
</div>
</div>
    <footer class="footer">
      <div class="container">
        <p><a href="http://twitter.com/brai4u" target="_blank">@brai4u</a>
      </div>
    </footer>
  </body>
</html>
