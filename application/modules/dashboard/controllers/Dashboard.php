<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
	public function index()
	{
		$data = [
      'header' => modules::run('global/header/top'),
      'content' => modules::run('dashboard/view'),
      'footer' => modules::run('global/footer/bottom')
    ];

		$this->load->view('template', $data);
	}

	// -- view
  public function view() {
		$data = [
			// 'list_jual' => $this->global_model->get_data('tb_jual')
		];

    $this->load->view('index', $data);
  }

	public function add() {
		$data = [
      'header' => modules::run('global/header/top'),
      'content' => modules::run('dashboard/view_add'),
      'footer' => modules::run('global/footer/bottom')
    ];

		$this->load->view('template', $data);
	}

	public function view_add() {
		$this->load->view('add');
	}
}
