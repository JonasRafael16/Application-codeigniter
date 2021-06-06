<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{
		echo "<h1> Página de produtos</h1>";

	}
    public function teste(){
        $h2 = date("d/m/Y");
        echo "hoje é: ". $h2. ".";
    }

}
