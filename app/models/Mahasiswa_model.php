<?php 

class Mahasiswa_model{
	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	// private $dbh; // database handler
	// private $stmt;
	
	// public function __construct()
	// {
	// 	// data source name
	// 	$dsn = 'mysql:host=localhost;dbname=phpmvc';

	// 	try {
	// 		$this->dbh = new PDO($dsn, 'root', '');
	// 	} catch(PDOException $e) {
	// 		die($e->getMessage());
	// 	}
	// }

	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}
}


 ?>