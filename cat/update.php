<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Atualizar Gatinho</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Atualizar Cadastro do Gatinho 😼</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="userName">*Nome do Dono</label>
		     <input type="name" 
		           class="form-control" 
		           id="userName" 
		           name="userName" 
		           value="<?=$row['NOME_USUARIO'] ?>" 
		           placeholder="Digite o seu nome">
		   </div>
		   
		   <div class="form-group">
		     <label for="name">*Nome do Gatinho</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
				   title="Matenha o nome original do Gato"
				   pattern="<?=$row['NOME'] ?>"	
		           value="<?=$row['NOME'] ?>"
		           placeholder="Digite o nome do seu gatinho">
		   </div>

		   <div class="form-group">
		     <label for="cor">*Cor</label>
		     <input type="text" 
		           class="form-control" 
		           id="cor" 
		           name="cor" 
				   pattern="[a-zA-Z ]*"
		           value="<?=$row['COR']; ?>"
		           placeholder="Digite a cor do seu gatinho">
		   </div>

		   <div class="form-group">
		     <label for="historia">*Historia</label>
		     <textarea class="form-control" 
		           id="text" 
		           name="historia"
				   rows="3" 
		           value="<?=$row['DESCRICAO'] ?>"
		           placeholder="Digite a história do seu gatinho"><?=$row['DESCRICAO'] ?></textarea>
		   </div>

		   <div class="form-group">
		     <label for="dataNascimento">*Data de Nascimento</label>
		     <input type="date" 
		           class="form-control" 
		           id="dataNascimento" 
		           name="dataNascimento" 
		           value="<?=$row['ANO_NASC'] ?>"
		           placeholder="Digite a data que seu gatinho nasceu">
		   </div>

		   <div class="form-group">
		     <label for="dataFalecimento">Data de Falecimento 😿</label>
		     <input type="date" 
		           class="form-control" 
		           id="dataFalecimento" 
		           name="dataFalecimento" 
		           value="<?=$row['ANO_FAL'] ?>"
		           placeholder="Digite a data que seu gatinho morreu :(">
		   </div>
		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Atualizar</button>
		    <a href="read.php" class="link-primary">Ver Gatinhos Cadastrados</a>
	    </form>
	</div>
</body>
</html>