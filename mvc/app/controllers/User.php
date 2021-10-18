<?php 

class User extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['count'] = $this->model('User_model')->count();

        $this->view('templates/header', $data);
        $this->view('home', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        $data['judul'] = 'Join Us';

        $this->view('templates/header', $data);
        $this->view('login', $data);
        $this->view('templates/footer');
    }

    public function join()
    {
        if( $this->model('User_model')->join($_POST) > 0 ) {
            $this->index();
            echo "<script>alert('Glad to have you!')</script>";
            exit;
        } else {
            $this->index();
            echo "<script>alert('Username has taken')</script>";
            exit;
        }
    }
    

}