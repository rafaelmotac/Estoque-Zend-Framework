<?php

namespace Estoque\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Estoque\Entity\Produto;

class IndexController extends AbstractActionController {

	public function IndexAction(){

		$entityManager = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");

		$repositorio = $entityManager->getRepository('Estoque\Entity\Produto');

		$produtos = $repositorio->findAll();

	    $view_params = array('produtos' => $produtos);

		return new ViewModel($view_params);

	}

	public function cadastrarAction(){

		if($this->request->isPost()){

			$entityManager = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");

			$produto = new Produto(
				$nome = $this->request->getPost('nome'),
				$preco = $this->request->getPost('preco'),
				$descricao = $this->request->getPost('descricao')
				);

			$entityManager->persist($produto);
			$entityManager->flush();


			$this->redirect()->toUrl('Index/Index');
			
		}else {
			return new ViewModel();
		}

	}
	
}

