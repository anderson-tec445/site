<html>
<head>
  <title>Dev.Org</title>
  <meta name="keywords" content="ht-cursos, curso de programador web, programação web">

<?php
include "menu.php";
?>



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/01.jpg" alt="First slide">
    </div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagens/02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/03.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próxima</span>
  </a>
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

<script type="text/javascript">
$('.carousel').carousel({
  interval: 3000
})

</script>