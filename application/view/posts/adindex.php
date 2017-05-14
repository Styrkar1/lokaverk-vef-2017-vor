<?php
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
</head>
<body>

	<div id="wrapper">

	<table>
	<tr>
		<th>Title</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
	<?php
		echo '<tr>';
		echo '<td>'.'postTitle'.'</td>';
		echo '<td>'.date('jS M Y', strtotime('postDate')).'</td>';
	?>

	<td>
		<a href="edit-post.php?id=<?php echo $row['postID'];?>">Edit</a> 
		<a href="<?php echo URL . 'Post/deletePost/' . htmlspecialchars($Post->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a>

	</td>
	<?php
	//fyrir ofan er takkin sem átti að eyða post.	
	echo '</tr>';
	?>
	</table>

	<p><a href='add-post.php'>Add Post</a></p>

</div>

</body>
</html>