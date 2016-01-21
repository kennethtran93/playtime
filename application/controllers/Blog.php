<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Application {

	public function index()
	{
		$this->data['pagebody'] = 'blog';
		$this->render();
	}
}
