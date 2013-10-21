<?php
interface iDatasource_Column
{
}
interface iDatasource_Connection
{
	public function connect (); 
	public function disconnect ();
	public function put();
	public function get();
	public function delete ();
}
interface iDatasource_Error
{
}
interface iDatatable 
{
	public function __construct($name);
	public function setPrimaryKey(Datatable_Column $col);
	public function fetch ($pk);
	public function structAddColumn(Datatable_Column $col); 
	public function structFromObject (object $obj);
	public function structFromArray (array $arr);
	public function dataWhereAdd();
	public function dataOrderBy();
	public function dataFetch();
	public function disconnect ();
	public function connect (Datasource_Connection $conn);
}
interface iDatatable_Column
{
	public function __construct($name);
	public function setValue ($value);
	public function setIsNull($bool);
	public function setIsPrimaryKey($bool);
	public function getValue ();
	public function filter ();
	public function fetch ();
}
/**
* iDatasource - Contiene todos los metodos necesarios para administrar datasources
* @param $consumer_key Clave de consumidor
* @param $consumer_secret Contrasena de consumidor
*/
interface iDatasource
{
	public function __construct($consumer_key, $consumer_secret);
	/**
	* commit :: Realiza la sincronizacion de datos con el servidor central. Revisa la estructura de datos, la version del dataset, etc. 
	* @return TRUE si fue exitoso, FALSE si no
	*/
	public function commit ();
	/**
	* setVersion :: Define la version del dataset que se esta utilizando 
	* @param $version numero de version
	* @return void
	*/
	public function setVersion ($version);
	public function setDataset (Dataset $dataset);
}
/**
* Datasets son un conjunto de tablas que, juntas, conforman un espacio de datos en comun.
*/
interface iDataset
{
	/**
	* Agrega una tabla al dataset
	*/
	public function addTable(Datatable $table);
	public function fetch();
}
?>
