<?php

function getConnection(){
$mysqlhost="localhost";
$mysqluser="root";
$mysqlpwd="";
$mysqldb="GamesWebsite";

$connection=mysqli_connect($mysqlhost, $mysqluser, $mysqlpwd, $mysqldb)
    or die("DB Conneciton ERROR!");
    return $connection;
}

function insertIntoFavouritelist($game_id){
  session_start();
  $con = getConnection();
  $sql = 'CALL addToFavourites('.$_SESSION['userid'].', '.$game_id.')';
  $query = mysqli_query($con,$sql);
  return $query;
}

function getAllGames(){
  $con = getConnection();
  $sql = 'SELECT game_id, games.name as gamesname, genre_name, publishers.name as publishersname, developers.name as developersname, release_date FROM games  JOIN developers using (dev_id) Join publishers using (pub_id) Join genres using (genre_id)';
  // SELECT games.name as gamesname, genres.name as genrename, publishers.name as publishersname, developers.name as developersname, release_date FROM games  JOIN developers using (dev_id) Join publishers using (pub_id) Join genres using (genre_id);
  $query = mysqli_query($con,$sql);
  return $query;

}


 ?>
