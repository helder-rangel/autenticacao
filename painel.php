<?php
include("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col align-self-center">
            <br>
            <br>

            <h4>Olá, <?php echo $_SESSION['usuario']; ?></h4>
            
            <?php
            $strcon = mysqli_connect('localhost','contr279_egressos','123abc','contr279_egressos') or die('Erro ao conectar ao banco de dados');
            $sql = "SELECT * FROM egressos";
            $resultado = mysqli_query($strcon,$sql) or die('Erro ao tentar listar registros');
                        
            //obtendo os dados por meio de um while
            while ($registro = mysqli_fetch_array($resultado)) 
            {
                $matricula = $registro['id'];
                $nome = $registro['nomeCompactado'];
                $email = $registro['email'];
                $curso = $registro['curso'];
                $github = $registro['github'];
                $facebook = $registro['facebook'];
                $twitter = $registro['twitter'];
                $instagram = $registro['instagram'];

                //$avatar = $registro['avatar'];


                echo "<ul class='list-group list-group-horizontal'>";
                echo "<li class='list-group-item'>$nome</li>";
                if($email != null){
                echo "<li class='list-group-item'>$email</li>";
                }
                echo "<li class='list-group-item'>$curso</li>";
                if($twitter != null){
                echo "<li class='list-group-item'><a href='$twitter' target='_blank'><img src='icons/twitter.png' border='0'></li>";
                }
                if($linkedin != null){
                echo "<li class='list-group-item'><a href='$linkedin' target='_blank'><img src='icons/linkedin.png' border='0'></li>";
                }
                if($facebook != null){
                echo "<li class='list-group-item'><a href='$facebook' target='_blank'><img src='icons/facebook.png' border='0'></li>";
                }
                if($instagram != null){
                echo "<li class='list-group-item'><a href='$instagram' target='_blank'><img src='icons/instagram.png' border='0'></li>";
                }
                if($github != null){
                    echo "<li class='list-group-item'><a href='$github' target='_blank'><img src='icons/github.png' border='0'></li>";
                    }
                echo "</ul>";
                echo "<br>";
            }
            mysql_close($strcon);
            ?>
            <h5> <a href ='logout.php'> Sair </a> </h5>           
            </div>
            </div>
            </div>
            <?php
            include("footer.php");
            ?>
