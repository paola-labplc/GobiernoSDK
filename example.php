<?php
public class Verificacion
{
		
}
require_once 'datasource.php';
$consumer_key = '28381na8820kma9381ammakkd88271lkqn';
$consumer_secret = '123njkkjnslad88lalsndaflnasdf981<12343knasdknjfajdfasui1234basdkbhasdf;';
$datasource = new Datasource($consumer_key, $consumer_secret);
$table = new Datasource_Table('verificacion');
$table->fromObject('Verificacion');
$datasource->setTable();
$datasource->commit ();


?>
