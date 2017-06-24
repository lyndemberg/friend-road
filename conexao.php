<?php
  function open_database() {
      try {
          $conn = mysqli_connect('127.0.0.1', 'root','', 'friendroad');
          return $conn;
      } catch (Exception $e) {
          echo $e->getMessage();
          return null;
      }
  }
  function close_database($conn) {
      try {
          mysqli_close($conn);
      } catch (Exception $e) {
          echo $e->getMessage();
      }
  }
?>
