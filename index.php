<?php include "db_connect.php"; ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="widt=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>MC - Server</title>
    <script src="https://kit.fontawesome.com/e93d8a5c79.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <form class="searchbar" method="post">
      <label for="search">Search</label>
      <input type="text" name="search" placeholder="Wpisz swój minecraftowy nick...">
      <button type="submit" name="submit">
        <i class="fas fa-search"></i>
      </button>
    </form>
  </body>
</html>

<?php

if (isset($_POST["submit"])) {
  $str = $_POST["search"];
  $sth = $conn->prepare("SELECT * FROM `mc-nicks` WHERE nick = '$str'");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();

  if($row = $sth->fetch()){
    ?>
    <br><br><br>
    <table>
      <tr>
        <th>nick</th>
      </tr>
      <tr>
        <td><?php echo $row->nick; ?></td>
      </tr>
    </table>

  <?php
}
    else {
      echo "Nie poprawny nikc://";
    }

}

?>
