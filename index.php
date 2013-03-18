<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
  // include adodb libraly
  include "../adodb5/adodb.inc.php";
  // adodb connect
  $db = &ADONewConnection('mysql');
  // $db->debug = true;
  $db->Connect('localhost', 'intranet_opp', 'intranet.opp.thai', 'intranet_opp'); //Connecting to your DBMS.
  $db->EXECUTE("set names 'utf8'");

	$departments = $db->GetAll('select * from departments');
	$personnels = $db->GetAll('select * from personal where pos_id=11');
	// print_r($departments);
	
	foreach($departments as $item){
		echo $item['dep_id'].' = '.$item['departments'].'<br>';
	}
	echo '<br><br>';
	print_r($personnels);
?>