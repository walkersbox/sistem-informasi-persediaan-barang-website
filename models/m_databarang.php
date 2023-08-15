<?php 
class Databarang {
	private $mysqli;

	function __construct($conn) {
		$this->mysqli = $conn;
	}

	public function tampil($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tbl_stok";
		if ($id != null) {
			$sql .= " WHERE id_barang = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
}
?>