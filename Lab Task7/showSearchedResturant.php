
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
   // include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>Restaurant_id</th>
			<th>Restaurant_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedResturants as $i => $rstrnt): ?>
			<tr>
				<td><a href="../showResturant.php?id=<?php echo $rstrnt['ID'] ?>"><?php echo $rstrnt['ID'] ?></a></td>
				<td><?php echo $rstrnt['Name'] ?></td>
				<td><a href="../editResturant.php?id=<?php echo $rstrnt['ID'] ?>">Edit</a>&nbsp<a href="deleteResturant.php?id=<?php echo $rstrnt['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>