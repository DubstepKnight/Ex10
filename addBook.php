<?php include "menu.php"; ?>
<?php include "library_db.php";?>
<h2>Add book</h2>
<form action="bookAdder.php" method="POST">
		Book ID=<input type="text" name="idP"  /> <br/>
		Name of the book=<input type="text" name="naP"  /> <br/>
		Author=<input type="text" name="ciP"  /> <br/>
        ISBN=<input type="text" name="isbn" /> <br>
		<input type="submit" value="Add" /> <br/>
</form>
<?php include "footer.php"; ?>
