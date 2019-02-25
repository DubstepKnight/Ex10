<?php include "menu.php"; ?>
<?php include "library_db.php";?>
<h2>Show book by ID</h2>
<form action="bookFinder.php" method="POST">
    <label for="">Type book ID</label>
    <input type="text" name="books_id" size="20">
    <input type="submit" value="Click" name="myButton">
</form>
<?php include "footer.php"; ?>
