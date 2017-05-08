<?php 
//Doing this for all the admin pages so that nobody can check without being an admin
//include config

//define('__ROOT__', dirname(dirname(__FILE__))); 
//require_once(__ROOT__.'/config.php'); 
/*try {
$db = new PDO('mysql:host='.DB_HOST.';port=8889;dbname='.DB_NAME, DB_USER, DB_PASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connection established";
}
 catch (Exception $e) {
echo "Connection failed: " . $e->GetMessage();
}
*/
//if not logged in redirect to login page
//if(!$user->is_logged_in()){ header('Location: login.php'); }
?>

<form action="" method="post">
<p><label>Username</label><input type="text" name="username" value=""  /></p>
<p><label>Password</label><input type="password" name="password" value=""  /></p>
<p><label></label><input type="submit" name="submit" value="Login"  /></p>
</form>

<?php
if(isset($_POST['submit'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if($user->login($username,$password)){ 

        header('Location: index.php');
        exit;
    

    } else {
        $message = '<p class="error">Wrong username or password</p>';
    }

}

if(isset($message)){ echo $message; }
?>