<html>

<head>
    <title>XSS</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="username" value="" />
        <input type="submit" name="submit" value="Submit" />// you missed here
    </form>

    <?php
    if (isset($_GET['submit'])) { //to check if the form was submitted
        $username = $_GET['username'];
        echo $username;
    }
    ?>

</body>
<html>
