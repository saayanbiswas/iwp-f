<?php

class Article{
    public function fetch_all(){
        global $pdo;
        
        $query= $pdo->prepare("SELECT * from articles");
        $query->execute();
        
        return $query->fetchAll();
    }

    public function fetch_data($article_id){
        global $pdo;
        $query= $pdo->prepare("SELECT * FROM articles WHERE article_id=:article_id");
        $query->bindValue(':article_id', $article_id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetch();

        header('location: AdminInsert.html');
    }

}
?>