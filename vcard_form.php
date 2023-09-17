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
        <h1>Générateur de QR Code Carte de Visite</h1>
        <form method="POST" action="generate_qrcode.php?type=vcard">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="first_name" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Société</label>
                <input type="text" class="form-control" id="company" name="company" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Courriel</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Site web</label>
                <input type="url" class="form-control" id="website" name="website">
            </div>
            <button type="submit" class="btn btn-primary">Générer le qrcode</button>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
