<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiDoacões</title>
</head>
<body style="text-align: center;">
    <?php 
    require_once 'includes/lojas.php';
    $id2 = $_GET['i'] ?? 1;
    if ($l->query("UPDATE doacoes SET totdoacoes = totdoacoes + 1 WHERE id = $id2") == true){
        echo "<h1>Aprovado</h1><img src='https://upload.wikimedia.org/wikipedia/commons/8/84/Approved_img.png' alt=''><p>Doação feita com sucesso</p>";
    } else {
        echo 'error';
    }
    ?>
</body>
</html>