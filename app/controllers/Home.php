<?php 

class Home extends Controller {
	public function index()
	{
		$data['judyl'] = 'Home';
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}
}
 ?>
