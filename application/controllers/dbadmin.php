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
    function dashboard() {
        $data['main_contents'] = 'back/view_dash';

        $this->load->view('dbTemplate', $data);
    }
}
?>