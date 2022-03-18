<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<table>
 
<?php

$records = "";

foreach ($data['users'] as $country){
    $records .= "<tr>
    <th>" .  $country->id  . "</th>
    <th>" .  $country->name  . "</th>
    <th>" .  $country->capitalCity  . "</th>
    <th>" .  $country->continent  . "</th>
    <th>" .  $country->population  . "</th>";
    
   
}



?>

   
   <div class="container-fluid">
  <div class="row">
    <div class="col">
    <div class="col-12" id="header-text" style="">
    <h1 style="padding-bottom: 20px; padding-top: 100px;">
    <text-center>Landenoverzicht </text-center>
            </h1>
    </div>
    

      <text-center> <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Land</th>
      <th scope="col">Hoofdstad</th>
      <th scope="col">Continent</th>
      <th scope="col">Aantalbewoners</th>
    </tr>
  </thead>
  <?php
    echo $records;
    ?>
</table> </text-center> 

</table>

</body>
</html>


