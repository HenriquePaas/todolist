
<?php

    session_start();
    $_SESSION['atividades'][] = $_GET['atividade'];
?>

<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>TODOLIST</title>

</head>
<body>

    <form action="" method ="get">
        <input type="text" name="atividade" placeholder="Digite uma Atividade">
        <input type="submit" value="ENVIAR" >
    </form>

    <h2> LISTA DE ATIVIDADE </h2>

    <OL>
    <?php foreach($_SESSION['atividades'] as $ativ): ?>

        <LI><?= $ativ; ?></LI>

    <?php endforeach; ?>
    </OL>

</body>
</html>
