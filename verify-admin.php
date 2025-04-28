<?php require_once 'head-html.php' ?>
<body>
    <main>
        <div class="div-form">
        <?php require_once 'logo-html.php' ?>
            <h2 class="verify-message">Insira os dados novamente</h2>
            <form action="admin.php" class="form">
                <label class="label-form" for="">Email:</label>
                <input class="input-form" type="text" name="email">
                <label class="label-form" for="">Senha:</label>
                <input class="input-form" type="password" name="password">
                <button class="btn-form">Entrar</button>
            </form>
        </div>
    </main>
<?php require_once 'end-html.php' ?>
