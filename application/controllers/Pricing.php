<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pricing extends MY_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_pricing');
        $this->load->model('Model_portfolio');
    }

	public function index()
	{
		$this->_load_pricing_view(null, 'view_pricing'); // Main pricing
	}

	public function web_app()
	{
		$this->_load_pricing_view('web_app', 'view_web_app');
	}

	public function android()
	{
		$this->_load_pricing_view('android', 'view_android');
	}

	public function website()
	{
		$this->_load_pricing_view('website', 'view_website');
	}

	private function _load_pricing_view($type = null, $view_file)
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_pricing'] = $this->Model_common->all_page_pricing();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$data['pricing'] = $this->Model_pricing->get_pricing_by_type($type);

		$this->load->view('view_header', $data);
		$this->load->view($view_file, $data);
		$this->load->view('view_footer', $data);
	}
}
