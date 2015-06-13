<?php
	
	include 'sql.php';
	if(isset($_POST['action'])) {
		switch ($_POST['action']) {
			case 'Update':
				$data = getRowByID($_POST['id']);
				include "updateblog_template.php";
				break;
			
			case 'Delete':
				delete($_POST['id']);
				break;
			case 'UpdateSql':
				$blog_title = $_POST['blog_title'];
				$post_body = $_POST['post_body'];
				$id = $_POST['id'];
				insertUpdatedRow($id, $blog_title, $post_body);
				break;
			case 'Post It':
				$blog_title = $_POST['blog_title'];
				$post_body = $_POST['post_body'];
				$author_name = $_POST['author'];
				insertNewRow($blog_title, $post_body, $author_name);
				break;
		}
	}
?>