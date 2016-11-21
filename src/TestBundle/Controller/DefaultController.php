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

        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
            ->setUsername('noreply.propelrr@gmail.com')
            ->setPassword('Propelrrpass@123');
        $to = "denmark.mago@gsearchoptmedia.com";
        $subject = "Test Email";
        $from  = 'denmarkjaymago@yahoo.com';
        $msg = "<strong>This is a test</strong>";

        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance();
        $message->setSubject($subject);
        $message->setFrom($from);
        $message->setTo($to);
        $message->setBody($msg, 'text/html');

        $result = $mailer->send($message);

        json_encode (array('restul', $result));exit;

        $request = $this->getRequest();

        $method = $request->getMethod();
        $params = $request->request->all();
        if ($method == 'POST') {
            $to=$params['to'];
            $from=$params['from'];
            $subject=$params['subject'];
            $message=$params['message'];
            $head="From: $from" .  "\r\n".
                'Reply-To: '. $from .  "\r\n";
            $her=$head.' < '.$from .' >';


            $ret=mail($to, $subject, $message, $her);
            if($ret==true){
                echo "<br /> Mail sent Successfully";
            }else{
                echo "<br /> Unable to Send mail.";
            }
        }

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
