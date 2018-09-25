<!DOCTYPE html>
<html>
<body>
<?php
$error_foo = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(htmlspecialchars(stripslashes(trim($_POST["name_foo"]))))) {
        $error_foo = "Bitte einen Namen angeben.";
    } elseif (!filter_var($_POST["email_foo"], FILTER_VALIDATE_EMAIL)) {
        $error_foo = "ungültige Email";
    } else {
        echo "Hallo " . htmlspecialchars(stripslashes(trim($_POST["name_foo"]))) . "!<br>" .
            htmlspecialchars(stripslashes(trim("Newsletter wird gesendet an " . $_POST["email_foo"])));
    }
}
?>
<form action="<?php echo htmlspecialchars(stripslashes(trim($_SERVER["PHP_SELF"]))); ?>" method="post">
    <label>Name: <input type="text" name="name_foo"></label><br>
    <label>Email: <input type="text" name="email_foo"></label><br>
    <?php echo $error_foo ?>
    <input type="submit">
</form>


</body>
</html>
