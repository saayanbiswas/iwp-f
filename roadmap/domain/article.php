<?php
include_once('../../includes/connection.php');
include_once('../../includes/classArticle.php');

$article = new Article();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $data= $article->fetch_data($id);
        ?>
        <html>
        <head>
            <title>Front-End</title>
            
        </head>
        <body>
            <div class="container">
                <a href="front-end.php">&larr; Back</a>
                <h4><?php echo $data['article_domain']?></h4>
                <h1> <?php echo $data['article_title']; ?></h1>
                
                <p> <?php echo $data['article_st1'] ?> </p>
                <?php if($data['article_i1']!=''){?>
                <img src="<?php echo $data['article_i1']?>" width=600px>
                <?php }?>
                
                <p> <?php echo $data['article_p1'] ?> </p>
                
                <p> <?php echo $data['article_st2'] ?> </p>
                <?php if($data['article_i2']!=''){?>
                <img src="<?php echo $data['article_i2']?>" width=600px>
                <?php }?>

                <p> <?php echo $data['article_p2'] ?> </p>
                
                <p> <?php echo $data['article_st3'] ?> </p>
                <?php if($data['article_i3']!=''){?>
                <img src="<?php echo $data['article_i3']?>" width=600px>
                <?php }?>

                <p> <?php echo $data['article_p3'] ?> </p>

                <p> <?php echo $data['article_st4'] ?> </p>
                <?php if($data['article_i4']!=''){?>
                <img src="<?php echo $data['article_i4']?>" width=600px>
                <?php }?>

                <p> <?php echo $data['article_p4'] ?> </p>

                <p> <?php echo $data['article_st5'] ?> </p>
                <?php if($data['article_i5']!=''){?>
                <img src="<?php echo $data['article_i5']?>" width=600px>
                <?php }?>

                <p> <?php echo $data['article_p5'] ?> </p>
                
            </div>
        </body>
        </html> 
        <?php
    }

    else{
        header('Location: index.php?id='.$id);
        exit();
    }

?>
