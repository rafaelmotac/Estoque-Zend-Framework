<?php

namespace Estoque\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

	public function IndexAction(){

		$produtos = [];
	    $produtos[] = ['nome' => 'Playstation 4', 'preco' => 1700.00, 'descricao' => 'Video Game da Sony'];
	  	$produtos[] = ['nome' => 'Xbox One', 'preco' => 1900.00, 'descricao' => 'Video Game da Microsoft'];
	  	$produtos[] = ['nome' => 'Nintendo Wii', 'preco' => 1500.00, 'descricao' => 'Video Game da Nintendo'];

	    $view_params = array('produtos' => $produtos);

		return new ViewModel($view_params);

	}
	
}

