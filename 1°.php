<html>
  <head>
    <title>primo documento php</title>
  </head>
  <body>
    <form action="prova.php" metod="post">
    scrivi un numero:<input type="number" name="number">
    </form>
    <?php
      $number = $_POST['number'];
      a: {}
        if ($number == 0) {
          echo $number;
        } else {
          echo $number;
          echo '<br>';
            if ($number > 0) {
            $number = $number - 1;
            goto a;
          } else {
            $number = $number + 1;
            goto a;
          }
        }
      ?>
  </body> 
</html>