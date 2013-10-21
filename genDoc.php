<?php
require_once dirname(__FILE__).'/datasource.php';
class PGSQLDatasource extends Datasource
{
}

$k = new ReflectionClass('PGSQLDatasource'); 
$interfaces = $k->getInterfaces ();
print_r($interfaces);
do {
	$name = $k->getName ();
	echo "####### {$name} #####\n";
	var_dump($k->getDocComment ());
	$methods = $k->getMethods();
	foreach ($methods as $method) {
		$m = new ReflectionMethod('iDatasource', $method->name);
		var_dump($m->getDocComment ());
	}
} while($k = $k->getParentClass ());
?>
