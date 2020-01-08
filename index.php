<?php
    require 'class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QCM POO</title>
</head>
<body>
<h1>QCM</h1>
    <div>
        <form action="" method="POST">
            <p>Qu'est ce qu'un objet?</p><br>
            <label for=""><input type="radio" value="no" name="objet">Un truc;</label> <br>
            <label for=""><input type="radio" value="yes" name="objet">Un conteneur symbolique qui contient des informations et des mécanismes;</label><br>
            <label for=""><input type="radio" value="no" name="objet">De la merde;</label><br>
            <label for=""><input type="radio" value="no" name="objet">L'avenir de l'humanité.</label><br><br>
            <input type="submit" name="submit" value="Valider"><br><br>
        </form>
        <?php
            if(isset($_POST['objet']) && isset($_POST['submit'])){
                
                $good = new Validate($_POST['objet'], $_POST['submit']);
                $res = $good->response();
                echo $res;	
                }else{
                    echo'Vous devez cocher au moins une case par question';
                }
        ?>
        <br>
        <form action="" method="POST">
            <p>Que veut dire instancier une class?</p><br>
            <label for=""><input type="radio" value="no" name="class">Un truc;</label> <br>
            <label for=""><input type="radio" value="no" name="class">De la merde;</label><br>
            <label for=""><input type="radio" value="no" name="class">L'avenir de l'humanité.</label><br>
            <label for=""><input type="radio" value="yes" name="class">Un conteneur symbolique qui contient des informations et des mécanismes;</label><br><br>
            <input type="submit" name="submit" value="Valider">
        </form>
        <?php
            if(isset($_POST['class']) && isset($_POST['submit'])){
                
                $good = new Validate($_POST['class'], $_POST['submit']);
                $res = $good->response();
                echo $res;	
                }else{
                    echo'Vous devez cocher au moins une case par question';
                }
        ?>
    </div>  
</body>
</html>