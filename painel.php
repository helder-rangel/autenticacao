<?php
include("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col align-self-center">

            <h4>Olá, <?php echo $_SESSION['usuario']; ?></h4>
            <?php
            //criando tabela e cabeçalho de dados
            echo "<table border=1></table>";
            echo "<tr>";
            echo "<th>Matrícula</th>";
            echo "<th>Nome</th>";
            echo "<th>E-mail</th>";
            echo "<th>Curso</th>";
            echo "<th>Avatar</th>";
            echo "</tr>";

            //conectando ao banco de dados<mat-checkbox formControlName="formControlName" align="start"
            <?php
            $strcon = mysqli_connect('localhost','contr279_egressos','123abc','contr279_egressos') or die('Erro ao conectar ao banco de dados');
            $sql = "SELECT * FROM egressos";
            $resultado = mysql_query($strcon,$sql) or die('Eroo ao tentar listar registros');
            
            //obtendo os dados por meio de um loop while
            while ($registro = mysqli_fetch_array($resultado)) 
            {
                $matricula = $registro['id'];
                $nome = $registro['nomeCompactado'];
                $email = $registro['email'];
                $curso = $registro['curso'];
                $avatar = $registro['Avatar'];
                echo "<tr>";
                echo "<td>".$matricula."</td>";
                echo "<td>".$nome. "</td>";
                echo "<td>".$email. "</td>";
                echo "<td>".$curso."</td>";
                echo "<td>".$avatar."</td>";
                echo "</tr>";
            }
            mysql_close($strcon);
            echo "</table>";
            ?>

            <h5> <a href ="logout.php"> Sair </a> </h5>
            </div>
            </div>
            </div>

            include ("footer.php");
