<?php

class Controller_Wallet extends Controller
{

	function __construct()
	{
		$this->model = new Model_Wallet();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('wallet_view.php', 'template_view.php', $data);
	}
}
