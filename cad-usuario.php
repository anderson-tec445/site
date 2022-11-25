<?php 
if(isset($_POST['bt-usuario'])){
	
	include "../conexao.php";

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$conf_senha = $_POST['conf-senha'];
	$nome = $_POST['nome'];

	if($senha != $conf_senha){
		echo "<script>
		alert('As senhas não se coincidem!');
	</script> ";

	echo "<script language='javascript'>window.location='usuarios.php'; </script>";

	}


	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

	$cadastro = mysqli_query($conexao, $sql);

	if($cadastro == ''){
		echo "<script>
		alert('Ocorreu um erro ao cadastrar!');
	</script> ";
	}else{
		echo "<script>
		alert('Usuário Cadastrado!');
	</script> ";

	echo "<script language='javascript'>window.location='usuarios.php'; </script>";
	}


}else{
	echo "<script language='javascript'>window.location='usuarios.php'; </script>";
}



 ?>