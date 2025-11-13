<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essenciais - Sistema de Autoatendimento</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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
            <h2>Essenciais</h2>
            <p>Para conhecermos um pouco mais de você e personalizar seu atendimento!</p>
        </div>

        <div class="formulario-login">
            <form action="">
                <div class="input-group">
                    <label for="data_nascimento" class="input-label">Data de nascimento</label>
                    <div class="input-wrapper">
                        <img src="img/essenciais/icone/calendar.svg" alt="Ícone de calendário" class="input-icon">
                        <input type="date" id="data_nascimento" name="data_nascimento" placeholder="DD/MM/AAAA"
                            required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="genero" class="input-label">Gênero</label>
                    <div class="input-wrapper">
                        <img src="img/essenciais/icone/gender-intersex.svg" alt="Ícone de genero" class="input-icon">

                        <div class="generos">

                            <div>
                                <input type="radio" id="homem" name="drone" value="homem" />
                                <label for="homem">Homem</label>
                            </div>

                            <div>
                                <input type="radio" id="mulher" name="drone" value="mulher" />
                                <label for="mulher">Mulher</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <label for="tipo_sanguineo" class="input-label">Tipo sanguíneo</label>
                    <div class="input-wrapper">
                        <img src="img/essenciais/icone/drop-simple.svg" alt="Ícone de gota de sangue"
                            class="input-icon">
                        <select name="tipo_sanguineo" id="tipo-sanguineo-select">
                            <option value="">Por favor selecione</option>
                            <option value="a_pos">A+</option>
                            <option value="a_neg">A-</option>
                            <option value="b_pos">B+</option>
                            <option value="b_neg">B-</option>
                            <option value="ab_pos">AB+</option>
                            <option value="ab_neg">AB-</option>
                            <option value="o_pos">O+</option>
                            <option value="o_neg">O-</option>
                        </select>
                    </div>
                </div>

                <div class="input-group">
                    <label for="condicao_preexistente" class="input-label">Condição pré-existente</label>
                    <div class="input-wrapper">
                        <img src="img/essenciais/icone/syringe.svg" alt="Ícone de seringa" class="input-icon">
                        <input type="textarea" id="condicao_preexistente" name="condicao_preexistente"
                            placeholder="Digite sua condição pré-existente" required>
                    </div>
                </div>

                <button type="submit" class="btn-login"><a href="home.html">Cadastrar</a></button>

            </form>

        </div>
    </main>
</body>

</html>
