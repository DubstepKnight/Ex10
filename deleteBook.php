<?php include "menu.php"; ?>
<?php include "library_db.php";?>
<h2>Delete Book</h2>
<p>
    Do you want to delete this book? <br>
    <form action="bookDeleter.php" method="post">
        <input type="text" name="b_id" value=""> <br>
        <a href="books.php"> <button>Cancel</button></a>
        <input type="submit" name="" value="Delete">
    </form>
</p>

<?php include "footer.php"; ?>
