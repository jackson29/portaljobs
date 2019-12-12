<?php  
//verif se existe usuario logado 
session_start();
if (isset($_SESSION['id'])&& isset($_SESSION['usuario'])) {
	
} 
include'header.php'; 
?>
	    <?php if (isset($_SESSION['id']) && isset($_SESSION['usuario'])): ?>
  
          <script type="text/javascript"> 
              alert("você está logado");
          </script>
  
    <?php endif;?>

	
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">SEJA BEM VINDO</h1>
        <div class="row center"> 
         
        </div>
        <div class="row center"> 

        
          
        </div>
        <br><br>

      </div>
    </div>
     <div class="parallax"><img style="filter:  grayscale(50%);" src="../esporte.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Rapidez</h5>

            <p class="light">Presamos pela rapidiz 
           que o usuario possa  usar as nossos site para saber sua colocação, o proximo adversário e etc...</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Experiência do Usuário Focada</h5>

            <p class="light">Nosso projeto tem como objetivo facilitar a escrição como também a organização dos Jogos internos IFPE mas conhecidos como JOBS tanto para o usuário quanto para o administrador.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">configurações</h5>

            <p class="light">  Esse site tem em suas configurações inscrição,calendario,tabelas de jogos etc... </p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">JOBS IFPE - IGARASSU</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      feito pela <a class="brown-text text-lighten-3" href="#!">Equipe 4</a>
      </div>
    </div>
  </footer>
  </body>
</html>
