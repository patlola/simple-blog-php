<?php
include 'sql.php';
$result = getPosts();
include("template/blog_template.php");

?> 