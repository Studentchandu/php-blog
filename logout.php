<?php
session_start();
session_destroy();
echo "🔒 You are logged out. <a href='login.php'>Login again</a>";
?>
