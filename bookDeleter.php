<?php include "library_db.php"; ?>
<?php
print_r($_POST);
$sql='DELETE FROM books WHERE books_id ='.$_POST['b_id'];
$result=$db->query($sql);
echo 'book was deleted';
//you can use header-location only if there is no output yet
header('Location: showBooks.php');
?>

