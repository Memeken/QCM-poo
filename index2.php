<!DOCTYPE html>

<?php include 'Ask.php'; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method='POST'>
    <?php
        for ($i=0; $i<3; $i++){
            $first = new Ask($i);
            $first-> createQuestion();
        } 
    ?>
    <button type='submit' name='submit' id='submit'>Valider</button>
</form>

<div id="score">
<?php 
    if (isset($_POST['submit'])){
        $_SESSION['score']=0;
        for ($i=0; $i<3; $i++){
            if (isset($_POST['answer'.$i])){
                if ($_POST['answer'.$i]==1){
                    $_SESSION['score']++;
                }
            }
            else {
                $x=$i+1;
                echo "réponds à la question $x, canard<br>";
                return;
            }
        }
        echo $_SESSION['score'];
    };
?>
</div>

</body>
</html>