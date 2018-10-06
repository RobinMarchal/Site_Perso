<?php 

session_start();

class ctrl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index() 
    {
        $this->home();
    }

    public function home()
    {
        $data['title'] = 'Robin Marchal | Portfolio';
        $data['description'] = 'Jeux sur Star Wars The Old Republic !';

        $data['main_contents'] = 'front/view_home';

        $this->load->view('template', $data);
    }
    
}
?>