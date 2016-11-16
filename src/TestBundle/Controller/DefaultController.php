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
        // Get posted data into local variables
        $EmailFrom = Trim(stripslashes('no@example.com'));    // Your email, e.g. me@example.com
        $EmailTo = Trim(stripslashes('denmark.mago@searchoptmedia.com'));        // Recipient, e.g. email of your friend
        $FakeEmail = Trim(stripslashes('no@example.com'));    // Fake email, e.g. sarkozy@elysee.fr
        $FakeDomain = Trim(stripslashes('example.com'));      // Fake Domain, e.g. elysee.fr
        $Name = Trim(stripslashes('Dude'));              // Your name
        $FakeName = Trim(stripslashes('Dude'));      // Your fake name, e.g. Nicolas Sarkozy
        $Subject = Trim(stripslashes('Subject Mex'));        // Subject of the email
        $Message = nl2br(Trim(stripslashes('Test message'))); // Body of the email
// Modify headers of the Email
        $FakeSender = "X-Sender: $FakeDomain";
        $FakeReturn = "Return-Path: $EmailFrom";
        $Fake = "From: $FakeName ";
        $Reply = "Reply-To: $EmailFrom";
        $BCC = "Bcc: $EmailFrom";
        $additional = "-f $FakeEmail";                          // Hide the Mailed-by or Via
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= $FakeSender. "\r\n";
        $headers .= "X-Priority: 3\r\n";                        // Normal priority (3), urgent is often categorized as Spam
        $headers .= $Fake . "\r\n";
        $headers .= $Reply . "\r\n";
        $headers .= $FakeReturn . "\r\n";
// Finally, Send Email
        mail($EmailTo, $Subject, $Message, $headers, $additional);

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
