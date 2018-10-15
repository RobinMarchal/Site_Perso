<?php 
class Dbadmin extends CI_Controller
{   
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