<?php 
App::uses('Component', 'Controller');
	class ContentsController extends AppController{

		public $components = array('Session');


		public function beforeFilter(){
			$this->Auth->allow('index');
		}

		public function index(){
			$data = $this->Content->find('all');
			$this->set('topics', $data);
		}

		public function view($id){
			$data = $this->Content->findById($id);
			$this->set('topic', $data);
		}

		public function add(){
			$this->redirect('/contents/upload');
		}

		public function upload(){
			if ($this->request->is('post')) {
				$this->Content->create();
				$file = $this->data['Content']['path'];
				$time = strtotime('today');
				$file_data = $file['tmp_name'];
				if (getimagesize($file_data)){
					$file_name = $time.$file['name'];

					$this->request->data['Content']['path'] = $file_name;
					$this->request->data['Content']['user_id'] = AuthComponent::user('id');

					$target_dir = WWW_ROOT.'img\images\\'.$file_name;
					move_uploaded_file($file_data, $target_dir);
					
					echo $this->request->data['Content']['path'];
					if($this->Content->save($this->data)){
						$this->Session->setFlash('This Image has been uploaded');
						$this->redirect('index');
					}
				} else{
					$this->Session->setFlash('Select a valid image file!');
				}
			}
			
		}
	}