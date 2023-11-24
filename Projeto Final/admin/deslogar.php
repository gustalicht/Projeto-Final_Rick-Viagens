<?php

session_start();

//limpar caches
session_unset();
//Encerra a session
session_destroy();

//redirecionamento de página
header("location: login.php");