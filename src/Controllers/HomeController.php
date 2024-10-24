<?php

namespace App\Controllers;

use App\Controller;
use App\Models\User;

class HomeController extends Controller{
    public function index(){
        $users = [
            new User(1,'John Doe', 'example@mail.com'),
            new User(2, 'Jane Doe', 'janedoe@mail.com'),
            new User(3, 'John Smith', 'smith@mail.com')
        ];
        $this->render('index', ['users'=>$users]);
    }
}