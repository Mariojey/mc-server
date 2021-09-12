<?php

$conn = new PDO("mysql:host=localhost;dbname=mc-server-test",'root','');

if (!$conn) {
  echo "Connnection failed";
}
