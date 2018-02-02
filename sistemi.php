<?php
echo'<html>
   <head>
    <title>operazioni con php</title>
    <link href="sistemi.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  </head>
  <body>';
echo '<div id="top"></div>
    <div id="Inserimento_Dati">
    <br>
    <font size="5"><b>Questo programma calcola il risultato di un sistema lineare di due equazioni con due incognite ridotto in forma normale</b></font>
      <form action="sistemi.php" method="post">
      <br><div id="valori">
      <font><b>Inserisci i coefficenti e il termine noto delle due equazioni</b></font><br><br>
          <input type="number" name="a"> x + <input type="number" name="b"> y = <input type="number" name="c"><br><br>
          <input type="number" name="a1"> x + <input type="number" name="b1"> y = <input type="number" name="c1">
      </div>
      <div id="operazione"><br>
      <input type="reset" name="Cancella"> &nbsp; &nbsp; <input type="submit" name="invia" value="Calcola"><br><br>';
      $A = $_POST['a'];
      $B = $_POST['b'];
      $C = $_POST['c'];
      $A1 = $_POST['a1'];
      $B1 = $_POST['b1'];
      $C1 = $_POST['c1'];
      if ($A==0 and $B==0 and $C==0 and $A1==0 and $B1==0 and $C1==0){echo "<font size='5'><b>Tutti i valori inseriti sono uguali a 0</b></font>";}else{
          $D=$A*$B-$A1*$B1;
          $Dx=$C*$B-$C1*$B1;
          $Dy=$A*$C-$A1*$C1;
          if ($D==0){
           if ($Dy==0 and $Dx==0){
             echo "<font size='5'><b>il sistema è indeterminato</b></font>";}
           else{
             echo"<font size='5'><b>il sistema è impossible</b></font>";}}
          else{
          $x=$Dx/$D;
          $y=$Dy/$D;
          echo"<font size='5'><b>il sistema è determinato con soluzione:</b><br><br>(".$x.", ".$y.")</font>";}}
      echo'<br><br>*I risultati sono scritti sottoforma di numeri decimali</div>
      </form>
    </div>
  </body> 
</html>';
?>