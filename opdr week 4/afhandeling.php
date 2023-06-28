<?php
session_start();

$_SESSION["naam"] = "Leon";

header("Location: /");
?>