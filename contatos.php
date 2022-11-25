<?php
include "menu.php";
?>



<br><br>

<div class="conteudo">
	<div class="row">
		<div class="col-md-6">
			<form action="email.php" method="post">

			  <div class="form-group">
			    <label for="exampleFormControlInput1">Nome</label>
			    <input type="text" class="form-control" id="" placeholder="Seu Nome" name="nome">
			  </div>



			  <div class="form-group">
			    <label for="exampleFormControlInput1">Email</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
			  </div>


			  <div class="form-group">
			    <label for="">Assunto</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="assunto" name="assunto">
			  </div>
			  
			  
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Mensagem</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensagem"></textarea>
			  </div>

			   <button type="submit" class="btn btn-primary">Enviar</button>
			</form>

		</div>
		<div class="col-md-6">
			<img src="imagens/contato.jpg" class="imgcontato">
		</div>
	</div>
</div>

<br><br>


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


