# Générateur de Codes QR

Ce générateur de codes QR simple vous permet de créer des codes QR à partir de données telles que des URL, des coordonnées GPS (Geo), et des cartes de visite (vCard). L'application est écrite en PHP et utilise la bibliothèque `chillerlan/php-qrcode` pour la génération des codes QR.

## Configuration

1. Assurez-vous d'avoir PHP 7.4 ou une version ultérieure installée sur votre serveur.

2. Installez les dépendances en exécutant la commande `composer install`.

## Utilisation

1. Clonez ce dépôt sur votre serveur ou téléchargez-le.

2. Configurez votre serveur Web (comme Apache ou Nginx) pour servir les fichiers PHP.

3. Accédez à l'application dans votre navigateur en utilisant l'URL appropriée (généralement : http://localhost/phpqrcode/)

4. Sélectionnez le type de code QR que vous souhaitez générer (URL, Geo, vCard).

5. Remplissez les informations requises dans le formulaire.

6. Cliquez sur le bouton "Générer le QR code".

7. Le code QR généré sera affiché et enregistré en tant que fichier image (PNG) dans le dossier "qrcodes".

## Structure du Projet

- `index.php`: Point d'entrée de l'application, gère le formulaire et la génération des codes QR.
- `qrcodegenerator/qrcode.php`: Classe personnalisée pour générer les codes QR à l'aide de la bibliothèque externe.
- `qrcodes/`: Dossier où les codes QR générés sont enregistrés en tant que fichiers PNG.
- `vendor/`: Dossier contenant les dépendances PHP installées via Composer.

## Auteur

Ce générateur de codes QR a été développé par Mohamed Benguerraiche et est sous licence GPL3.

