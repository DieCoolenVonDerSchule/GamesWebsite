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
    <td>Zu Favoriten hinzufügen</td>
  </tr>
  </thead>

  <tbody>
<?php
session_start();
$query = getAllGames();

while ($data = mysqli_fetch_array($query)) { ?>

          <tr>
            <td><?php echo $data['gamesname']; ?></td>
            <td><?php echo $data['genre_name']; ?></td>
            <td><?php echo $data['developersname']; ?></td>
            <td><?php echo $data['publishersname']; ?></td>
            <td><?php echo $data['release_date']; ?></td>

            <td class="btn-group">
                <a type="button" class="btn btn-sm btn-outline-secondary" href="addGame.php?id=<?php echo $data['game_id']; ?>">Add</a>
            </td>
          </tr>
      <?php } ?>
      </tbody>

  </table>



<?php
 include_once ('footer.php');
?>
