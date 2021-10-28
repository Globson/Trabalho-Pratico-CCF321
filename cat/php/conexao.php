<?php 


class Conexao{

	public static $instancia;

	public static function conecta(){

		if(!isset(self::$instancia)):
		self::$instancia = new \PDO('mysql:host=localhost;dbname=my_db;charset=utf8', 'root', '');
		endif;

		return self::$instancia;

	}



}



 ?>