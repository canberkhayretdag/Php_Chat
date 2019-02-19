<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=phpApp", "root", "your_password"); //fill with your password
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>