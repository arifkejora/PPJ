<?php
session_start();
session_destroy();  // Hapus sesi
header('Location: login.php');  // Redirect ke halaman login setelah logout
exit();
