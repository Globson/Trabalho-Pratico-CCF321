<?php 

if (isset($_GET['nome'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$nome = validate($_GET['nome']);

	$sql = "SELECT * FROM gato WHERE NOME='$nome'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        }else {
                header("Location: read.php");
        }
    

}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
	
        $userName = validate($_POST['userName']);
	$name = validate($_POST['name']);
	$cor = validate($_POST['cor']);
	$historia = validate($_POST['historia']);
	$dataNascimento = validate($_POST['dataNascimento']);
	$dataFalecimento = validate($_POST['dataFalecimento']);

	if (empty($userName)) {
		header("Location: ../index.php?error=Nome do Dono Obrigatório&$user_data");
	}else if (empty($name)) {
		header("Location: ../index.php?error=Nome do Gatinho Obrigatório&$user_data");
	}
	else if (empty($cor)) {
		header("Location: ../index.php?error=Cor Obrigatória&$user_data");
	}
	else if (empty($historia)) {
		header("Location: ../index.php?error=História Obrigatória&$user_data");
	}
	else if (empty($dataNascimento)) {
		header("Location: ../index.php?error=Data de Nascimento Obrigatória&$user_data");
	} {
       $sql = "UPDATE gato
               SET NOME='$name', COR='$cor', DESCRICAO='$historia',
               ANO_NASC='$dataNascimento', ANO_FAL='$dataFalecimento', NOME_USUARIO='$userName'
               WHERE NOME='$name' ";

        $result = mysqli_query($conn, $sql);
        if ($result) {
                  header("Location: ../read.php?success=Gatinho Atualizado com Sucesso");
        }else {
           header("Location: ../update.php?name=$name&error=Erro ao Atualizar o Gatinho&$user_data");
        }
         }
 }else {
         header("Location: read.php");
 }