<html>
<body>

<form method="post">
Name: <input type="text" name="name">
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])) {
    echo "Welcome " . $_POST['name'];
}
?>

</body>
</html>