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
                $avatar = $registro['avatar'];
                
                echo "<div class='card' style='width: 18rem;'>";
                if($avatar != null){
                echo "<img src='https://ifpb.github.io/egressos/img/egressos/{$avatar}' class='card-img-top' alt='$nome'>";
                } else {
                    echo "<img src='https://ifpb.github.io/egressos/img/egressos/placeholder.jpg' class='card-img-top' alt='$nome'>";    
                }
                echo "<div class='card-body'>";
                echo "<p class='card-text'>Matrícula: $matricula</p>";
                echo "<p class='card-text'>Nome: $nome</p>";
                echo "<p class='card-text'>E-mail: $email</p>";
                echo "<p class='card-text'>Curso: $curso</p>";
                echo "</div>";
                echo "</div>";
                echo "</td>";
                echo "<td>";
                echo "<div class='card' style='width: 18rem;'>";
                echo "<br><br>";
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
