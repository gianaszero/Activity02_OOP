Activity02_OOP
==============

this will be the pass to sir Romack
<?php 
	include "MessageDAO.php";
	$obj = new MessageDAO();
	$id = $_GET['id'];

	$obj->approve($id);
 ?>
