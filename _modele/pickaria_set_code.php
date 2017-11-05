<?php

include_once("../init.php");

function 	set_code()
{
	$code = $_POST['code'];

	exec_sql("UPDATE pickaria SET code='".$code."' WHERE id=1");
}
set_code();

?>