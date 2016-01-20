<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$this->load->view('burger');
	}

	public function hotdog()
	{
		$this->load->view('hotdog');
	}

	public function shake()
	{
		$this->load->view('shake');
	}

	public function breakfast()
	{
		$this->load->view('breakfast');
	}

}
