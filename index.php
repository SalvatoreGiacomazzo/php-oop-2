<?php
include_once 'Classes/Articles.php';
include_once 'Classes/Category.php';
include_once 'Classes/Food.php';
include_once 'Classes/Toys.php';
include_once 'Classes/Beds.php';



//all articles
$allArticles = [];


//articoli bed
$bedArticles = [
    new Beds('Cuccetta elegante', 'https://images-na.ssl-images-amazon.com/images/I/81rxJWD0oDL._AC_SL1500_.jpg', 25.99, $catEgory, 'Small'),
    new Beds('Rifugio rustico', 'https://www.deabyday.tv/dam/jcr:13a4ca43-137a-4109-b30a-5afe6cd427f5/cuccia-con-veranda-in-legno.2020-12-01-20-05-30', 400.99, $dogCategory, 'XXL'),
    new Beds('Cuccia da esterno', 'https://treview.it/wp-content/uploads/2023/01/Cuccia-da-esterno-per-gatto-1230x615.jpg', 35.45, $catEgory, 'M')
];
//articoli food
$foodArticles = [
    new Food('Creazioni speciali umido', 'https://www.libero.it/shopping/wp-content/uploads/2021/07/cibo-umido-per-gatti_sheba.jpg,', 3.99, $catEgory, 'Coniglio, anatra e verdure'),
    new Food('Friskies croccantini', 'https://m.media-amazon.com/images/I/41aoRbFoZSL.jpg', 29.99, $dogCategory, '100% Carne Italiana'),
    new Food('Erba Gatta Geande Orto', 'https://media.adeo.com/marketplace/LMIT/81252296/197713.jpeg', 14.99, $catEgory, 'High Quality Catnip'),
];
//articoli toy
$toyArticles = [
    new Toys('Kong Extreme', 'https://cdn.geapetshop.it/uploads/2020/12/4956.jpg', 6.80, $dogCategory, 'Indistruttibile.'),
    new Toys('Tiragraffi labirintico', 'https://www.tigri-domestiche-shop.it/3240-thickbox_default/tiragraffi-per-gatti-ex-8.jpg', 249.99, $catEgory, 'Preferirà una scatola.'),
    new Toys('Gioco in corda', 'https://contents.mediadecathlon.com/p2355658/k$60b684ce01bc8888d1b8c1e59c417c43/sq/giocattolo-cane-corda-stella-33-cm.jpg?format=auto&f=800x0', 12.80, $dogCategory, 'Strattonare? No Problem.'),
];



$allArticles = array_merge($bedArticles, $foodArticles, $toyArticles);


//var_dump($allArticles);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop E-commerce</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Css--->
    <link rel="stylesheet" href="./general-style/style.css">
</head>

<body>
    <header>
        <h1 class="d-flex justify-content-center align-items-center text-primary"> OOP Pet Shop</h1>
    </header>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="Card image 1">
                    <div class="card-body">
                        <h5 class="card-title">Card title 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src=".." class="card-img-top" alt="Card image 2">
                    <div class="card-body">
                        <h5 class="card-title">Card title 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="Card image 3">
                    <div class="card-body">
                        <h5 class="card-title">Card title 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="Card image 4">
                    <div class="card-body">
                        <h5 class="card-title">Card title 4</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="Card image 5">
                    <div class="card-body">
                        <h5 class="card-title">Card title 5</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="Card image 6">
                    <div class="card-body">
                        <h5 class="card-title">Card title 6</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="Card image 7">
                    <div class="card-body">
                        <h5 class="card-title">Card title 7</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="Card image 8">
                    <div class="card-body">
                        <h5 class="card-title">Card title 8</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="Card image 9">
                    <div class="card-body">
                        <h5 class="card-title">Card title 9</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>