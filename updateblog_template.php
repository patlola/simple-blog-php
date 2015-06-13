<!DOCTYPE html>
<html>
<head>
    <title>Tech Company</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <style>
        .header-inner{
            margin-left: auto;
            margin-right: auto;
            position: relative;border-bottom-left-radius: 2em;
            border: 2px solid;
            width: 60%;
            background-color: lightblue;
        }
        .blog-title {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            text-align: center;
            font-family: Papyrus, fantasy;
            font-weight: 700
        }
        .blog-desc {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            text-align: center;
            font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', Charcoal, 'Helvetica Inserat', 'Bitstream Vera Sans Bold', 'Arial Black', 'sans serif';
            font-size: 30px;
        }
        .blog-posts {
            background-color: #C7C7C7;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            border-top-right-radius: 4em;
            border: 2px solid;
            width: 60%;
            padding-left: 20px;
        }
        .posted-date {
            line-height: 200%;
            display: inline-block;
            color: #9E474B;
        }
        .author {
            display: inline-block;
            color: #9E474B;
            font-size: 10px;
        }
        .blog-post-title {
            font-family: 'Lucida Console', 'Lucida Sans Typewriter', monaco, 'Bitstream Vera Sans Mono', monospace;
            font-weight: 500;
            font-size: 15px;
            display: inline-block;
        }
        #update {
            display: inline-block;
        }
        h6,h5{
            margin:0;
        }
        h3{
            margin-top: 20px;
            margin-bottom: 0px;
        }
    </style>
</head>

<body>
    <div class = "header-inner">
        <div class = "blog-title"> <h2> Tech Company </h2> </div>
        <div class="blog-desc"> <h6> Tech Blog </h6> </div>
    </div>
    <br><br>
    <div class = "blog-posts">
        <h4 style="text-align:center"> Blog Posts </h4>
        <?php if ($data->num_rows > 0) { 
          while($row = $data->fetch_assoc()) { ?>
          <li>
          <form method="post" action="updatedeletepost.php">
               <textarea name = "blog_title" rows="1" cols="50" class = "blog-post-title"><?php print_r($row['post_title']); ?></textarea>
               <input type="hidden" name = "id" value=<?php echo $row['id']?>>
               <div class="blog-post-details">
                <h6>Last Modified Date : <?php echo date('F , j , Y',strtotime($row['data'])); echo " Author : " . $row['author']; ?></h6>
                <textarea type="text" rows="10" cols="50" name = "post_body" class = "post-body" ><?php echo $row['post_body']; ?></textarea>
            </div>
            <input type="submit" name = "action" value="UpdateSql"/>
        </form>
    </li>  
    <?php } 
}?>

</div>
</body>
</html>