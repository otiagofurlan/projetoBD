<?php require_once __DIR__ . '/head-html.php'; ?>
            <body>
                <header>
                    <div class="add-item">
                        <a href="/admin">
                            <img src="/img/add.png" alt="">
                        </a>
                    </div>
                    <div class="logout">
                        <a href="/logout">
                            <img src="/img/logout.png" alt="">
                        </a>
                    </div>
                    <?php require_once __DIR__ . '/logo-html.php'; ?>
                </header>
                <main class="main-page">
                    <div class="bootstrap-carousel">
                        <div class="container">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="/img/slide1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="/img/slide2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="/img/slide3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <h1 class="menu-title">Cardápio</h1>
                        <ul class="menu-options">
                            <?php foreach ($productList as $product):?>
                            <li class="menu-item">
                                <?php if($product->getImage()!==null): ?>
                                    <img src="/img/uploads/<?= $product->getImage();?>" alt="" class="img-menu">
                                <?php else:?>
                                    <img src="/img/logo128.png" alt="" class="img-menu">
                                <?php endif; ?>
                                <h3 class="item-title"><?=$product->getName();?></h3>
                                <p class="description"><?=$product->getDescription();?></p>
                                <h4 class="price">R$ <?=$product->getPrice();?></h4>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </main>
<?php require_once __DIR__ . '/end-html.php';