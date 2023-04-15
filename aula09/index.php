<?php 
    include("./conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="tabelaContainer">
        <table>
            <?php
                $stmt = $pdo->prepare("select * from tbContato");
                $stmt ->execute();

                while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                    
                    echo "<tr>";
                    foreach($row as $dado){
                        echo "<td>$dado</td>";
                    }
                    echo"</tr>";
                }
                
            
            ?>
        </table>

    </section>
    
</body>
</html>