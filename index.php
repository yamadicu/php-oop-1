<?php 
class movie{
public $attore; 
function __construct($eta_attore){
    $this->attore = $eta_attore;
}
}

$Genere = new movie(20);

echo $Genere-> attore

?>