<?php
session_start();

if (!isset($_SESSION["naam"])) {
    echo "nee";
    header("Location: afhandeling.php");
} else {
    echo "hallo, mijn naam is " , $_SESSION["naam"];
}
?>