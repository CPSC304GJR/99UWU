<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Traveller Account </title>
    <link rel="stylesheet" type="text/css" href="createmain.css">

</head>
<div class="header">
    <body>
    <h1>Welcome to create your traveller account!</h1>
    <form action="createUser.php" method="post">
        <br>
        Please provide the following information to create an account.
        </br>
        <br>
        Your username will be the email address we use to contact you!
        </br>
        <br>
        <label for="username"> Username</label>
        <input id="username" name="username" type="text" placeholder="type your username here (email address you wish to login with" required>
        </br>
        <br>
        <label for="password"> Password</label>
        <input id="password" name="password" type="text" placeholder="type your pass in here (case sensitive)" required>
        </br>
        <br>
        <label for="name"> Name</label>
        <input id="name" name="name" type="text" placeholder="type your name or nickname of how you want others to call you!">
        </br>
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="nextstep">
            <a href = "createUser.html">Cancel</a>
            <a href="createTraveller.php">Finish</a>
        </div>
    </form>
    </body>
</div>
</html>