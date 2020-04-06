<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page for Traveller</title>
    <link rel="stylesheet" type="text/css" href="travellermain.css">
</head>
<style>
    input[value], input[value], input[value] {
        background-color: transparent;
        border: #333333 solid 2px;
        padding: 6px 5px;
        text-decoration: none;
        margin: 5px 2px;
        width:150px;
        font-size: 13px;
    }
</style>
<body>
<div class="header">
    <h1> Welcome Traveller <?php echo $_GET["name"]; ?>! </h1>
    <h3> What would you like to do today? </h3>

    <form action="processTravellerAction.php" method="post">
        <p> Please choose the service you are looking for from below </p>
            <input name="username" type="hidden" id="hiddenUserName" value="<?php echo $_GET['username']; ?>" />
            <input name="name" type="hidden" id="hiddenName" value="<?php echo $_GET['name']; ?>" />
            <input name="user-input" id="search-listing-btn" type="submit" value="Search for listings"/> <br>
            <input name="user-input" id="booking-btn" type = "submit" value = "See booking history" /> <br>
            <input name="user-input" id="addfriend-btn" type = "submit" value = "Add friends to this trip!" />
    </form>
    <input type="button" value="Log out" onclick="location.href='../index.html'">
</div>
</body>
</html>
