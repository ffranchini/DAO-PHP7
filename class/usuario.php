<?php

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario() {
		return $this->idusuario;
	}

	public function setIdusuario($value) {
		return $this->idusuario = $value;
	}

		public function getDeslogin() {
		return $this->deslogin;
	}

	public function setDeslogin($value) {
		return $this->deslogin = $value;
	}

	public function getDessenha() {
		return $this->dessenha;
	}

	public function setDessenha($value) {
		return $this->dessenha = $value;
	}

	public function getDtcadastro() {
		return $this->dtcadastro;
	}

	public function setDtcadastro($value) {
		return $this->dtcadastro = $value;
	}

}


 ?> 