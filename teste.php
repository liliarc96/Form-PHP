<!DOCTYPE html>
<html>
<body>

<form method = 'post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nome: <input type = 'text' name = 'nome'> <br><br>
    Gênero:
    <input type = 'radio' name = 'genero' value = 'mulher'> Mulher
    <input type = 'radio' name = 'genero' value = 'homem'> Homem <br><br>
    E-mail: <input type = 'text' name = 'email'> <br><br>
    <input type = 'submit'>
</form>

<?php
date_default_timezone_set("America/Recife");
echo "<br>A data de hoje é " . date("d/m/Y"); 
echo "<br>A hora atual é " .date("H:i"). "<br>";

function test_imput($dado){
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = test_imput($_POST['nome']);
    $email = test_imput($_POST['email']);
    $genero = test_imput($_POST['genero']);

    if(empty($name) && empty($email) && empty($genero)){
        echo '<br>Existem campos vazios.';
    }else{
        echo '<br>O nome é ' . $name . '.';
        echo '<br>O e-mail é ' . $email . '.';
        echo '<br>Seu gênero é ' . $genero . '.';
    }
}

?>

</body>
</html>