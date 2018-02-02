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
      <form action="sistemice.php" method="post">
      <br><div id="valori">
      <font><b>Inserisci i coefficenti e il termine noto delle due equazioni</b></font><br><br>
      <table>
          <tr><td rowspan="2"><img src="http://localhost/informatica/grafa.png" height="90px" width="30px" alt="Mia Immagine"></td><td> &nbsp; &nbsp; <input type="number" name="a"> x + <input type="number" name="b"> y = <input type="number" name="c"><br><br></td></tr>
          <tr><td> &nbsp; &nbsp; <input type="number" name="a1"> x + <input type="number" name="b1"> y = <input type="number" name="c1"><br><br></td></tr>
      </table>
      </div>
      <div id="operazione"><br>
      <b>Inserisci, se presenti, le C.E.</b>  (inserisci i valori in ordine)<br><br>
        x	&ne; <input type="number" name="con1"><br>
        x	&ne; <input type="number" name="con2"><br>
        x &ne; <input type="number" name="con3"><br><br>
      <input type="reset" name="Cancella"> &nbsp; &nbsp; <input type="submit" name="invia" value="Calcola"><br><br>';
      $A = $_POST['a'];
      $B = $_POST['b'];
      $C = $_POST['c'];
      $A1 = $_POST['a1'];
      $B1 = $_POST['b1'];
      $C1 = $_POST['c1'];
      $CE1 = $_POST['con1'];
      $CE2 = $_POST['con2'];
      $CE3 = $_POST['con3'];
      if ($CE1=="" and $CE2=="" and $CE3==""){
      if ($A==0 and $B==0 and $A1==0 and $B1==0){echo "<font size='5'><b>Tutti i valori inseriti sono uguali a 0</b></font>";}else{
          $Det=($A*$B1)-($A1*$B);
          $Dx=$C*$B1-$C1*$B;
          $Dy=$A*$C1-$A1*$C;
          if ($Det==0){
           if ($Dy==0 and $Dx==0){
             echo "<font size='5'><b>il sistema è indeterminato</b></font>";}
           else{
             echo"<font size='5'><b>il sistema è impossible</b></font>";}}
          else{
          $x=$Dx/$Det;
          $y=$Dy/$Det;
          echo"<font size='5'><b>il sistema è determinato con soluzione:</b><br><br>(".$x.", ".$y.")</font>".$Det;}}}
      elseif ($CE1<>"" and $CE2=="" and $CE3==""){
        if ($A==0 and $B==0 and $A1==0 and $B1==0){echo "<font size='5'><b>Tutti i valori inseriti sono uguali a 0</b></font>";}else{
          $Det=($A*$B1)-($A1*$B);
          $Dx=$C*$B1-$C1*$B;
          $Dy=$A*$C1-$A1*$C;
          if ($Det==0){
           if ($Dy==0 and $Dx==0){
             echo "<font size='5'><b>il sistema è indeterminato</b></font>";}
           else{
             echo"<font size='5'><b>il sistema è impossible</b></font>";}}
          else{
          $x=$Dx/$Det;
          $y=$Dy/$Det;
          if($x==$CE1){echo"<font size='5'><b>il sistema è impossible perchè non soddisfa le C.E.</b></font>";} else{
          echo"<font size='5'><b>il sistema è determinato con soluzione:</b><br><br>(".$x.", ".$y.")</font>";}}}}
      elseif($CE1<>"" and $CE2<>"" and $CE3==""){
      if ($A==0 and $B==0 and $A1==0 and $B1==0){echo "<font size='5'><b>Tutti i valori inseriti sono uguali a 0</b></font>";}else{
          $Det=($A*$B1)-($A1*$B);
          $Dx=$C*$B1-$C1*$B;
          $Dy=$A*$C1-$A1*$C;
          if ($Det==0){
           if ($Dy==0 and $Dx==0){
             echo "<font size='5'><b>il sistema è indeterminato</b></font>";}
           else{
             echo"<font size='5'><b>il sistema è impossible</b></font>";}}
          else{
          $x=$Dx/$Det;
          $y=$Dy/$Det;
          if($x==$CE1 or $x==$CE2){echo"<font size='5'><b>il sistema è impossible perchè non soddisfa le C.E.</b></font>";}else{
          echo"<font size='5'><b>il sistema è determinato con soluzione:</b><br><br>(".$x.", ".$y.")</font>";}}}}
          elseif($CE1<>"" and $CE2<>"" and $CE3<>""){
          if ($A==0 and $B==0 and $C==0 and $A1==0 and $B1==0 and $C1==0){echo "<font size='5'><b>Tutti i valori inseriti sono uguali a 0</b></font>";}else{
          $Det=($A*$B1)-($A1*$B);
          $Dx=$C*$B1-$C1*$B;
          $Dy=$A*$C1-$A1*$C;
          if ($Det==0){
           if ($Dy==0 and $Dx==0){
             echo "<font size='5'><b>il sistema è indeterminato</b></font>";}
           else{
             echo"<font size='5'><b>il sistema è impossible</b></font>";}}
          else{
          $x=$Dx/$Det;
          $y=$Dy/$Det;
          if($x==$CE1 or $x==$CE2 or $x==$CE3){echo"<font size='5'><b>il sistema è impossible perchè non soddisfa le C.E.</b></font>";}else{
          echo"<font size='5'><b>il sistema è determinato con soluzione:</b><br><br>(".$x.", ".$y.")</font>";}}}}else{}
      echo'<br><br>*I risultati sono scritti sottoforma di numeri decimali<br></div>
      </form>
    </div>
  </body> 
</html>';