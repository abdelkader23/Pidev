<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
class UserController extends Controller
{
    public function RedirectRegisterAction()
    {
        return new RedirectResponse($this->get('router')->generate('homeUser'));
    }



    public function layoutUserAction()
    {
        return $this->render('UserBundle:login:login.html.twig');
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


    public function compteUserAction()
    {
        return $this->render('');
    }



    public function messageUserAction()
    {
        return $this->render('');
    }

}
