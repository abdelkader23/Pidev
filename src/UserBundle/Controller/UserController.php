<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{







    public function layoutUserAction()
    {
        return $this->render('UserBundle::layoutUser.html.twig');
    }


    public function homeUserAction()
{
    return $this->render('UserBundle:Default/Principale:HomeUser.html.twig');
}



    public function form_loginAction()
    {
        return $this->render('UserBundle:Default/login:login.html.twig');
    }


    public function layoutAdminAction()
    {
        return $this->render('UserBundle::layoutAdmin.html.twig');
    }


public function dashboardAdminAction()
{
    return $this->render('UserBundle:Default/Principale:dashboardAdmin.html.twig');
}







}
