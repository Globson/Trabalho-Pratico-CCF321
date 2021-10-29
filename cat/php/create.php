<?php 

if (isset($_POST['create'])) {
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


	$user_data = 'userName='.$userName.
				 '&name='.$name.
				 '&cor='.$cor.
				 '&historia='.$historia.
				 '&dataNascimento='.$dataNascimento.
				 '&dataFalecimento='.$dataFalecimento;

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
	}else if (empty($dataFalecimento)) {
		header("Location: ../index.php?error=Data de Falecimento Obrigatória&$user_data");
	}
	else {

		$sql = "INSERT INTO gato(NOME, COR, DESCRICAO, ANO_NASC, ANO_FAL, NOME_USUARIO) 
				VALUES('$name', '$cor', '$historia', '$dataNascimento', '$dataFalecimento', '$userName')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			  header("Location: ../read.php?success=Gatinho Cadastrado com Sucesso");
		}else {
		   header("Location: ../index.php?error=unknown error occurred&$user_data");
		}
	 }

}