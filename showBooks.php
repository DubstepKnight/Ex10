<?php include "menu.php"; ?>
<?php include "library_db.php";?>
	<h2>Books</h2>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th> <th>Name of the book</th> <th>Author</th> <th>isbn</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql="SELECT * FROM books";
				$result = $db->query($sql);

				foreach ($result as $row)
				{
					echo "<tr>";
					echo "<td>".$row["books_id"]."</td>";
					echo "<td>".$row["books_name"]."</td>";
					echo "<td>".$row["author"]."</td>";
					echo "<td>".$row["isbn"]."</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
<?php include "footer.php"; ?>