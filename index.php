<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/style.css">
    <title>ERP 0.1</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4">
                    <h1>ERP 0.1</h1>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </div>
                <div class="col-sm-4">
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libellé</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Modèle</th>
                    <th scope="col">Année</th>
                    <th scope="col">Kilomètres</th>
                    <th scope="col">Couleur</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Stock</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Pare-choc AV</td>
                    <td>Peugeot</td>
                    <td>307</td>
                    <td>2001</td>
                    <td>225000</td>
                    <td>Vert</td>
                    <td>80</td>
                    <td>En stock</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Hayon coffre</td>
                    <td>Volkswagen</td>
                    <td>Polo</td>
                    <td>2017</td>
                    <td>15000</td>
                    <td>Noir</td>
                    <td>150</td>
                    <td>Vendu</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Intérieur tissus</td>
                    <td>Peugeot</td>
                    <td>306</td>
                    <td>1999</td>
                    <td>225000</td>
                    <td>Blanche</td>
                    <td>200</td>
                    <td>En stock</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="dist/js/script.js"></script>
</body>
</html>