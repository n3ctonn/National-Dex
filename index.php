<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokedex";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn == false) {
  die("Errore di connessione" . $conn->connect_error);
}



$sql = "SELECT * FROM pokedex";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $tabella = "";
  while ($row = $result->fetch_assoc()) {
    $tabella .= "<tr><td>  " . $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
  }
}

if (isset($_POST["reset"])) {

  $sql = "SELECT * FROM pokedex";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $tabella = "";
    while ($row = $result->fetch_assoc()) {
      $tabella .= "<tr><td>  " . $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
    }
  }

}


if (isset($_POST['search'])) {

  $query = "SELECT * FROM pokedex where Numero_Pokemon = (?)";
  if ($statements = $conn->prepare($query)) {
    $id = $_POST['id'];

    $statements->bind_param("i", $id);


    $statements->execute();
  } else {
    echo "Errore: non è possibile trovare il Pokémon" . $conn->error;
  }

  $result1 = $statements->get_result();

  if ($result1->num_rows > 0) {
    $tabella = "";
    while ($row = $result1->fetch_array()) {
      $tabella .= "<tr><td>  " . $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
    }
  }
}



if (isset($_POST['search'])) {

  $query = "SELECT * FROM pokedex where Nome = (?)";
  if ($statements = $conn->prepare($query)) {
    $id = $_POST['id'];

    $statements->bind_param("s", $id);


    $statements->execute();
  } else {
    echo "Errore: non è possibile trovare il Pokémon" . $conn->error;
  }

  $result1 = $statements->get_result();

  if ($result1->num_rows > 0) {
    $tabella = "";
    while ($row = $result1->fetch_array()) {
      $tabella .= "<tr><td>  " . $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
    }
  }
}



if (isset($_POST['search'])) {

  $query = "SELECT * FROM pokedex where Tipo_Primario = (?) OR Tipo_Secondario = (?);";
  if ($statements = $conn->prepare($query)) {
    $id = $_POST['id'];

    $statements->bind_param("ss", $id, $id);

    $statements->execute();
  } else {
    echo "Errore: non è possibile trovare il Pokémon" . $conn->error;
  }

  $result1 = $statements->get_result();

  if ($result1->num_rows > 0) {
    $tabella = "";
    while ($row = $result1->fetch_array()) {
      $tabella .= "<tr><td>  " . $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
    }
  }
}


if (isset($_POST['search'])) {

  $query = "SELECT * FROM pokedex where Prima_Abilità = (?) OR Seconda_Abilità = (?) OR Abilità_Nascosta=(?);";
  if ($statements = $conn->prepare($query)) {
    $id = $_POST['id'];

    $statements->bind_param("sss", $id, $id, $id);

    $statements->execute();
  } else {
    echo "Errore: non è possibile trovare il Pokémon" . $conn->error;
  }

  $result1 = $statements->get_result();

  if ($result1->num_rows > 0) {
    $tabella = "";
    while ($row = $result1->fetch_array()) {
      $tabella .= "<tr><td>  " . $row["Numero_Pokemon"] . " </td><td>  " . $row["Nome"] . "</td><td>  " . $row["Tipo_Primario"] . " </td><td>  " . $row["Tipo_Secondario"] . "</td><td>  " . $row["Prima_Abilità"] . "</td><td> " . $row["Seconda_abilità"] . "</td><td>  " . $row["Abilità_Nascosta"] . "</td><td>  " . $row["PS"] . "</td><td>  " . $row["Attacco"] . "</td><td>  " . $row["Difesa"] . "</td><td>  " . $row["Att_Sp"] . "</td><td> " . $row["Dif_Sp"] . "</td><td> " . $row["Velocità"] . "</td><td> " . $row["Totale"] . "</td></tr>";
    }
  }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pokédex Nazionale</title>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
  <div class="safe-area column">
    <br>
    <div class="logo">
      <h1>Elenco di tutti i pokemon</h1>
      <h2>secondo il pokedex Nazionale</h2>
    </div>
    <br>
    <hr class="linea" align="left" size="1" color="black"
      style="width:50%; margin-left:25% !important; margin-right:25% !important;" noshade><br><br><br><br>
    <div class="container">
      <form action="" method="post">
        <div class="input">
          Ricerca Pokemon:<br>
          <input type="text" name="id" class="text">
          <input type="submit" name="search" id="search" class="search" class="button" value="Cerca">
          <input type="submit" name="reset" class="reset" class="button" value="Reset">
        </div>
        <table class="table">
          <thead>
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
          </thead>
          <tbody>
            <?php echo $tabella; ?>
          </tbody>
          <tfoot>
            <th><span style="opacity:0;">Index</span> </th>
            <th><span style="opacity:0;">Nome</span> </th>
            <th><span style="opacity:0;">Primo Tipo</span> </th>
            <th><span style="opacity:0;">Secondo Tipo</span> </th>
            <th><span style="opacity:0;">Prima Abilità</span> </th>
            <th><span style="opacity:0;">Seconda Abilità</span> </th>
            <th><span style="opacity:0;">Abilità Nascosta</span> </th>
            <th><span style="opacity:0;">Punti Salute</span> </th>
            <th><span style="opacity:0;">Attacco/span> </th>
            <th><span style="opacity:0;">DSifesa</span> </th>
            <th><span style="opacity:0;">Attacco Speciale</span> </th>
            <th><span style="opacity:0;">Difesa Speciale</span> </th>
            <th><span style="opacity:0;">Velocità</span> </th>
            <th><span style="opacity:0;">Totale Statistiche Base</span> </th>
          </tfoot>
      </form>
    </div><br><br>
  </div>
</body>

</html>