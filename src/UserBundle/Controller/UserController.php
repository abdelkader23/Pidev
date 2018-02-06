<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{






    public function layoutUserAction()
    {
        return $this->render('@User/layoutUser.html.twig');
    }


    public function homeUserAction()
{
    return $this->render('UserBundle:Principale:HomeUser.html.twig');
}



    public function form_loginAction()
    {
        return $this->render('UserBundle:login:login.html.twig');
    }


    public function layoutAdminAction()
    {
        return $this->render('@User/layoutAdmin.html.twig');
    }


public function dashboardAdminAction()
{
    return $this->render('UserBundle:Principale:dashboardAdmin.html.twig');
}







}
