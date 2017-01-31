<?php
function pluie($tab){
  sort($tab);
  return $tab;
}

  $tableau = array("HTML","CSS","Javascript","PHP");
  foreach($tableau as $tab)
  {
    echo $tab ,'<br/>';
  }



function soleil($lune){
$titi = implode($lune,",");
 return $titi;

}
$langage = array("HTML","CSS","Javascript","PHP");

    echo soleil ($langage);


?>
