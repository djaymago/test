<?php

namespace TestBundle\Controller;
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('max_execution_time', 300);
ignore_user_abort(1);


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $headers = "From: \"Denmark\" <den@no-reply.com>\r\nReply-To: denmark.mago@searchoptmedia.com\r\n";//here's the main part
        if(@mail('denmark.mago@searchoptmedia.com','Test','Test hehe',$headers))
        {
            $mail_send_result="<p><font size=4 color=#c0c0c0>Email successfully sent to .!!</font></p>";//If mail gets sent successfully
        }
        else
        {
            $mail_send_result="<p><font size=4 color=#c0c0c0>Email NOT sent to .</font></p>";//If mail does not get sent
        }

        echo $mail_send_result;

        return $this->render('TestBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('TestBundle:Default:index.html.twig');
    }

    public function companyAction()
    {

        return $this->render('TestBundle:Default:index.html.twig');
    }

    public function contactAction()
    {

        return $this->render('TestBundle:Default:contact.html.twig');
    }

    public function signupAction()
    {
        return $this->render('TestBundle:Default:index.html.twig');
    }
}
