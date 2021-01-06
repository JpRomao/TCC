<?php
  session_start();

  session_destroy();

  header("Location: https://ifbookst.herokuapp.com/");
  die();
?>