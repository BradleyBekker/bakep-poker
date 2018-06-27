<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="test1.php" method="post">
<input type="submit" name="" value="roll">
    </form>
  </body>
</html>

<?php
echo " halloo B, hier dobbul<br>";
//test
$worp = rand(1,6);


for ($i=0; $i < 5; $i++) {
  $worp = rand(1,6);
  //print($worp);
  worp($worp);
  error_reporting(E_ERROR | E_PARSE);
  $aWorp[ $i ] = $worp;

  print "<img src=image$worp.png?".date("U").">";

}
analyse($aWorp);

function worp($worp){
        $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
        $background_color = imagecolorallocate($im, 0, 100, 255);   // yellow

        $red = imagecolorallocate($im, 255, 0, 0);                  // red
        $blue = imagecolorallocate($im,255, 0, 0);






        if ($worp > 1) {
          // stip 1
          imagefilledellipse($im, 50, 50, 40, 40, $blue); // stip 1  // code...
          }

        if($worp > 3){
        // stip 2
        imagefilledellipse($im, 150, 50, 40, 40, $blue); // stip 2
        }
        if($worp == 6){
        // stip 3
        imagefilledellipse($im, 50, 100, 40, 40, $blue); // stip 3
      }
        if($worp == 1 || $worp == 3 || $worp == 5){
        // stip 4
        imagefilledellipse($im, 100, 100, 40, 40, $blue); // stip 4
        }

        if ($worp == 6) {
        // stip 5
        imagefilledellipse($im, 150, 100, 40, 40, $blue); // stip 5
        }
        if ($worp >3) {
        // stip 6
        imagefilledellipse($im, 50, 150, 40, 40, $blue); // stip 6
      }
      if ($worp > 1) {
        // stip 7
        imagefilledellipse($im, 150, 150, 40, 40, $blue); // stip 7
      }

        imagepng($im,"image$worp.png");
        imagedestroy($im);
}

function analyse($aWorp){
  $aScore = array (0,0,0,0,0,0,0);//init op 0
	for ($i = 1 ; $i <= 6 ; $i++){//outer loop
   	 for ($j = 0 ; $j <5 ; $j++){//inner loop
        	if ($aWorp[$j] == $i){
            	$aScore[$i]++;
        	}}}

	return $aScore; //$aScore is een lokale var.

        }
        function pokerOrNot($aScore){

           rsort($aScore);
              //print_r($aScore);// debug
              if($aScore[0] == 5){echo '<br>' . "poker";}
              if($aScore[0] == 4){echo '<br>' . "4 of a kind";}
              if($aScore[0] == 3){
                  if($aScore[1] == 2){
                    echo '<br>' . "fullhouse";}
                  else { echo '<br>' . "3 of a kind!!!";}
                  }
              if($aScore[0] == 2){
                if($aScore[1] == 2){
                  echo '<br>' . "2 pairs";
                }
                else{
                  echo '<br>' . "1 pair";
                }

              }
              if($aScore[0] == 1){
                echo '<br>' . "You got absolutly nothing ";
              }
        }

        $aScore = analyse($aWorp);
        pokerOrNot($aScore);






?>
