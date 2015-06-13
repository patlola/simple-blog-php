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
        <a href="newpost_template.php">Want to post ?</a>
        <?php if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) { ?>
           <li>
               <input type="hidden" name = "blog_title" class = "blog-post-title"><h3><?php echo $row['post_title'] ?></h3></input>

               <form method="post" action="updatedeletepost.php">
                   <input type="submit" name = "action" value="Update"/>
                   <input type="hidden" name = "id" value=<?php echo $row['id']?>>
               </form>
               <form method="post" action="updatedeletepost.php" onsubmit="return confirm_submit();">
                   <input type="submit" name = "action" value="Delete"/>
                   <input type="hidden" name = "id" value=<?php echo $row['id']?>>
               </form>
               <input type="hidden" name = "id" value=<?php echo $row['id']?>>
               <div class="blog-post-details">
                <input type="hidden" name = "data" class="posted-date"><h6>Date : <?php echo date('F , j , Y',strtotime($row['data'])); ?></h6></input>
                <input type="hidden" name = "author" class = "author"><h5>Author : <?php echo $row['author']; ?></h5></input>
                <input type="hidden" name = "post_body" class = "post-body"><p><?php echo $row['post_body']; ?></p></input>
            </div>
        </form>
    </li>  
    <?php } ?>
    <?php
    echo "Thats all dude...";
}
else {
    echo "0 results";
}
?>
<script>
    function confirm_submit () {
        return confirm("Are You Sure..?");
    }
</script>
</div>
</body>
</html>