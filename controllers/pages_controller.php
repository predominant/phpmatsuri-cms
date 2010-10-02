<?php
class PagesController extends AppController {

	// http://localhost/cms/pages/index/home
	// http://localhost/cms 
	public function index($slug = 'home') {
		if (!$slug) {
			exit('Invalid page');
		}

		$page = $this->Page->findBySlug($slug);
		
		if (!$page) {
			exit ('Invalid page');
		}
		
		$this->set(compact('page'));
	}

	public function add() {
		if (!empty($this->data)) {
			// Save the data
			$this->Page->create($this->data);
			if ($this->Page->save()) {
				$this->Session->setFlash('Page Saved!');

				$page = $this->Page->findById(
					$this->Page->id
				);
				
				$this->redirect(array(
					'controller' => 'pages',
					'action' => 'index',
					$page['Page']['slug']
				));
			} else {
				$this->Session->setFlash('Failed saving');
			}
		}
	}

	public function edit($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Page');
			$this->redirect(array('action' => 'index'));
		}
		
		$page = $this->Page->findById($id);
		if (!$page) {
			$this->Session->setFlash('Invalid Page');
			$this->redirect(array('action' => 'index'));
		}
		$this->set(compact('page'));
		
		if (!empty($this->data)) {
			// Form data was submitted
			$this->Page->create($this->data);
			if ($this->Page->save()) {
				$this->Session->setFlash('Page Saved!');

				$page = $this->Page->findById(
					$this->Page->id
				);
				
				$this->redirect(array(
					'controller' => 'pages',
					'action' => 'index',
					$page['Page']['slug']
				));
			} else {
				$this->Session->setFlash('Failed saving');
			}
			
		} else {
			// No form data
			$this->data = $page;
		}
	}
}