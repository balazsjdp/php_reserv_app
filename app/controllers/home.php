<?php 

class Home extends Controller
{
 
    public function index(array $params)
    {
   

        $user = $this->model('User');
        $user->name = $params[0];
        $user->otherName = $params[1];

        $this->view('home/index', $user);
       
    }

}


?>