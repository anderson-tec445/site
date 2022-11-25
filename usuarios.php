<html>
<head>
  <title>Usuários</title>

<?php
include "menu.php";
?>




<div class="col-md-6 login">
	<h2>Cadastro de Usuário</h2>
	<form action="cad-usuario.php" method="post">

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nome</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu nome" name="nome" required>
	    
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu email" name="email" required>
	    
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Senha</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha" required>
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Confirmar Senha</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="conf-senha" required>
	  </div>
	 


	  <button type="submit" class="btn btn-success" name="bt-usuario">Cadastrar</button>
	</form>
</div>



<?php
include "footer.php";
?>




</body>

</html>



<script
			  src="https://code.jquery.com/jquery-3.2.1.js"
			  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			  crossorigin="anonymous"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>