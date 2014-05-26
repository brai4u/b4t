<?
header('Content-Type: text/html; charset=utf-8');
session_start();
$aleatoreo = $_COOKIE["PHPSESSID"];
function guardar()
{
    include('loginToTwitter.php');
    GLOBAL $aleatoreo;
    //echo $authenticateUrl;
    header("Location: ".$authenticateUrl);
}
$varrand = $aleatoreo;
$varallw = array(
    "image/jpeg",
    "image/pjpeg",
    "image/png",
    "image/x-png"
);
$varstat = "";
function adaptar()
{
    GLOBAL $varname;
    GLOBAL $aleatoreo;
    $tamanio = filesize($varname);
    if ($tamanio > '2621440') {
        //unlink('./imagenes/' . $varname);
        header("Location:index.php?status=limite");
    }
    $ruta_imagen = 'imagenes/' . $varname;
    $info_fuente = getimagesize($ruta_imagen);
    if (eregi('.jpg', $varname)) {
        $recurso_fuente = imagecreatefromjpeg($ruta_imagen);
    }
    if (eregi('.png', $varname)) {
        $recurso_fuente = imagecreatefrompng($ruta_imagen);
    }
    $ancho_nuevo   = 450;
    $alto_nuevo    = 300;
    $tipo_mime     = $info_fuente['mime'];
    $recurso_copia = imagecreatetruecolor($ancho_nuevo, $alto_nuevo);
    imagecopyresampled($recurso_copia, $recurso_fuente, 0, 0, 0, 0, $ancho_nuevo, $alto_nuevo, $info_fuente[0], $info_fuente[1]);
    imagejpeg($recurso_copia, './imagenes/' . $varname . '-editar.jpg', 100);
    imagedestroy($recurso_copia);
    imagedestroy($recurso_fuente);
    $ruta_imagen1    = './imagenes/' . $varname . '-editar.jpg';
    $ancho_recorte1  = 150;
    $alto_recorte1   = 150;
    $info_fuente1    = getimagesize($ruta_imagen1);
    $tipo_mime1      = $info_fuente1['mime'];
    $recurso_fuente1 = imagecreatefromjpeg($ruta_imagen1);
    $x_recorte1      = 300;
    $y_recorte1      = 150;
    $recurso_copia1  = imagecreatetruecolor($ancho_recorte1, $alto_recorte1);
    imagecopyresampled($recurso_copia1, $recurso_fuente1, 0, 0, $x_recorte1, $y_recorte1, $ancho_recorte1, $alto_recorte1, $ancho_recorte1, $alto_recorte1);
    imagejpeg($recurso_copia1, './imagenes/' . $aleatoreo . '-1.jpg', 100);
    imagedestroy($recurso_copia1);
    imagedestroy($recurso_fuente1);
    //2
    $ruta_imagen2    = './imagenes/' . $varname . '-editar.jpg';
    $ancho_recorte2  = 150;
    $alto_recorte2   = 150;
    $info_fuente2    = getimagesize($ruta_imagen2);
    $tipo_mime2      = $info_fuente2['mime'];
    $recurso_fuente2 = imagecreatefromjpeg($ruta_imagen2);
    $x_recorte2      = 150;
    $y_recorte2      = 150;
    $recurso_copia2  = imagecreatetruecolor($ancho_recorte2, $alto_recorte2);
    imagecopyresampled($recurso_copia2, $recurso_fuente2, 0, 0, $x_recorte2, $y_recorte2, $ancho_recorte2, $alto_recorte2, $ancho_recorte2, $alto_recorte2);
    imagejpeg($recurso_copia2, './imagenes/' . $aleatoreo . '-2.jpg', 100);
    imagedestroy($recurso_copia2);
    imagedestroy($recurso_fuente2);
    //3
    $ruta_imagen3    = './imagenes/' . $varname . '-editar.jpg';
    $ancho_recorte3  = 150;
    $alto_recorte3   = 150;
    $info_fuente3    = getimagesize($ruta_imagen3);
    $tipo_mime3      = $info_fuente3['mime'];
    $recurso_fuente3 = imagecreatefromjpeg($ruta_imagen3);
    $x_recorte3      = 0;
    $y_recorte3      = 150;
    $recurso_copia3  = imagecreatetruecolor($ancho_recorte3, $alto_recorte3);
    imagecopyresampled($recurso_copia3, $recurso_fuente3, 0, 0, $x_recorte3, $y_recorte3, $ancho_recorte3, $alto_recorte3, $ancho_recorte3, $alto_recorte3);
    imagejpeg($recurso_copia3, './imagenes/' . $aleatoreo . '-3.jpg', 100);
    imagedestroy($recurso_copia3);
    imagedestroy($recurso_fuente3);
    //4
    $ruta_imagen4    = './imagenes/' . $varname . '-editar.jpg';
    $ancho_recorte4  = 150;
    $alto_recorte4   = 150;
    $info_fuente4    = getimagesize($ruta_imagen4);
    $tipo_mime4      = $info_fuente4['mime'];
    $recurso_fuente4 = imagecreatefromjpeg($ruta_imagen4);
    $x_recorte4      = 300;
    $y_recorte4      = 0;
    $recurso_copia4  = imagecreatetruecolor($ancho_recorte4, $alto_recorte4);
    imagecopyresampled($recurso_copia4, $recurso_fuente4, 0, 0, $x_recorte4, $y_recorte4, $ancho_recorte4, $alto_recorte4, $ancho_recorte4, $alto_recorte4);
    imagejpeg($recurso_copia4, './imagenes/' . $aleatoreo . '-4.jpg', 100);
    imagedestroy($recurso_copia4);
    imagedestroy($recurso_fuente4);
    //5
    $ruta_imagen5    = './imagenes/' . $varname . '-editar.jpg';
    $ancho_recorte5  = 150;
    $alto_recorte5   = 150;
    $info_fuente5    = getimagesize($ruta_imagen5);
    $tipo_mime5      = $info_fuente5['mime'];
    $recurso_fuente5 = imagecreatefromjpeg($ruta_imagen5);
    $x_recorte5      = 150;
    $y_recorte5      = 0;
    $recurso_copia5  = imagecreatetruecolor($ancho_recorte5, $alto_recorte5);
    imagecopyresampled($recurso_copia5, $recurso_fuente5, 0, 0, $x_recorte5, $y_recorte5, $ancho_recorte5, $alto_recorte5, $ancho_recorte5, $alto_recorte5);
    imagejpeg($recurso_copia5, './imagenes/' . $aleatoreo . '-5.jpg', 100);
    imagedestroy($recurso_copia5);
    imagedestroy($recurso_fuente5);
    //6
    $ruta_imagen6    = './imagenes/' . $varname . '-editar.jpg';
    $ancho_recorte6  = 150;
    $alto_recorte6   = 150;
    $info_fuente6    = getimagesize($ruta_imagen6);
    $tipo_mime6      = $info_fuente6['mime'];
    $recurso_fuente6 = imagecreatefromjpeg($ruta_imagen6);
    $x_recorte1      = 0;
    $y_recorte1      = 0;
    $recurso_copia6  = imagecreatetruecolor($ancho_recorte6, $alto_recorte6);
    imagecopyresampled($recurso_copia6, $recurso_fuente6, 0, 0, $x_recorte6, $y_recorte6, $ancho_recorte6, $alto_recorte6, $ancho_recorte6, $alto_recorte6);
    imagejpeg($recurso_copia6, './imagenes/' . $aleatoreo . '-6.jpg', 100);
    imagedestroy($recurso_copia6);
    imagedestroy($recurso_fuente6);
    // marca de agua
    $vip = $_COOKIE["b4tVIP"];
    if (!($vip == 1)) {
        $image     = './imagenes/' . $aleatoreo . '-1.jpg';
        $watermark = "water.png";
        $im        = imagecreatefrompng($watermark);
        $ext       = substr($image, -3);
        if (strtolower($ext) == "gif") {
            if (!$im2 = imagecreatefromgif($image)) {
                echo "$image!";
                exit;
            }
        } else if (strtolower($ext) == "jpg") {
            if (!$im2 = imagecreatefromjpeg($image)) {
                echo "$image!";
                exit;
            }
        } else if (strtolower($ext) == "png") {
            if (!$im2 = imagecreatefrompng($image)) {
                echo "$image!";
                exit;
            }
        } else {
            die;
        }
        imagecopy($im2, $im, (imagesx($im2) / 2) - (imagesx($im) / 2), (imagesy($im2) / 2) - (imagesy($im) / 2), 0, 0, imagesx($im), imagesy($im));
        imagejpeg($im2, './imagenes/' . $aleatoreo . '-1.jpg', 100);
        imagedestroy($im);
        imagedestroy($im2);
        imagejpeg($im2, './imagenes/' . $aleatoreo . '-1.jpg', 100);
        imagedestroy($im);
        imagedestroy($im2);
        // fin marca de agua
    }
}
if ($_POST["action"] == "upload") {
    if ($_FILES["imagen"]['name'] == "" || $_FILES['imagen']['tmp_name'] == "") {
        header("Location:index.php?status=vacio");
    }
    if (is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
        $varname = $_FILES["imagen"]['name'];
        $vartemp = $_FILES['imagen']['tmp_name'];
        $vartype = mime_content_type($vartemp);
        if (in_array($vartype, $varallw)) {
            $arrname = explode(".", $varname);
            $varname = $varrand . "." . $arrname[1];
            if (copy($vartemp, "imagenes/" . $varname)) {
                $varpath = $varpath . $varname;
                $varstat = "ok";
                adaptar();
                guardar();
            } else {
                $varstat = "Error al subir el archivo";
            }
        } else {
            header("Location:index.php?status=archivo");
        }
    }
}
?>