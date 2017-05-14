<?php
namespace Mini\Model;

use Mini\Core\Model;

class Post extends Model
{
	//fær post id og fer í gegnum þreðin til að eyða því
	public function deletePost($postID)
	{
		$sql = "DELETE FROM blog_posts WHERE postID = :postID";
		$query = $this->db->prepare($sql);
		$parameters = array(':postID' => $postID);

		$query->execute($parameters);
	}

	//get post til að fylla adindex með posts
	public function getAllPosts()
	{
		$sql = "SELECT postID, postTitle, postDesc, postCont, postDate FROM blog_posts";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
	}
	//gerir sig til að bæta við inní databaseið með öllu sem það þarf
	public function addPost($postTitle,$postDesc,$postCont,$postDate)
	{
		if(!isset($error)){
			try {
				$stmt = $db->prepare('INSERT INTO blog_posts (postTitle,postDesc,postCont,postDate) VALUES (:postTitle, :postDesc, :postCont, :postDate)') ;
				$stmt->execute(array(
					':postTitle' => $postTitle,
					':postDesc' => $postDesc,
					':postCont' => $postCont,
					':postDate' => date('Y-m-d H:i:s')
				));
				exit;
			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		}
	}
	//aftur, ekki 100% um hvert þetta var að fara en það átti að ná í post sem updatepost átti síðan að breyta
	public function getpost()
	{
        $sql = "SELECT postID, postTitle,postDesc,postCont,postDate FROM blog WHERE postID = :postID LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':postID' => $postID);

        $query->execute($parameters);

        return $query->fetch();
	}
	//átti að breyta post eftir því sem var sett inní edit-post
    public function updatePost($postTitle, $postDesc, $postCont, $postID)
    {
        $sql = "UPDATE blog SET postTitle = :postTitle, postDesc = :postDesc, postCont = :postCont WHERE postID = :postID";
        $query = $this->db->prepare($sql);
        $parameters = array(':postTitle' => $postTitle, ':postDesc' => $postDesc, ':postCont' => $postCont, ':postID' => $postID);
        $query->execute($parameters);
    }
}