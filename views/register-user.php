<?php require_once 'head-html.php' ?>
<body>
    <main>
        <div class="div-form">
        <?php require_once 'logo-html.php' ?>
            <form class="form" method="post">
                <label class="label-form" for="name">Nome:</label>
                <input required class="input-form" type="text" name="name">
                <label class="label-form" for="">Email:</label>
                <input required class="input-form" type="text" name="email">
                <label class="label-form" for="">Senha:</label>
                <input required class="input-form" type="password" name="password">
                <button class="btn-form">Cadastrar</button>
            </form>
        </div>
    </main>
<?php require_once 'end-html.php' ?>
