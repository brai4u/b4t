<?
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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="bannerfortwitter.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#1').click(function(){
       $('#imagen').trigger('click');
       $('#listo').attr('style', '');
       $('#1').attr('style', 'display: none');
    });

  $('#listo').click(function(){
       $('#imagen').trigger('click');
    });

    $('#2').click(function(){
       $('#enviar').trigger('click');
       $('#2').attr('style', 'display: none');
       $('#loading').attr('style', '');
       $('#generado').attr('style', '');   
    });

    $("#aviso").click(function(){
      window.open("http://bannerfortwitter.tumblr.com/post/86561890186/algunos-cambios", "_blank");
    });
})
</script>

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
if (!(preg_match("/MSIE/i", "$navegador")))
  {
?>
  <div class="container">
    <?php
    $status = $_GET['status'];
    if ($status == generado)
      {
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
    else
      {
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
  </body>
</html>
