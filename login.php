<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=GamesWebsite', 'root', '');
 
if(isset($_GET['login'])) {
    $username = $_POST['username'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM USERS WHERE user_name = :username");
    $result = $statement->execute(array('username' => $username));
    $user = $statement->fetch();

    //Überprüfung des Passworts
    if ($user !== false && $user['user_pw'] == $passwort) {
        $_SESSION['userid'] = $user['user_id'];

        $statement = $pdo->prepare("Update USERS SET last_login=Now() WHERE user_id=:userID");
        $result = $statement->execute(array('userID' => $user['user_id']));

        print($result);

        die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');

    } else {
        $errorMessage = "Nutzername oder Passwort war ungültig<br>";
    }
    
}
?>


<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>    
</head> 
<body>
 
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
 
<form action="?login=1" method="post">
Benutzername:<br>
<input type="username" size="40" maxlength="250" name="username"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Abschicken">
</form> 
</body>
</html>