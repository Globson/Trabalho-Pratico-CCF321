<?php 
require_once 'php\conexao.php';

session_start();
session_unset();
session_destroy();
session_start();

if(isset($_POST['login'])){
    $erros = array();
    $sql = 'select * from tb_usuario where usuario=? and senha=?';
    $stmt = Conexao::conecta()->prepare($sql);
    $stmt->bindValue(1,$_POST['usuario']);
    $stmt->bindValue(2,$_POST['senha']);
    $stmt->execute();

    if($stmt->rowCount()>0){
        //existe o usuario e senha no banco
        $resultado = $stmt->fetch();
        $_SESSION['logado'] = true;
        $_SESSION['id_usuario'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nome'];
        header('location: index.php');
		
    }else{
        $erros[]="Usuário ou senha inválidos.";
    }

}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="" 
		      method="post"
              >
            
		   <h4 class="display-4 text-center">Memorial de Gatinhos 😿</h4><hr><br>
		   <?php 
			if(!empty($erros)){
				foreach ($erros as $erro) {
					echo $erro;
				}
			}
			?>
		   <div class="form-group">
		     <label for="name">Nome de Usuário</label>
		     <input type="name" 
		           class="form-control" 
		           id="usuario" 
		           name="usuario" 
		           value="<?php if(isset($_GET['usuario']))
		                           echo($_GET['usuario']); ?>" 
		           placeholder="Digite o nome">
		   </div>

		   <div class="form-group">
		     <label for="password">Senha</label>
		     <input type="password" 
		           class="form-control" 
		           id="senha" 
		           name="senha" 
		           value="<?php if(isset($_GET['senha']))
		                           echo($_GET['senha']); ?>"
		           placeholder="Digite sua senha">
		   </div>

           
		   <button type="submit" 
		          class="btn btn-primary"
		          name="login">Login</button>
	    </form>
	</div>
</body>
</html>