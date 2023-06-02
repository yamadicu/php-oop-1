<?php 

class Movie{
    public $titolo;
    public $durata;
    public $poster;
    public function __construct($_titolo, $_duration, $_poster){
        $this->titolo = $_titolo;
        $this->duration = $_duration;
        $this->poster = $_poster;
    }
    
    public function get_movie_deails(){
        return "Movie: $this->titolo, ha una durata di: $this-> duration ";
    }
    
}

?>