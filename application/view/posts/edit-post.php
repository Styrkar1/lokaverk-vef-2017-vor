<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Edit Post</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
  //tiny mce með öllum auka hlutunum sínum
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });

  </script>

</head>

<body>

<div id="wrapper">

	<form action='<?php echo URL; ?>posts/updatepost"' method='post'>
		<input type='hidden' name='postID' value='<?php echo ['postID'];?>'>

		<p><label>Title</label><br />
		<input type='text' name='postTitle' value='<?php echo ['postTitle'];?>'></p>

		<p><label>Description</label><br />
		<textarea name='postDesc' cols='60' rows='10'><?php echo ['postDesc'];?></textarea></p>

		<p><label>Content</label><br />
		<textarea name='postCont' cols='60' rows='10'><?php echo ['postCont'];?></textarea></p>

		<p><input type='submit' name='submit_update_post' value='Update'></p>
    //aftur, submit takkin sem átti síðan að leyfa post að uppfærast.
	</form>

</div>

</body>
</html> 