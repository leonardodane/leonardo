<html>
  <head>
    <title>secondo documento php</title>
  </head>
  <body>
    <form action="secondo.php" method="post">
    scrivi un numero:<input type="number" name="A">
    scrivi un numero:<input type="number" name="B">
    </form>
    <?php
      $A = $_POST['A'];
      $B = $_POST['B'];
        if ($A > $B) {
          a:{}
          if ($B == $A) {
          } else {
          $B = $B + 1;
          echo $B;
          echo '<br>';
          goto a;
          }
        } else {
            b:{}
            if ($A == $B) {
          } else {
            $A = $A + 1;
            goto b;
          }
        }
      ?>
  </body> 
</html>