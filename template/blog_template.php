<!DOCTYPE html>
<html>
<head>
    <title>Tech Company</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/blog/static/css/blog.css">
</head>

<body>
    <div class = "header-inner">
        <div class = "blog-title"> <h2> Tech Company </h2> </div>
        <div class="blog-desc"> <h6> Tech Blog </h6> </div>
    </div>
    <br><br>
    <div class = "blog-posts">
        <h4 style="text-align:center"> Blog Posts </h4>
        <a href="/blog/template/newpost_template.php">Want to post ?</a>
        <?php if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) { ?>
           <li id="blog-post-list">
               <input type="hidden" name = "blog_title" class = "blog-post-title"><h3><?php echo $row['post_title'] ?></h3></input>

               <form method="post" action="/blog/controller/updatedeletepost.php" style="display:inline-block">
                   <input type="submit" name = "action" value="Update"/>
                   <input type="hidden" name = "id" value=<?php echo $row['id']?>>
               </form>
               <form method="post" action="/blog/controller/updatedeletepost.php" onsubmit="return confirm_submit();" style="display:inline-block">
                   <input type="submit" name = "action" value="Delete"/>
                   <input type="hidden" name = "id" value=<?php echo $row['id']?>>
               </form>
               <input type="hidden" name = "id" value=<?php echo $row['id']?>>
               <div class="blog-post-details">
                <input type="hidden" name = "data" class="posted-date" style="display:inline-block"><h6>Date : <?php echo date('F , j , Y',strtotime($row['data'])); ?></h6></input>
                <input type="hidden" name = "author" class = "author" style="display:inline-block"><h5>Author : <?php echo $row['author']; ?></h5></input>
                <input type="hidden" name = "post_body" class = "post-body"><p><?php echo $row['post_body']; ?></p></input>
            </div>
        </form>
    </li><br>
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