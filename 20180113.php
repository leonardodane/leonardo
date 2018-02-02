<?php
echo '<html>
  <head>
    <title>operazioni con php</title>
    <link href="20180113_php.css" rel="stylesheet" type="text/css"> 
  </head>
  <body>
    <div id="numero"><br>';
      $A = $_POST['primo'];
      $B = $_POST['secondo'];
      $C = $_POST['terzo'];
      $Op = $_POST['operazione'];
      if ($A=="" or $B=="" or $C=="") {
        echo "Almeno uno dei tre valori numerici non è stato inserito.";}
        else{
          if ($Op=='addizione') {
          $D=$A+$B+$C; 
          echo "La somma fra ".$A.", ".$B." e ".$C." &egrave; ".$D.".";} 
          elseif ($Op=='moltiplicazione') {
          $D=$A*$B*$C;
          echo "La moltiplicazione fra ".$A.", ".$B." e ".$C." &egrave; ".$D.".";}
          elseif ($Op=='p2') {
          $D= $A*($B+$C);
          echo "Il prodotto tra ".$A." e la somma fra ".$B." e ".$C." &egrave; ".$D.".";}
          elseif ($Op=="p3"){
            if ($A>0) {
            $D=$A+$B+$C;
            echo "La somma fra ".$A.", ".$B." e ".$C." &egrave; ".$D.".";}
            else {
            $D=$A*$B*$C;
            echo "La moltiplicazione fra ".$A.", ".$B." e ".$C." &egrave; ".$D.".";}}
          elseif ($Op=="p4") {
          $D=sqrt($A*$A)+sqrt($B*$B)+sqrt($C*$C);
          echo "La somma fra |".$A."|, |".$B."| e |".$C."| &egrave; ".$D.".";}}
        echo '<br><br>
      <a href="20180113.html">torna alla pagina iniziale</a>
    </div>
  </body> 
</html>';
?>