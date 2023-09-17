<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de QR Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="container-fluid mt-5">
            <h1>Générateur de QR Code</h1>
            <ul class="page-links">
                <li><a href="url_form.php">QR Code URL</a></li>
                <li><a href="geo_form.php">QR Code Géolocalisation</a></li>
                <li><a href="vcard_form.php">QR Code Carte de Visite</a></li>
            </ul>
        </div>
    </header>
    <div class="container mt-5">
        <h1>Générateur de QR Code URL</h1>
        <form method="POST" action="generate_qrcode.php?type=url">
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="url" class="form-control" id="url" name="url" required>
            </div>
            <button type="submit" class="btn btn-primary">Générer le QR code</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
