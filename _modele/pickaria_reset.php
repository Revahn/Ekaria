<?php

include_once("../init.php");

function 	reset_tab()
{
	exec_sql("UPDATE pickaria SET code='' WHERE id=1");
}
reset_tab();

?>