<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends MX_Controller {
	public function bottom()
	{
		$this->load->view('footer');
	}
}
