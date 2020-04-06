<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Traveller add friends page</title>
    <link rel="stylesheet" type="text/css" href="travellermain.css">
</head>
<body>
    <h1> Hi <?php echo $_GET['name']; ?>! </h1>
    <h3> Add your friends' email here to share your travel information! </h3>
    <form action="travellerAddFriends.php" method="post">
        <label for="friendEmail"> Friend's email </label>
        <input id="friendEmail" name="friendEmail" type="email" maxlength="40">
        <button name="add" type="submit" >Add</button>
    </form>
</body>
</html>
<?php
    include "../connect.php";
    include "../display.php";

    global $conn;
    $conn = OpenCon();

    if (isset($_POST['add'])) {
    $username = $_GET['username'];
    $friendEmail = $_POST['friendEmail'];
    $name = $_GET['name'];
    $sql = "INSERT INTO Friend (Username, Email) VALUES ('$username','$friendEmail')";
    mysqli_query($sql, $conn);
}
?>

