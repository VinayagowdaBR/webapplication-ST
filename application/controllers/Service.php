<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_portfolio');
        // Uncomment the line below if you have a Model_service for dynamic data
        // $this->load->model('Model_service');
    }

    public function index($category, $sub_service) {
        // List of valid categories (accept both hyphen and underscore formats)
        $valid_categories = ['digital', 'web_app', 'web-app', 'website', 'ecom', 'cms', 'mobile', 'branding'];
        
        // Normalize the category by replacing hyphens with underscores
        $normalized_category = str_replace('-', '_', $category);
        
        // Validate the category
        if (!in_array($normalized_category, $valid_categories)) {
            show_404(); // Show 404 if category is invalid
        }

        // Fetch common data for all pages
        $data['setting'] = $this->Model_common->all_setting();
        $data['comment'] = $this->Model_common->all_comment();
        $data['social'] = $this->Model_common->all_social();
        $data['all_news'] = $this->Model_common->all_news();

        // Define the view name based on the sub-service
        $view_name = 'services/' . $sub_service;

        // Check if the view file exists
        if (!file_exists(APPPATH . 'views/' . $view_name . '.php')) {
            show_404(); // Show 404 if the sub-service view doesn’t exist
        }


        $data['setting'] = $this->Model_common->all_setting();
		$data['page_about'] = $this->Model_common->all_page_about();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

        $data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();   

        // Load the views
        $this->load->view('view_header', $data);
        $this->load->view($view_name, $data);
        $this->load->view('view_footer');
    }
}