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
    <font size="5"><b>Questo programma calcola il risultato di un sistema lineare di tre equazioni con tre incognite ridotto in forma normale</b></font>
      <form action="3incognite.php" method="post">
      <br><div id="valori">
      <font><b>Inserisci i coefficenti e il termine noto delle tre equazioni</b></font>
      <table>
          <tr><td rowspan="3"><img src="http://localhost/informatica/grafa.png" height="135px" width="45px" alt="Mia Immagine"></td><td><input type="number" name="a"> x + <input type="number" name="b"> y + <input type="number" name="c"> z = <input type="number" name="d"></td></tr><br><br>
          <tr><td><input type="number" name="a1"> x + <input type="number" name="b1"> y + <input type="number" name="c1"> z = <input type="number" name="d1"><br><br></td></tr>
          <tr><td><input type="number" name="a2"> x + <input type="number" name="b2"> y + <input type="number" name="c2"> z = <input type="number" name="d2"><br><br></td></tr>
          <tr><td><br></td><td></td><tr>
      </table>
      </div>
      <div id="operazione"><br>
      <br><br>
      <input type="reset" name="Cancella"> &nbsp; &nbsp; <input type="submit" name="invia" value="Calcola"><br><br>';
      $A = $_POST['a'];
      $B = $_POST['b'];
      $C = $_POST['c'];
      $D = $_POST['d'];
      $A1 = $_POST['a1'];
      $B1 = $_POST['b1'];
      $C1 = $_POST['c1'];
      $D1 = $_POST['d1'];
      $A2 = $_POST['a2'];
      $B2 = $_POST['b2'];
      $C2 = $_POST['c2'];
      $D2 = $_POST['d2'];
      if ($A==0 and $B==0 and $C==0 and $D==0 and $A1==0 and $B1==0 and $C1==0 and $D1==0 and $A2==0 and $B2==0 and $C2==0 and $D2==0){echo "<font size='5'><b>Tutti i valori inseriti sono uguali a 0</b></font>";}else{
          $Det=($A*$B1*$C2)+($B*$C1*$A2)+($C*$A1*$B2)-($A2*$B1*$C)-($B2*$C1*$A)-($C2*$A1*$B);
          $Dx=($D*$B1*$C2)+($B*$C1*$D2)+($C*$D1*$B2)-($C*$B1*$D2)-($D*$C1*$B2)-($B*$D1*$C2);
          $Dy=($A*$D1*$C2)+($D*$C1*$A2)+($C*$A1*$D2)-($A2*$D1*$C)-($D2*$C1*$A)-($C2*$A1*$D);
          $Dz=($A*$B1*$D2)+($B*$D1*$A2)+($D*$A1*$B2)+(-1*(($A2*$B1*$D)+($B2*$D1*$A)+($D2*$A1*$B)));
          if ($Det==0){
           if ($Dy==0 and $Dx==0 and $Dz==0){
             echo "<font size='5'><b>il sistema è indeterminato</b></font>";}
           else{
             echo"<font size='5'><b>il sistema è impossible</b></font>";}}
          else{
          $x=$Dx/$Det;
          $y=$Dy/$Det;
          $z=$Dz/$Det;
          echo"<font size='5'><b>il sistema è determinato con soluzione:</b><br><br>(".$x.", ".$y.", ".$z.")</font>";}}
      echo'<br><br>*I risultati sono scritti sottoforma di numeri decimali</div>
      </form>
    </div>
  </body> 
</html>';
?>