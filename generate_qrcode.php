<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/qrcodegenerator/qrcode.php';
use QRCodeGenerator\QRCode;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_GET['type'];

    if ($type === 'url') {
        $url = $_POST["url"];
        $filename = 'url_qrcode.png';
        QRCode::generate($url, $filename);
    } elseif ($type === 'geo') {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        $geoData = "geo:$latitude,$longitude";
        $filename = 'geo_qrcode.png';
        QRCode::generate($geoData, $filename);
    } elseif ($type === 'vcard') {
        $name = $_POST["name"];
        $first_name = $_POST["first_name"];
        $company = $_POST["company"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $website = $_POST["website"];
        // Construisez la chaîne de données vCard
        $vcardData = "BEGIN:VCARD\r\n";
        $vcardData .= "VERSION:3.0\r\n";
        $vcardData .= "N:$first_name;$name;;;\r\n";
        $vcardData .= "FN:$first_name $name\r\n";
        $vcardData .= "ORG:$company\r\n";
        $vcardData .= "EMAIL:$email\r\n";
        $vcardData .= "TEL:$phone\r\n";
        $vcardData .= "URL:$website\r\n";
        $vcardData .= "END:VCARD\r\n";
        $filename = 'vcard_qrcode.png';
        QRCode::generate($vcardData, $filename);
    } else {
    }
    echo "<div class='row'>
                <div class='col-6'>
                Le QR code a été généré avec succès. <a href='qrcodes/".$filename."' target='_blank'> Téléchargez-le</a>
                </div>
                <div class='col-6'>
                    <img src='qrcodes/".$filename."' alt='QRCode'>
                </div>
                <div class='col-12'>
                <a href='https://localhost/phpqrcode' target='_blank'>Revenir à la page d'accueil</a>
                </div>
           </div>";
}
?>