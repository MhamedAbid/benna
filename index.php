<!DOCTYPE html>
<html>
    <head>
        <title>benna</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <form action="connect.php"method="post"
    name="connect"></form>
   
    <body>
        <div class="container site">
           
            <h1 class="text-logo"><span class="bi-shop"></span> benna <span class="bi-shop"></span></h1>
            
            <nav>
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab1" role="tab">Menus</a>
                    </li>
                    
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="pill" data-bs-target="#tab3" role="tab">Snacks</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="pill" data-bs-target="#tab4" role="tab">Salades</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="pill" data-bs-target="#tab5" role="tab">Boissons</a>
                    </li>
                    
                </ul>
            </nav>

            <div class="tab-content">

                <div class="tab-pane active" id="tab1" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/m1.png" class="img-fluid" alt="...">
                                <div class="price">8 DT</div>
                                <div class="caption">
                                    <h4>Menu Classic</h4>
                                    <p>Sandwich: Burger, Salade, Tomate, Cornichon + Frites + Boisson</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/m2.png" class="img-fluid" alt="...">
                                <div class="price">10 DT</div>
                                <div class="caption">
                                    <h4>Menu Bacon</h4>
                                    <p>Sandwich: Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/m3.png" class="img-fluid" alt="...">
                                <div class="price">12 DT</div>
                                <div class="caption">
                                    <h4>Menu Big</h4>
                                    <p>Sandwich: Double Burger, Fromage, Cornichon, Salade + Frites + Boisson</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/m4.png" class="img-fluid" alt="...">
                                <div class="price">14 DT</div>
                                <div class="caption">
                                    <h4>Menu Chicken</h4>
                                    <p>Sandwich: Poulet Frit, Tomate, Salade, Mayonnaise + Frites + Boisson</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/m5.png" class="img-fluid" alt="...">
                                <div class="price">16 DT</div>
                                <div class="caption">
                                    <h4>Menu Fish</h4>
                                    <p>Sandwich: Poisson, Salade, Mayonnaise, Cornichon + Frites + Boisson</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/m6.png" class="img-fluid" alt="...">
                                <div class="price">18 DT</div>
                                <div class="caption">
                                    <h4>Menu Double Steak</h4>
                                    <p>Sandwich: Double Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="tab-pane" id="tab3" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/s1.png" class="img-fluid" alt="...">
                                <div class="price">2 DT</div>
                                <div class="caption">
                                    <h4>Frites</h4>
                                    <p>Pommes de terre frites</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/s2.png" class="img-fluid" alt="...">
                                <div class="price">3 DT</div>
                                <div class="caption">
                                    <h4>Onion Rings</h4>
                                    <p>Rondelles d'oignon frits</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/s3.png" class="img-fluid" alt="...">
                                <div class="price">4 DT</div>
                                <div class="caption">
                                    <h4>Nuggets</h4>
                                    <p>Nuggets de poulet frits</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/s4.png" class="img-fluid" alt="...">
                                <div class="price">5 DT</div>
                                <div class="caption">
                                    <h4>Nuggets Fromage</h4>
                                    <p>Nuggets de fromage frits</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/s5.png" class="img-fluid" alt="...">
                                <div class="price">6 DT</div>
                                <div class="caption">
                                    <h4>Ailes de Poulet</h4>
                                    <p>Ailes de poulet Barbecue</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab4" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/sa1.png" class="img-fluid" alt="...">
                                <div class="price">12 DT</div>
                                <div class="caption">
                                    <h4>César Poulet Pané</h4>
                                    <p>Poulet Pané, Salade, Tomate et la fameuse sauce César</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/sa2.png" class="img-fluid" alt="...">
                                <div class="price">12 DT</div>
                                <div class="caption">
                                    <h4>César Poulet Grillé</h4>
                                    <p>Poulet Grillé, Salade, Tomate et la fameuse sauce César</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/sa3.png" class="img-fluid" alt="...">
                                <div class="price">8 DT</div>
                                <div class="caption">
                                    <h4>Salade Light</h4>
                                    <p>Salade, Tomate, Concombre, Maïs et Vinaigre balsamique</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/sa4.png" class="img-fluid" alt="...">
                                <div class="price">10 DT</div>
                                <div class="caption">
                                    <h4>Poulet Pané</h4>
                                    <p>Poulet Pané, Salade, Tomate et la sauce de votre choix</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/sa5.png" class="img-fluid" alt="...">
                                <div class="price">10 DT</div>
                                <div class="caption">
                                    <h4>Poulet Grillé</h4>
                                    <p>Poulet Grillé, Salade, Tomate et la sauce de votre choix</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab5" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/bo1.png" class="img-fluid" alt="...">
                                <div class="price">2 DT</div>
                                <div class="caption">
                                    <h4>Coca-Cola</h4>
                                    <p>Au choix: Petit, Moyen ou Grand</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/bo2.png" class="img-fluid" alt="...">
                                <div class="price">2 DT</div>
                                <div class="caption">
                                    <h4>Coca-Cola Light</h4>
                                    <p>Au choix: Petit, Moyen ou Grand</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/bo3.png" class="img-fluid" alt="...">
                                <div class="price">2 DT</div>
                                <div class="caption">
                                    <h4>Coca-Cola Zéro</h4>
                                    <p>Au choix: Petit, Moyen ou Grand</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/bo4.png" class="img-fluid" alt="...">
                                <div class="price">2 DT</div>
                                <div class="caption">
                                    <h4>Fanta</h4>
                                    <p>Au choix: Petit, Moyen ou Grand</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/bo5.png" class="img-fluid" alt="...">
                                <div class="price">2 DT</div>
                                <div class="caption">
                                    <h4>Sprite</h4>
                                    <p>Au choix: Petit, Moyen ou Grand</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="images/bo6.png" class="img-fluid" alt="...">
                                <div class="price">2 DT</div>
                                <div class="caption">
                                    <h4>Nestea</h4>
                                    <p>Au choix: Petit, Moyen ou Grand</p>
                                    <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
    </body>
</html>
