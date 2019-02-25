<?php include "menu.php"; ?>
<?php include "library_db.php";?>
<h2>Add book</h2>
<?php
//Find the biggest books_id
$sql="SELECT max(books_id) FROM books";
$result=$db->query($sql);
$max = $result->fetch(PDO::FETCH_COLUMN);
echo 'Max = '.$max;
$max++;
?>
<form action="bookAdder.php" method="POST">
		Book ID=<input type="text" name="idP" value="<?php echo $max; ?>"  /> <br/>
		Name of the book=<input type="text" name="naP"  /> <br/>
		Author=<input type="text" name="ciP"  /> <br/>
        ISBN=<input type="text" name="isbn" /> <br>
		<input type="submit" value="Add" /> <br/>
</form>
<?php include "footer.php"; ?>
