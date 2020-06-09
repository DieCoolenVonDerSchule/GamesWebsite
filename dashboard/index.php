<?php
 include_once ('header.php');
 include_once('functions.php');
?>


<h2> Liste mit allen Spielen </h2>

<table class="table table-striped table-bordered" style="width:100%">

<thead>
  <tr>
    <td>Name</td>
    <td>Genre</td>
    <td>Developer</td>
    <td>Publisher</td>
    <td>Release Date</td>
  </tr>
  </thead>

  <tbody>
<?php
$query = getAllGames();

while ($data = mysqli_fetch_array($query)) {

var_dump($data);
  ?>

          <tr>
            <td><?php echo $data[0]; ?></td>
            <td><?php echo $data['genrename']; ?></td>
            <td><?php echo $data['developersname']; ?></td>
            <td><?php echo $data['publishersname']; ?></td>
            <td><?php echo $data['release_date']; ?></td>
            <td class="btn-group">
                  <a type="button" class="btn btn-sm btn-outline-secondary" href="checkout.php?id=<?php echo $data['pid']; ?>">Favoriten Liste hinzufügen</a>
            </td>
          </tr>
      <?php } ?>
      </tbody>

  </table>


<?php
 include_once ('footer.php');
?>


array(23) {
  [0]=> string(1) "1" ["genre_id"]=> string(1) "1"
  [1]=> string(1) "1" ["pub_id"]=> string(1) "1"
  [2]=> string(1) "1" ["dev_id"]=> string(1) "1"
  [3]=> string(1) "1" ["game_id"]=> string(1) "1"
  [4]=> string(16) "Suber Mario Bros" ["name"]=> string(8) "Nintendo"
  [5]=> string(1) "1" ["ranking"]=> string(1) "1"
  [6]=> string(10) "2020-05-23" ["release_date"]=> string(10) "2020-05-23"
  [7]=> string(1) "2" ["userpoints"]=> string(1) "2"
  [8]=> string(8) "Nintendo"
  [9]=> string(5) "Japan" ["country"]=> string(5) "Japan"
  [10]=> string(8) "Nintendo"
  [11]=> string(5) "Japan"
  [12]=> string(10) "Platformer" ["genre_name"]=> string(10) "Platformer" } array(23) { [0]=> string(1) "2" ["genre_id"]=> string(1) "2" [1]=> string(1) "2" ["pub_id"]=> string(1) "2" [2]=> string(1) "2" ["dev_id"]=> string(1) "2" [3]=> string(1) "2" ["game_id"]=> string(1) "2" [4]=> string(8) "Fortnite" ["name"]=> string(10) "Epic Games" [5]=> string(1) "2" ["ranking"]=> string(1) "2" [6]=> string(10) "2020-05-23" ["release_date"]=> string(10) "2020-05-23" [7]=> string(1) "2" ["userpoints"]=> string(1) "2" [8]=> string(10) "Epic Games" [9]=> string(3) "USA" ["country"]=> string(3) "USA" [10]=> string(10) "Epic Games" [11]=> string(3) "USA" [12]=> string(7) "Shooter" ["genre_name"]=> string(7) "Shooter" } array(23) { [0]=> string(1) "2" ["genre_id"]=> string(1) "2" [1]=> string(1) "4" ["pub_id"]=> string(1) "4" [2]=> string(1) "4" ["dev_id"]=> string(1) "4" [3]=> string(1) "4" ["game_id"]=> string(1) "4" [4]=> string(11) "Rainbow Six" ["name"]=> string(7) "Ubisoft" [5]=> string(1) "4" ["ranking"]=> string(1) "4" [6]=> string(10) "2020-05-23" ["release_date"]=> string(10) "2020-05-23" [7]=> string(1) "0" ["userpoints"]=> string(1) "0" [8]=> string(7) "Ubisoft" [9]=> string(3) "USA" ["country"]=> string(3) "USA" [10]=> string(7) "Ubisoft" [11]=> string(3) "USA" [12]=> string(7) "Shooter" ["genre_name"]=> string(7) "Shooter" } array(23) { [0]=> string(1) "3" ["genre_id"]=> string(1) "3" [1]=> string(1) "3" ["pub_id"]=> string(1) "3" [2]=> string(1) "3" ["dev_id"]=> string(1) "3" [3]=> string(1) "3" ["game_id"]=> string(1) "3" [4]=> string(14) "Monster Hunter" ["name"]=> string(6) "Capcom" [5]=> string(1) "3" ["ranking"]=> string(1) "3" [6]=> string(10) "2020-05-23" ["release_date"]=> string(10) "2020-05-23" [7]=> string(1) "2" ["userpoints"]=> string(1) "2" [8]=> string(6) "Capcom" [9]=> string(5) "Japan" ["country"]=> string(5) "Japan" [10]=> string(6) "Capcom" [11]=> string(5) "Japan" [12]=> string(3) "RPG" ["genre_name"]=> string(3) "RPG" } array(23) { [0]=> string(1) "3" ["genre_id"]=> string(1) "3" [1]=> string(1) "5" ["pub_id"]=> string(1) "5" [2]=> string(1) "5" ["dev_id"]=> string(1) "5" [3]=> string(1) "5" ["game_id"]=> string(1) "5" [4]=> string(9) "Runescape" ["name"]=> string(5) "Jagex" [5]=> string(1) "5" ["ranking"]=> string(1) "5" [6]=> string(10) "2020-05-23" ["release_date"]=> string(10) "2020-05-23" [7]=> string(1) "0" ["userpoints"]=> string(1) "0" [8]=> string(5) "Jagex" [9]=> string(3) "USA" ["country"]=> string(3) "USA" [10]=> string(5) "Jagex" [11]=> string(3) "USA" [12]=> string(3) "RPG" ["genre_name"]=> string(3) "RPG" }
