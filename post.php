<?php
include_once("templates/header.php");

$currentPost= null;

if(isset($_GET['id'])) {
    $postId = $_GET['id'];
   
    foreach($posts as $post) {
        
        if($post['id'] == $postId) {
           $currentPost = $post;
        }
        
    }   

}

?>
 <h1><?php echo $currentPost['title'] ?></h1>
<?php
include_once("templates/footer.php");
?>