<?php

    $nome = '';
    $email = '';
    $telefone = '';
    $msg = '';
    $msgOk = '';

    if(isset($_POST['btnEnviar'])){
        $nome = ltrim(trim($_POST['nome']));
        $email = ltrim(trim($_POST['email']));
        $telefone = ltrim(trim($_POST['tele']));
        $msg = ltrim(trim($_POST['msg']));

        if($nome == '' || $email == '' || $telefone == '' || $msg == ''){
            $msgOk = '<span class="msgRetornoError">Preencher todos os campos obrigatórios!</span>';
        }else{
            $msgOk = '<span class="msgRetornoSuccess">Mensagem enviada com Sucesso!</span>';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once './includes/_head.php'; ?>
    <script src="./js/validar.js"></script>
    <title>Contato - WM</title>
</head>
<body>
    <!-- Inclusão via PHP do HEADER HTML da página! -->
    <?php include_once './includes/_header.php'; ?>
    
    <main id="containerContato">
        <div class="wrap layoutContato">
            <div>
                <h1>Contato</h1>
                <p>Envie uma mensagem, tire suas dúvidas ou faça um orçamento.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                
                <div class="googleMapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.8969843001373!2d-51.17864575007704!3d-23.319496158513928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94eb4313ff0ee975%3A0x1c33d6cf3ae5b478!2sWMBarros%20Treinamento%20em%20TI%20Cursos%20PHP%2C%20C%23%2C%20GAMES%2C%20Wordpress!5e0!3m2!1spt-BR!2sbr!4v1669463151899!5m2!1spt-BR!2sbr" class="setMap" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="boxForm">
                <form action="contato.php" method="POST" class="formContato" name="form" onsubmit="return ValidarCampos()">
                    <label>Nome:</label>
                    <input type="text" name="nome" id="nomeInput" placeholder="Digite seu Nome aqui..." value="<?= $nome ?>">
                    <label>E-mail:</label>
                    <input type="email" name="email" id="emailInput" placeholder="Digite seu E-mail aqui..." value="<?= $email ?>">
                    <label>Telefone (WhatsApp):</label>
                    <input type="text" name="tele" id="teleInput" placeholder="Digite seu Telefone aqui..." value="<?= $telefone ?>">
                    <label>Mensagem:</label>
                    <textarea name="msg" id="msgTxt" placeholder="Digite sua Mensagem aqui..." value="<?= $msg ?>"></textarea>
                    <button name="btnEnviar" class="btnEnviar">ENVIAR</button>
                </form>
            </div>
        </div>

        <div style="text-align: center;">
            <span><?= $msgOk ?></span>
        </div>
    </main>

    <!-- Inclusão via PHP do FOOTER HTML da página! -->
    <?php include_once './includes/_footer.php'; ?>
</body>
</html>