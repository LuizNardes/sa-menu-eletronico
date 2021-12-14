<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- botao dos icones-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/styleMenu.css">
        <title>Tech Food And Beer</title>
  </head>
    <body>
    <div class="d-flex" id="wrapper">
        <!-- sidebar - MENU-->    
        <div class="bg-black" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-book-open"></i> Menu 
            </div>
        <div class="list-group list-group-flush my-3">
       
            <a href="menuMaispedidos.php" class="list-group-item list-group-iten-action bg-transparent second-text fw-bold">
                <i class="fas fa-grin-hearts"></i> Mais pedidos </a>
            <a href="menuLanches.php" class="list-group-item list-group-iten-action bg-transparent second-text fw-bold">
                <i class="fas fa-hamburger"></i> Lanches </a>
            <a href="menuPorcoes.php" class="list-group-item list-group-iten-action bg-transparent second-text fw-bold">
                <i class="fas fa-hamburger"></i> Porções </a>
            <a href="menuDrinks.php" class="list-group-item list-group-iten-action bg-transparent second-text fw-bold">
                <i class="fas fa-cocktail me-2"></i> Drinks </a>
            <a href="menuChopps.php" class="list-group-item list-group-iten-action bg-transparent second-text fw-bold">
                <i class="fas fa-beer me-2"></i> Chopps </a>
            <a href="menuSucos.php" class="list-group-item list-group-iten-action bg-transparent second-text fw-bold">
                <i class="fas fa-glass-martini"></i> Sucos </a>
            <a href="menuSobremesa.php" class="list-group-item list-group-iten-action bg-transparent second-text fw-bold">
                <i class="fas fa-ice-cream me-2"></i> Sobremesa </a>
            <a href="login.php" class="list-group-item list-group-iten-action bg-transparent second-text fw-bold">
                <i class="fas fa-power-off me-2"></i> Logout </a>
        </div>
    </div>
    <!--  /#sidebar-wrapper -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex aling-itens-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="name fs-2 m-0">Tech Food And Beer</h2>
            </div>
            <button class="navbar-toggler" type="button"data-bs-toggle="collpase"
            data-bs-target="#navebarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-iten dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navebarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Username
                            </a> 
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a< class="dropdown-item" href="#">Profile</a></li>
                                <li><a< class="dropdown-item" href="#">Settings</a></li>
                                <li><a< class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> 
        </nav>
        <!--criando cards-->
        <div class="container-fluid px-2">
           
        <ul class="botoes_pills nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-lanches-tab" data-bs-toggle="pill" data-bs-target="#pills-lanches" type="button" role="tab" aria-controls="pills-lanches" aria-selected="true">Lanches</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-porcoes" data-bs-toggle="pill" data-bs-target="#pills-porcoes" type="button" role="tab" aria-controls="pills-porcoes" aria-selected="false">Porções</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-drinks" data-bs-toggle="pill" data-bs-target="#pills-drinks" type="button" role="tab" aria-controls="pills-drinks" aria-selected="false">Drinks</button>
                </li>
                <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-cerveja" data-bs-toggle="pill" data-bs-target="#pills-cerveja" type="button" role="tab" aria-controls="pills-cerveja" aria-selected="false">Chopps</button>
                </li>
                <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-refri" data-bs-toggle="pill" data-bs-target="#pills-refri" type="button" role="tab" aria-controls="pills-refri" aria-selected="false">Sucos/Refrigerentes</button>
                </li>
                <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-sobremesa" data-bs-toggle="pill" data-bs-target="#pills-sobremesa" type="button" role="tab" aria-controls="pills-sobremesa" aria-selected="false">Sobremesas</button>
                </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-lanches" role="tabpanel" aria-labelledby="pills-lanches-tab">
                        <div class="card-group">
                            <div class="card">
                                <img src="dist/images/card_lanche1.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Tech Burguer</h5>
                                <p class="card-text">Delicioso Hamburguer caseiro de picanha de 180g, pão e queijo cheddar, maionese da casa.</p>
                                <p class="card-text"><small class="text-muted">R$ 28.90</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="dist/images/card_lanche2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">CSS Salad</h5>
                                <p class="card-text">Fantástico Hamburguer caseiro de 130g, alface, tomate, picles, queijo prato, maionese da casa.</p>
                                <p class="card-text"><small class="text-muted">R$ 24.90</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="dist/images/card_lanche3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Java Monster</h5>
                                <p class="card-text">Monstruoso Hamburguer caseiro de contra-filé de 180g, cebola caramelizada, bacon em tiras, maionese da casa.</p>
                                <p class="card-text"><small class="text-muted">R$ 31.90</small></p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-porcoes" role="tabpanel" aria-labelledby="pills-porcoes-tab">
                        <div class="tab-pane fade show active" id="pills-porcoes" role="tabpanel" aria-labelledby="pills-porcoes-tab">
                                <div class="card-group">
                                    <div class="card">
                                        <img src="dist/images/card_porcao1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Card Heart</h5>
                                        <p class="card-text">A melhor Fritas com coração da city, acompanha molho especial.</p>
                                        <p class="card-text"><small class="text-muted">R$ 39.90</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="dist/images/card_porcao2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Style BK</h5>
                                        <p class="card-text">Uma crocante porção de fritas com bacon e queijo, acompanha molho especial.</p>
                                        <p class="card-text"><small class="text-muted">R$ 42.90</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="dist/images/card_porcao3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Mixed Class</h5>
                                        <p class="card-text">Um mistão pros friends, fritas, alcatra, frango, bacon, coração, calabreza, acompanha maionese da casa e molho especial.</p>
                                        <p class="card-text"><small class="text-muted">R$ 79.90</small></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-drinks" role="tabpanel" aria-labelledby="pills-drinks-tab">
                        <div class="tab-pane fade show active" id="pills-drinks" role="tabpanel" aria-labelledby="pills-drinks-tab">
                                <div class="card-group">
                                    <div class="card">
                                        <img src="dist/images/card_drink1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Mojito Success</h5>
                                        <p class="card-text">Coquetel a base de Rum branco, leva suco de limão, açucar e hortelã.</p>
                                        <p class="card-text"><small class="text-muted">R$ 21.90</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="dist/images/card_drink2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Info Arco</h5>
                                        <p class="card-text">Coquetel a base de Vodka, suco de groselia e suco de limão.</p>
                                        <p class="card-text"><small class="text-muted">R$ 21.90</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="dist/images/card_drink3.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Strawberry Body</h5>
                                        <p class="card-text">Coquetel a base Cachaça, morango, suco e raspas de limão.</p>
                                        <p class="card-text"><small class="text-muted">R$ 24.90</small></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-cerveja" role="tabpanel" aria-labelledby="pills-cerveja-tab">
                        <div class="tab-pane fade show active" id="pills-cerveja" role="tabpanel" aria-labelledby="pills-cerveja-tab">
                                <div class="card-group">
                                    <div class="card">
                                        <img src="dist/images/card_chopp1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Pills Wine</h5>
                                        <p class="card-text">Um Chopp de vinho para ninguém colocar defeito.</p>
                                        <p class="card-text"><small class="text-muted">R$ 15.90</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="dist/images/card_chopp2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Id Weiss</h5>
                                        <p class="card-text">Chopp de Trigo levemente frutado, perfeito para uma segunda-feira.</p>
                                        <p class="card-text"><small class="text-muted">R$ 16.90</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="dist/images/card_chopp3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Ipa Element</h5>
                                        <p class="card-text">Chopp com uma textura encorpada ideal para pedir junto com Java Monster, fica a dica! .</p>
                                        <p class="card-text"><small class="text-muted">R$ 19.90</small></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-refri" role="tabpanel" aria-labelledby="pills-refri-tab">
                        <div class="tab-pane fade show active" id="pills-refri" role="tabpanel" aria-labelledby="pills-refri-tab">
                                <div class="card-group">
                                    <div class="card">
                                        <img src="dist/images/card_refri1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Coca-Cola</h5>
                                        <p class="card-text">Coca-Cola lata geladaaaa.</p>
                                        <p class="card-text"><small class="text-muted">R$ 6.00</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="dist/images/card_refri2.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Guaraná-Antárctica</h5>
                                        <p class="card-text">Guaraná lata, trincando.</p>
                                        <p class="card-text"><small class="text-muted">R$ 6.00</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="dist/images/card_suco1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Orange Warning</h5>
                                        <p class="card-text">Suco de laranja natural, com cascas de limão e gelo.</p>
                                        <p class="card-text"><small class="text-muted">R$ 7.90</small></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>

                <div class="tab-pane fade" id="pills-sobremesa" role="tabpanel" aria-labelledby="pills-sobremesa-tab">
                        <div class="tab-pane fade show active" id="pills-sobremesa" role="tabpanel" aria-labelledby="pills-sobremesa-tab">
                                <div class="card-group">
                                    <div class="card">
                                        <img src="dist/images/card_sobremesa1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Petit Gateau</h5>
                                        <p class="card-text">Bolo crocante, com recheio de chocolate, acompanha sorvete de baunilha.</p>
                                        <p class="card-text"><small class="text-muted">R$ 26.90</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="dist/images/card_sobremesa2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Açaí</h5>
                                        <p class="card-text">Açai cremoso com até 3 complementos, escolha entre... .</p>
                                        <p class="card-text"><small class="text-muted">R$ 19.00</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="dist/images/card_sobremesa3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Pudim Rounded</h5>
                                        <p class="card-text">Pudim de leite, com calda de caramelo, um clássico que sempre é uma boa pedida.</p>
                                        <p class="card-text"><small class="text-muted">R$ 14.90</small></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>

            <!--carosel-->
            <div class="row my-5">
                    <h3 class="name fs-">Mais pedidos</h3>
                    <div class="col-8">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="dist/images/card_chopp2.jpg" height="500" width="200" class="d-block w-100 rounded" alt="...">
                                    <p class="descricao">Id Weiss</p>
                                    </div>
                                    <div class="carousel-item">
                                    <img src="dist/images/card_lanche3.jpg" height="500" width="200" class="d-block w-100 rounded" alt="...">
                                    <p class="descricao">Java Monster</p>
                                    </div>
                                    <div class="carousel-item">
                                    <img src="dist/images/card_porcao3.jpg" height="500" width="200" class="d-block w-100 rounded" alt="...">
                                    <p class="descricao">Mixed Class</p>
                                    </div>
                                    <div class="carousel-item">
                                    <img src="dist/images/card_drink1.jpg" height="500" width="200" class="d-block w-100 rounded" alt="...">
                                    <p class="descricao">Mojito Success</p>
                                    </div>
                                    <div class="carousel-item">
                                    <img src="dist/images/card_sobremesa3.jpg" height="500" width="200" class="d-block w-100 rounded" alt="...">
                                    <p class="descricao">Açaí</p>
                                    </div>
                                </div>
                            </div> 
                    </div>
                
            </div>
        </div>
        
        
    </div>
    <!--fim page content-->
    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");
        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        }
    </script>
    <!--rodapé-->
    <footer>
        <p><span class="bold">Tech Food And Beer</span></p>
        &copy; 2021
    </footer>
    </body>
</html>