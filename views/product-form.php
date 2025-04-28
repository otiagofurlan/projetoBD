<?php
require_once __DIR__ . '/head-html.php'; ?>
<body>
    <header>
        <div class="back back-form">
            <a href="/admin">
                <img src="/img/back.png" alt="">
            </a>
        </div>
        <div class="logout logout-form">
            <a href="/logout">
                <img src="/img/logout.png" alt="">
            </a>
        </div>
    </header>
    <main>
        <div class="div-form">
        <?php require_once __DIR__ . '/logo-html.php'; ?>
            <form method="post" class="form" enctype="multipart/form-data">
                <label class="label-form" for="name">Nome:</label>
                <input class="input-form" type="text" name="name" value="<?= $product?->name; ?>">
                
                <label class="label-form" for="description">Descrição:</label>
                <textarea class="input-form" name="description"><?= $product?->description; ?></textarea>
                

                <label class="label-form" for="price">Preço:</label>
                <input class="input-form" type="text" name="price" value="<?= $product?->price; ?>">
                
                <label class="label-form" for="image">Imagem:</label>
                <input class="input-form" type="file" name="image" accept="image/*">
                
                <button class="btn-form" type="submit">Enviar</button>
            </form>
        </div>
    </main>
<?php require_once __DIR__ . '/end-html.php';