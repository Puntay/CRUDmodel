<?php
	class TrabajadorVO {
		private $_id;
		private $_nom_trab;
		private $_ape_trab;
		private $_fec_ini;
		private $_sueldo;

		public function __construct() {
		}

		public function get_id(){
			return $this->_id;
		}

		public function set_id($_id){
			$this->_id = $_id;
		}

		public function get_nom_trab(){
			return $this->_nom_trab;
		}

		public function set_nom_trab($_nom_trab){
			$this->_nom_trab = $_nom_trab;
		}

		public function get_ape_trab(){
			return $this->_ape_trab;
		}

		public function set_ape_trab($_ape_trab){
			$this->_ape_trab = $_ape_trab;
		}

		public function get_fec_ini(){
			return $this->_fec_ini;
		}

		public function set_fec_ini($_fec_ini){
			$this->_fec_ini = $_fec_ini;
		}

		public function get_sueldo(){
			return $this->_sueldo;
		}

		public function set_sueldo($_sueldo){
			$this->_sueldo = $_sueldo;
		}
	}
?>