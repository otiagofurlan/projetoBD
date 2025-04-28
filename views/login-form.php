<?php require_once __DIR__ . '/head-html.php'; ?>
<body>
    <main>
        <div class="div-form">
        <?php require_once __DIR__ . '/logo-html.php'; ?>
            <form class="form" method="post">
                <label class="label-form" for="">Email:</label>
                <input class="input-form" type="email" name="email">
                <label class="label-form" for="">Senha:</label>
                <input class="input-form" type="password" name="password">
                <button class="btn-form" type="submit">Entrar</button>
            </form>
            <p>Não tem uma conta ainda? <a href="/register-user">Cadastre-se!</a></p>
        </div>
    </main>
<?php require_once __DIR__ . '/end-html.php'; ?>