<?php
require_once dirname(__FILE__).'/interface.php';
abstract class Datatable_Column implements iDatatable_Column
{
	public function __construct($name) {}
	public function setValue($value) {}
	public function getValue () {}
	public function filter () {}
	public function fetch () {}
}
abstract class Datatable implements iDatatable {
	function __construct($name) {}
	public function fetch($pk) {}
	public function structFromObject (object $obj) {}
	public function structAddColumn (Datatable_Column $col) {}
}
abstract class Datasource implements iDatasource
{
	public function __construct($consumer_key, $consumer_secret) {
	}
	/**
	* disconnect :: Desconecta el datasource.
	*/
	public function disconnect () {}
	public function connect (Datasource_Connection $conn) { }
	public function commit () { }
}
abstract class Dataset implements iDataset
{
	/**
	*
	*/
	public function addTable(Datasource_Table $table) {}
}
class Datasource_Error implements iDatasource_Error {}
?>
