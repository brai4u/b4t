<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
$idFoto = $_COOKIE["PHPSESSID"];
include('includes/keyTwitter.php');
include("lib/EpiCurl.php");
include('lib/EpiOAuth.php');
include('lib/EpiTwitter.php');
if (isset($_GET['oauth_token']))
  {
    $twitterObj      = new EpiTwitter($consumer_key, $consumer_secret);
    $authenticateUrl = $twitterObj->getAuthenticateUrl();
    $twitterObj->setToken($_GET['oauth_token']);
    $token = $twitterObj->getAccessToken();
    $twitterObj->setToken($token->oauth_token, $token->oauth_token_secret);
    $userdata                       = $twitterObj->get_accountVerify_credentials();
    $_SESSION["username"]           = $userdata->screen_name;
    $_SESSION["tokenMagico"]        = $token->oauth_token;
    $_SESSION["tokenMagicoSecreto"] = $token->oauth_token_secret;
    $_SESSION["image"]              = $userdata->profile_image_url;
    $username                       = $_SESSION['username'];
    $linkAvatar                     = $_SESSION["image"];
    $vip                            = isset($_COOKIE["b4tVIP"]);
    if (!($vip == 1))
      {
        for ($i = 1; $i <= 6; $i++)
          {
            $array = array(
                '@media[]' => '@./imagenes/' . $idFoto . '-' . $i . '.jpg',
                'status' => $i
            );
            if ($i == 6)
              {
                $marca = array(
                    '@media[]' => '@./imagenes/' . $idFoto . '-6.jpg',
                    'status' => 'www.bannerfortwitter.com.ar'
                );
                $twitterObj->post('/statuses/update_with_media.json', $marca);
              }
            else
              {
                $twitterObj->post('/statuses/update_with_media.json', $array);
              }
          }
      }
    else
      {
        for ($i = 1; $i <= 6; $i++)
          {
            $array = array(
                '@media[]' => '@./imagenes/' . $idFoto . '-' . $i . '.jpg',
                'status' => $i
            );
          }
      }
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $cad = "";
    for ($i = 0; $i < 6; $i++)
      {
        $cad .= substr($str, rand(0, 62), 1);
      }
  }

// Guardar usuario y link de avatar en base de datos.
  // Conexion
  $conexion_db = mysql_connect("", "", "")
    or die ("Error al conectar con la base de datos");
  $db = mysql_select_db("", $conexion_db)
    or die ("Error al seleccionar la tabla");

  // Variables
    $usertwitter       = mysql_real_escape_string($_SESSION["username"]);
    $linktwitter       = mysql_real_escape_string($_SESSION["image"]);
    $linktwittergrande = str_replace("_normal", "", $linktwitter);

  // Verificar si el usuario ya existe en la base de datos
    $consulta  = "SELECT * FROM usuarios WHERE usuario = '$usertwitter'";
    $resultado = mysql_query($consulta, $conexion_db);

    // Si el usuario existe, actualizar con el avatar nuevo
    if (mysql_num_rows($resultado)>=1){
      $guardar = "UPDATE usuarios SET link = '$linktwittergrande' WHERE usuario = '$usertwitter'";
      mysql_query($guardar);
    }

    else{
    // Si no existe crear uno nuevo con el link de la imagen
    $guardar = "INSERT INTO usuarios (usuario, link) VALUES ('$usertwitter', '$linktwittergrande')";
    mysql_query($guardar);
  }
  // Cerrar conexion para liberar memoria
    mysql_close($conexion_db);

$redireccion = 'index.php?status=generado';
header("Location:".$redireccionBien);
?>