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


function getAllGames(){
  $con = getConnection();
  $sql = 'SELECT * FROM games';
  // SELECT games.name as gamesname, genres.name as genrename, publishers.name as publishersname, developers.name as developersname, release_date FROM games  JOIN developers using (dev_id) Join publishers using (pub_id) Join genres using (genre_id);
  $query = mysqli_query($con,$sql);
  return $query;

}


 ?>
