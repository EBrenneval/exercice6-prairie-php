<?php
function pluie($tab){
  sort($tab);
  return $tab;
}

  $tableau = array("HTML","CSS","Javascript","PHP");
   print_r (pluie($tableau));


function soleil($lune){
$titi = implode($lune,",");
 return $titi;

}
$langage = array("HTML","CSS","Javascript","PHP");

    echo soleil ($langage);


?>
