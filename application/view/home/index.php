<?php
//define('__ROOT__', dirname(dirname(__FILE__))); 
//require_once(__ROOT__.'/config.php'); 
require_once('/var/www/html/myproject/application/config/config.php')
?>
<div class="container">
    <h1>Home</h1>
    <h2>You are in the View: application/view/home/index.php (everything in the box comes from this file)</h2>
    <p>In a real application this could be the homepage.</p>

    <?php
    try {

        $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
        while($row = $stmt->fetch()){
            
            echo '<div>';
                echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
                echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                echo '<p>'.$row['postDesc'].'</p>';                
                echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';                
            echo '</div>';

        }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }


?>

</div>
