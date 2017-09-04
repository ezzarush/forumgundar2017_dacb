<?php
session_start();
if ($_SESSION['email_login']) {
  session_destroy();
  header("Location: home");
} elseif ($_SESSION['admin_username']) {
  session_destroy();
  header("Location: login_admin");
}
?>
