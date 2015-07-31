<!DOCTYPE html>
<html>
<head>
    <title>Tech Company</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/blog/static/css/newpost.css">
</head>

<body>
    <div class = "header-inner">
        <div class = "blog-title"> <h2> Tech Company </h2> </div>
        <div class="blog-desc"> <h6> Tech Blog </h6> </div>
    </div>
    <br><br>
    <div class = "blog-posts">
        <h3 style="text-align:center"> New Blog Post.. </h3>
          <form method="post" action="/blog/controller/updatedeletepost.php">
            <h4>Post Title :
               <textarea name = "blog_title" rows="1" cols="50" min="3" max="150"class = "blog-post-title" required></textarea></h4>
               <div class="blog-post-details">
               <h5> Author : 
                <input type="text" name = "author" min="3" max="30" class = "author" required></input><br></h5>
                <h5> Description : <br><textarea type="text" min="30" max="12000" rows="10" cols="50" name = "post_body" class = "post-body" required></textarea></h5><br>
            </div>
            <input type="submit" name = "action" value="Post It"/>
        </form>
</div>
</body>
</html>