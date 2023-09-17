<?php

namespace QRCodeGenerator;

use chillerlan\QRCode\QRCode as QRCodeLibrary;
require_once __DIR__.'/../vendor/autoload.php';

class QRCode {
    public static function generate($data, $filename) {
        // Générer le QR code
        $qrcode = (new QRCodeLibrary)->render($data);
        $base64Content = str_replace("data:image/png;base64,", "", $qrcode);
        // Décodez les données base64 en binaire
        $imageData = base64_decode($base64Content);
        // Sauvegarder le QR code dans un fichier
        file_put_contents('qrcodes/'.$filename, $imageData);
    }
}
