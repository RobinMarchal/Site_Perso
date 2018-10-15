<?php 

class Main extends CI_Controller
{
    public function index() 
    {
        $this->home();
    }

    public function home()
    {
        $data['title'] = 'Robin Marchal | Portfolio Développeur Web Full-Stack Paris';
        $data['description'] = 'Curriculum Vitae de Robin Marchal, futur Développeur Web Front-end / Back-end. Création de sites web et développement web PhP, MySQL, JavaScript, HTML, CSS ...';

        $data['main_contents'] = 'front/view_home';

        $this->load->view('template', $data);
    }
}
?>