<?php
    include "conexao.php";
    
    if(empty($_POST['buscar'])) {
        echo '<script>
        window.alert("Campo em branco!");
        window.location.href = "http://localhost/Furquim/Projeto%20Final/REISDOGESSO/index.php";
        </script>';      
    }else{

    $buscar = mysqli_real_escape_string($conexao, $_POST['buscar']);

    $query = "select * from servico where nome LIKE '%$buscar%'";

    $result = mysqli_query($conexao, $query);


        // $row = mysqli_num_rows(mysql_result(result));
        $row = mysqli_num_rows($result);
            if($row > 0){
                while($linha = mysqli_fetch_array($result)) {
                    $nome = $linha['nome'];
                    $descricao = $linha['descricao'];

                    echo "<strong>Nome: </strong>".@$nome;
                    echo "<br />
                    <br />";
                    echo "<strong>Descricao: </strong>".@$descricao;
                }
            } else {
                echo '<script>
                    window.alert("Serviço não enoctrado. Tente outra descrição.");
                    window.location.href = "http://localhost/Furquim/Projeto%20Final/REISDOGESSO/index.php";
                </script>';
            }
        }
                
?>