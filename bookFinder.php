<?php include "menu.php"; ?>
<?php include "library_db.php"; ?>
<?php 
    require 'library_db.php';
	$selection=$_POST['books_id'];
	$stmt = $db->prepare("SELECT books_id, books_name, author, isbn  FROM books WHERE books_id = :id");
	$stmt->bindParam(':id',$selection);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if (isset($_POST['myButton']))
	{
		foreach ($result as $row) {
			echo $row['books_id'].' '.$row['books_name'].' '.$row['author'].' '.$row['isbn'].'<br/>';
        }
    }
?>
<?php include "footer.php"; ?>
