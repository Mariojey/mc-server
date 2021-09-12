<?php
$conn = new PDO("mysql:host=localhost;dbname=mc_derver_test",'root','');

if (!$conn) {
  echo "Connnection failed";
}
