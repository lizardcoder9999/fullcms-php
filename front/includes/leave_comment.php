<?php 

if(isset($_POST['leave_comment'])){

    include_once("db.php");

    $author_name = $_POST['author_name'];
    $comment_content = $_POST['comment_content'];

    $query = "INSERT INTO comments(comment_author,comment_content)";
    $query .= "VALUES(?,?)";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$query)){

        die("QUERY FAILED".mysqli_error($connection));

    }else{

        mysqli_stmt_bind_param($stmt,'ss',$author_name,$comment_content);
        $result = mysqli_stmt_execute($stmt);
        header("Location: ../post.php");
    }

}












?>