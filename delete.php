<?php 
	include "MessageDAO.php";
	$obj = new MessageDAO();
	$id = $_GET['id'];

	$obj->delete($id);

 ?>
