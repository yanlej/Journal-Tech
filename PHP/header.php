<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Journal Tech</title>
</head>

<header>
    <div class="container-fluid">
        <div class="row">
            <h1 class="col-9 offset-3 h1Header">Journal Tech</h1>
            <h3 class="col-4 h3Header">Veille Technologique</h3>
        </div>

        <div class="row">
            <div class="col-2 offset-1">
                <a href ="Publier.php"><button class="btn buttonHeader">Publier</button></a>
            </div>
            <div class="col-2">
                <a href ="index.php"><button class="btn buttonHeader">Articles</button></a>
            </div>
            <div class="col-2 btn-group">
                <button class="btn buttonHeader dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Catégories</button>
            
                                <ul class="dropdown-menu">
                                    <li><a class ="dropdown-item" href ="#">CSS</a></li>
                                    <li><div class="dropdown-divider"></div></li>
                                    <li><a class ="dropdown-item" href ="#">JS</a></li>
                                    <li><div class="dropdown-divider"></div></li>
                                    <li><a class ="dropdown-item" href ="#">PHP</a></li>
                                </ul>
                
            </div>
    </div>

</header>