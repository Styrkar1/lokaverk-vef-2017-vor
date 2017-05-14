<?php

namespace Mini\Controller;

use Mini\Model\Post;

class PostController
{
	//bara indexið
	public function adindex()
    {
    	$post = new post();

    	$posts = $post->getAllPosts();

        require APP . 'view/_templates/header.php';
        require APP . 'view/posts/adindex.php';
        require APP . 'view/_templates/footer.php';
    }
    //frekar basic stuff hér, instencar nýtt Post model og gerir deletepost í því.
    public function deletePost($postID)
    {
    	if (isset($postID)) {
            $Post = new Post();
            $post->deletePost($postID);
        }
    }
    //nær í allt fyrir vefsíðuna og síðan kíkir hvort að submit hefir verið ýtt á, síðan býr það til nýtt post instance og gefur addpsot öllum upplýsingum sem það þarf.
    public function addPost()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/posts/add-post.php';
        require APP . 'view/_templates/footer.php';

        if (isset($_POST["submit"])) {
            $Post = new Post();
            $Post->addPost($_POST["postTitle"], $_POST["postDesc"],  $_POST["postCont"], $_POST["postDate"]);
        }
    }

    //ég er ekki 100% hvert ég var að fara með þennan en það átti an ná í eitt post síðan breyta því
    public function editpost()
    {
        if (isset($postID)) {
            $Post = new Post();
            $Post = $Post->getPost($postID);
        }
            require APP . 'view/_templates/header.php';
            require APP . 'view/posts/edit-post.php';
            require APP . 'view/_templates/footer.php';
    }
    //og hér er það sem átti að breyta postinu sem getpost náði í
    public function updatePost()
    {
            require APP . 'view/_templates/header.php';
            require APP . 'view/Posts/edit-post.php';
            require APP . 'view/_templates/footer.php';

        if (isset($_POST["submit_update_post"])) {
            $Post = new Post();
            $Post->updatePost($_POST["postTitle"], $_POST["postDesc"],  $_POST["postCont"], $_POST["postDate"]);
        }
    }
}

