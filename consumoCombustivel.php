<!DOCTYPE html>
<html>
<body>
<form method = 'post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Distância total percorrida: <input type ='text' name = 'x'/> Km<br><br> 
    Ombustível gasto: <input type ='text' name = 'y'/> L<br><br>
<input type = 'submit'/><br><br>
</form>

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $x = $_POST['x'];
            $y = $_POST['y'];

            echo 'O consumo médio do automóvel é de ' . round($x/$y, 3) . ' Km/L.';
        }

?>
</body>
</html>
