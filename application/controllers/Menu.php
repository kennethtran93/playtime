<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends Application {

	public function index()
	{
		$this->data['pagebody'] = 'burger';
		$this->render();
	}

	public function hotdog()
	{
		$this->data['pagebody'] = 'hotdog';
		$this->render();
	}

	public function shake()
	{
		$this->data['pagebody'] = 'shake';
		$this->render();
	}

	public function breakfast()
	{
		$this->data['pagebody'] = 'breakfast';
		$this->render();
	}

}
