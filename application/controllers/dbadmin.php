<?php 
class dbadmin extends CI_Controller
{   
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('back/view_connect', $data);
    }
    function login()
    {

    }
}
?>