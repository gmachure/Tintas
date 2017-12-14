<?php

include_once 'connexion_bdd.php';

if(isset($_POST['id']) && isset($_POST['_winner'])){
    $id_user = $_POST['id'];
    $winner = $_POST['_winner'];
    $reponse = $pdo->query("SELECT PARTIE_JOUEES, PARTIE_GAGNEES, PARTIE_PERDUES FROM users WHERE ID_USR=" . $id_user);
    $data = $reponse->fetch();
    $nb_games = $data['PARTIE_JOUEES'] + 1;
    $nb_win = $data['PARTIE_GAGNEES'];
    $nb_loose = $data['PARTIE_PERDUES'];
    if($winner === 0) {
        $nb_win ++;
    }else if($winner === 1){
        $nb_loose ++;
    }

    $query = $pdo -> prepare("UPDATE users SET PARTIE_JOUEES=:nb_games WHERE ID_USR=:id_user");
    $query -> execute(array(
        'nb_games'  => $nb_games,
        'id_user'   => $id_user
    ));

    $query = $pdo -> prepare("UPDATE users SET PARTIE_GAGNEES=:nb_win WHERE ID_USR=:id_user");
    $query -> execute(array(
        'nb_win'  => $nb_win,
        'id_user'   => $id_user
    ));

    $query = $pdo -> prepare("UPDATE users SET PARTIE_PERDUES=:nb_loose WHERE ID_USR=:id_user");
    $query -> execute(array(
        'nb_loose'  => $nb_loose,
        'id_user'   => $id_user
    ));

    header('Location:../game.php');
}
