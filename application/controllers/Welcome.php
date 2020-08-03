<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('User_model'));
    }

    public function index()
    {
        $data['dataUser'] = $this->User_model->get_by_role();
        $this->load->view('welcome_message', $data);
    }
}
