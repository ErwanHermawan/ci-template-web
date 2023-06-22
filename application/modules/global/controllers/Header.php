<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends MX_Controller {
	public function top()
	{
		$this->load->view('header');
	}
}
