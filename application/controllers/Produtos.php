<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{
        $texto = "Você está usando o controller Produtos";
        $dados = array("mensagem" => $texto);
		$this->load->view("produtos/lista", $dados);

	}
    public function teste(){
        $h2 = date("d/m/Y");
        echo "hoje é: ". $h2. ".";
    }

}
