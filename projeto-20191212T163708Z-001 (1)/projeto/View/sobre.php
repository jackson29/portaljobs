<?php  

session_start();
//verif se existe usuario logado 

include'header.php'; 

?>

<style>

table{
      display: block;
      text-align:center;
     font-size: 20px; 
     margin: center;
 
}

  tr:nth-child(odd){
    background:#4db6ac;
  }
tr{
    color: black;
}
td,th{
    border: 5px solid black;
}

  </style>
<!-- <br><br><br> -->

<div style="display: flex">
  
  <div class="card" style="width: 20em; margin: 5em; position: relative;
float: left;">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../josivaldo.jpg" style="height:20em;">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Josivaldo<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Josivaldo<i class="material-icons right">close</i></span>
      <p><strong>Git:</strong> https://github.com/josivaldonatal</p>
      <p><strong>E-mail:</strong></p>
      <p><strong>Telefone:</strong> 98557-2470</p>
    </div>
  </div>  

  <div class="card" style="width: 20em; margin: 5em;">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../erinston.jpg" style="height:20em;">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Erinston Ferreira<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Erinston Ferreira<i class="material-icons right">close</i></span>
      <p><strong>Git:</strong> https://github.com/erinston</p>
      <p><strong>E-mail:</strong> erinstong@gmail.com</p>
      <p><strong>Telefone:</strong> 98557-2470</p>
    </div>
  </div>

  <div class="card" style="width: 20em; margin: 5em;">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../jackson.jpg" style="height:20em;">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Jackson<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Jackson<i class="material-icons right">close</i></span>
      <p><strong>Git:</strong> https://github.com/jackson29</p>
      <p><strong>E-mail:</strong></p>
      <p><strong>Telefone:</strong>85572470</p>
    </div>
  </div>
</div>

</html>