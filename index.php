<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokedex";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn== false){
  die("Errore di connessione" . $conn->connect_error);
}



$sql = "SELECT * FROM pokedex";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $tabella="";
  while($row = $result->fetch_assoc()) {
    $tabella .= "<tr><td>  " .  $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
  }
}

if(isset($_POST["reset"])){

 $sql = "SELECT * FROM pokedex";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) { 
    $tabella="";
   while($row = $result->fetch_assoc()) {
     $tabella .= "<tr><td>  " .  $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
    }
  }

}


if(isset($_POST['search'])){
   
  $query = "SELECT * FROM pokedex where Numero_Pokemon = (?)"; 
  if($statements = $conn->prepare($query)){
    $id = $_POST['id'];

    $statements->bind_param("i", $id);


    $statements->execute();
  }else{
    echo "Errore: non è possibile trovare il Pokémon" . $conn->error;
  }

  $result1 = $statements->get_result();
   
    if ($result1->num_rows > 0) {
      $tabella = "";
      while ($row = $result1->fetch_array ()) {
        $tabella .= "<tr><td>  " .  $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
      }
    }
}



if(isset($_POST['search'])){
   
  $query = "SELECT * FROM pokedex where Nome = (?)"; 
  if($statements = $conn->prepare($query)){
    $id = $_POST['id'];

    $statements->bind_param("s", $id);


    $statements->execute();
  }else{
    echo "Errore: non è possibile trovare il Pokémon" . $conn->error;
  }

  $result1 = $statements->get_result();
   
    if ($result1->num_rows > 0) {
      $tabella = "";
      while ($row = $result1->fetch_array ()) {
        $tabella .= "<tr><td>  " .  $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
      }
    }
}



if(isset($_POST['search'])){
   
  $query = "SELECT * FROM pokedex where Tipo_Primario = (?) OR Tipo_Secondario = (?);"; 
  if($statements = $conn->prepare($query)){
    $id = $_POST['id'];

    $statements->bind_param("ss", $id, $id);  

    $statements->execute();
  }else{
    echo "Errore: non è possibile trovare il Pokémon" . $conn->error;
  }

  $result1 = $statements->get_result();
   
    if ($result1->num_rows > 0) {
      $tabella = "";
      while ($row = $result1->fetch_array ()) {
        $tabella .= "<tr><td>  " .  $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
      }
    }
}


if(isset($_POST['search'])){
   
  $query = "SELECT * FROM pokedex where Prima_Abilità = (?) OR Seconda_Abilità = (?) OR Abilità_Nascosta=(?);"; 
  if($statements = $conn->prepare($query)){
    $id = $_POST['id'];

    $statements->bind_param("sss", $id, $id, $id);  

    $statements->execute();
  }else{
    echo "Errore: non è possibile trovare il Pokémon" . $conn->error;
  }

  $result1 = $statements->get_result();
   
    if ($result1->num_rows > 0) {
      $tabella = "";
      while ($row = $result1->fetch_array ()) {
        $tabella .= "<tr><td>  " .  $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
      }
    }
}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Pokédex Nazionale</title>
     <link rel="stylesheet" href="style.css"> 
     <script src="script.js"></script>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>

    <h1 class="title"> Elenco dei Pokémon secondo il Pokèdex Nazionale</h1><br><br>
     
    <div class="container">
      <table class="table" >
       <thead>
          <form action="" method="post">
            <div class="input">
            <input type="text"  name="id" class="number"  placeholder="Ricerca Pokemon"/> 
            <input type="submit" name="search" id="search" class="search" class="button" value="Cerca">
            <input type="submit" name="reset" class="reset" class="button" value="Reset">
            </div> 

            <tr>
              <th>Index</th>
              <th>Nome Pokémon</th>
              <th>Primo Tipo</th>
              <th>Secondo Tipo</th>
              <th>Prima Abilità</th>
              <th>Seconda Abilità</th>
              <th>Abilità Nascosta</th>
              <th>Punti Salute</th>
              <th>Attacco</th>
              <th>Difesa</th>
              <th>Attaco Speciale</th>
              <th>Difesa Speciale</th>
              <th>Velocità</th>
              <th>Totale Statistiche Base</th>
            </tr>
          </form>
        </thead> 
        <tbody>
         <?php echo $tabella; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>