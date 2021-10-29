<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gatinhos Cadastrados</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div>
			<h4 class="display-4 text-center">Gatinhos Cadastrados 😻</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nome do Dono</th>
				  <th scope="col">Nome do Gatinho</th>
				  <th scope="col">Cor</th>
			      <th scope="col">Historia</th>
				  <th scope="col">Data de Nascimento</th>
			      <th scope="col">Data de Falecimento</th>
			      <th scope="col">Ação</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td style="width: 150px;"><?=$rows['NOME_USUARIO']?></td>
			      <td><?php echo $rows['NOME']; ?></td>
				  <td><?php echo $rows['COR']; ?></td>
				  <td><?php echo $rows['DESCRICAO']; ?></td>
				  <td><?php echo $rows['ANO_NASC']; ?></td>
				  <td><?php echo $rows['ANO_FAL']; ?></td>
			      <td style="width: 180px;"><a href="update.php?nome=<?=$rows['NOME']?>" 
			      	     class="btn btn-success">Editar</a>

			      	  <a href="php/delete.php?nome=<?=$rows['NOME']?>" 
			      	     class="btn btn-danger">Excluir</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" class="link-primary">Cadastrar novo Gato</a>
			</div>
		</div>
	</div>
</body>
</html>