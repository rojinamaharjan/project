<?php

  // Inialize session
  session_start();

// Delete certain session
  unset($_SESSION['email']);
  // Delete all session variables
   session_destroy();

 // Jump to login page
 header('Location: boot1.php');
?>