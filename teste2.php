<!DOCTYPE html>
<html>
<body>
<form method = 'post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Idade em dias: <input type ='number' name = 'dias'/><br><br>
<input type = 'submit'/>
</form>

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $dias = $_POST['dias'];
            if(empty($dias)){
                echo 'Campo vazio!';
            }else{
                switch($dias){
                    case ($dias >= 360):
                        echo '<br>A pessoa tem ' . intval($dias/360) . ' anos e ';
                    case ($dias < 360 && $dias >=30):
                         echo intval(($dias % 360)/30) . ' meses.';
                        break;
                    default:
                        echo 'Erro.';
                }

            }            
        }

?>
</body>
</html>