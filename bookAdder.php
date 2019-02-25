<?php include "menu.php"; ?>
<?php include "library_db.php"; ?>
<?php
	require 'library_db.php';
	$stmt=$db->prepare("INSERT INTO books (books_id, books_name, author, isbn ) VALUES(:idP,:naP,:ciP,:isbn)");
		$stmt->bindParam(':idP', $idP);
		$stmt->bindParam(':naP', $naP);
        $stmt->bindParam(':ciP', $ciP);
        $stmt->bindParam(':isbn', $isbn);
	$idP=$_POST['idP'];
	$naP=$_POST['naP'];
    $ciP=$_POST['ciP'];
    $isbn=$_POST['isbn'];

	$stmt->execute();

?>
<?php include "footer.php"; ?>
