<?php 
include_once __DIR__ . '/partials/head.php'
include_once __DIR__ . '/partials/footer.php'

class movie{
public $titolo;
public $durata;
public $poster;
public function __construct($_titolo, $_duration, $_poster){
    $this->titolo = $_titolo;
    $this->duration = $_duration;
    $this->poster = $_poster;
}

public function get_movie_deails(){
    return "movie: $this->titolo "
}

}



$Genere = new movie(20);

echo $Genere-> attore

?>