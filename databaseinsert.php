<?php
include_once('includes/connection.php');
include_once('includes/classArticle.php');



   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
        $article_id= $_POST['article_id'];
        $article_domain= $_POST['article_domain'];
        $article_title= $_POST['article_title'];
        $article_p1= $_POST['article_p1'];
        $article_p2= $_POST['article_p2'];
        $article_p3= $_POST['article_p3'];
        $article_p4= $_POST['article_p4'];
        $article_p5= $_POST['article_p5'];
        $article_i1= $_POST['article_i1'];
        $article_i2= $_POST['article_i2'];
        $article_i3= $_POST['article_i3'];
        $article_i4= $_POST['article_i4'];
        $article_i5= $_POST['article_i5'];
        $article_st1= $_POST['article_st1'];
        $article_st2= $_POST['article_st2'];
        $article_st3= $_POST['article_st3'];
        $article_st4= $_POST['article_st4'];
        $article_st5= $_POST['article_st5'];
        

        global $pdo;
        $query= $pdo->prepare("INSERT into articles values(:id,:domain,:title,:st1,:p1,:st2,:p2,:st3,:p3,:st4,:p4,:st5,:p5,:i1,:i2,:i3,:i4,:i5)");
        $query->bindValue(':id', $article_id, PDO::PARAM_INT);
        $query->bindValue(':domain', $article_domain, PDO::PARAM_STR);
        $query->bindValue(':title', $article_title, PDO::PARAM_STR);
        $query->bindValue(':p1', $article_p1, PDO::PARAM_STR);
        $query->bindValue(':p2', $article_p2, PDO::PARAM_STR);
        $query->bindValue(':p3', $article_p3, PDO::PARAM_STR);
        $query->bindValue(':p4', $article_p4, PDO::PARAM_STR);
        $query->bindValue(':p5', $article_p5, PDO::PARAM_STR);

        $query->bindValue(':i1', $article_i1, PDO::PARAM_STR);
        $query->bindValue(':i2', $article_i2, PDO::PARAM_STR);
        $query->bindValue(':i3', $article_i3, PDO::PARAM_STR);
        $query->bindValue(':i4', $article_i4, PDO::PARAM_STR);
        $query->bindValue(':i5', $article_i5, PDO::PARAM_STR);
        
        $query->bindValue(':st1', $article_st1, PDO::PARAM_STR);
        $query->bindValue(':st2', $article_st2, PDO::PARAM_STR);
        $query->bindValue(':st3', $article_st3, PDO::PARAM_STR);
        $query->bindValue(':st4', $article_st4, PDO::PARAM_STR);
        $query->bindValue(':st5', $article_st5, PDO::PARAM_STR);
        

        $query->execute();
   }


?>
