<?php

// Hapus session
session_start();
session_destroy();

// Redirect ke halaman login
header("Location: login.php");

?>