<?php
include __DIR__ . '../../model/movie.php';

new Movie("Star Wars" , 180, "https://images.unsplash.com/photo-1533613220915-609f661a6fe1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80");

$arrayFilm =[
    new Movie("Star Wars" , 180, "https://images.unsplash.com/photo-1533613220915-609f661a6fe1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"),
    new Movie("Il Signore Degli Anelli" , 200, "https://images.unsplash.com/photo-1535666669445-e8c15cd2e7d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"),
    new Movie("Terminator" , 120, "https://images.unsplash.com/photo-1643345397840-651fc8efd91e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"),
    new Movie("Spiderman" , 140, "https://images.unsplash.com/photo-1635805737707-575885ab0820?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80")
];

?>

<main class="container">

    <div class="row">
        <?php foreach( $arrayFilm as $elem ) {?>
        <div class="col-4 p-1">
            <div class="card">
                <img style="max-height: 30rem;" src="<?php echo $elem->poster ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $elem->titolo ?></h5>
                    <span><?php echo $elem->duration ?></span>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</main>