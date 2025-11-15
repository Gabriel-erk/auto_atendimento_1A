<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Autoatendimento</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <header>
        <nav>
            <h1><img src="img/logo/logo_unimar.png" class="logo" alt="Logo do Sistema de Autoatendimento"></h1>
        </nav>
    </header>

    <main class="container">
        <div class="texto-login">
            <h2>Login</h2>
            <p>Preencha os campos abaixo para acessar.</p>
            <p>Ou você pode se <a href="cadastro.html" style="font-size: var(--font-size-base);">Registrar aqui!</a></p>
        </div>

        <div class="formulario-login">
            <form id="formlogin" method="POST">
                <div class="input-group">
                    <label for="cpf" class="input-label">CPF</label>
                    <div class="input-wrapper">
                        <img src="img/login/icone/envelope.svg" alt="Ícone de envelope" class="input-icon">
                        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="password" class="input-label">Senha</label>
                    <div class="input-wrapper">
                        <img src="img/login/icone/senha.svg" alt="Ícone de cadeado" class="input-icon">
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div id="invalido">
                        <!-- esta div está vazia por que dentro dela vai aparecer a mensagem de erro no login caso ocorra-->
                    </div>
                </div>

                <button type="submit" class="btn-login">Login</button>
            </form>
        </div>
        <div class="redes-sociais">
            <div class="titulo">
                <h4>Ou continue com</h4>
            </div>
            <div class="icones">
                <a href="https://facebook.com"><img src="img/login/redes_sociais/facebook_logo.svg"
                        alt="Ícone do Facebook" class="icone-social"></a>
                <a href="https://apple.com"><img src="img/login/redes_sociais/logo_apple.svg" alt="Ícone do LinkedIn"
                        class="icone-social"></a>
                <a href="https://google.com"><img src="img/login/redes_sociais/logo_google_2.svg" alt="Ícone do Google"
                        class="icone-social"></a>
            </div>
        </div>

    </main>

</body>
<script type="module" src="js/login.js"></script>

</html>
