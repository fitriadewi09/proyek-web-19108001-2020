<?php
class m_dosen extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	function tampil_data_dosen() {
		$this->db->select("*");
		$this->db->from("tb_dosen");
		return $this->db->get();
	}
}
?>