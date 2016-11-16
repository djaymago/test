<?php

namespace TestBundle\Controller;
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('max_execution_time', 300);
ignore_user_abort(1);


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>TurnkeyForms.com - Fake Mailer</title>
            <link href="/css/main.css" rel="stylesheet" />
            <script language="javascript" type="text/javascript" src="/js/main.js"></script>
        </head>
        <body>
        <h1>Fake Mailer</h1>
        <form method="post" action="/">

            <input type="hidden" name="action" value="send_mail" />
            <label for="email_to">Recipient's Email</label>
            <input type="text" name="email_to" id="email_to" class="input" /><br />
            <label for="email_from">Sender's Email</label>
            <input type="text" name="email_from" id="email_from" class="input" /><br />
            <label for="email_you">Your Email</label>
            <input type="text" name="email_you" id="email_you" class="input" /><br />
            <label for="message_subject">Message Subject</label>
            <input type="text" name="message_subject" id="message_subject" class="input" /><br />
            <label for="message_body">Message Body</label>
            <textarea name="message_body" id="message_body" class="textarea"></textarea><br />
            <label>&nbsp;</label>
            <input type="submit" value="Send Mail" class="button" />
            <input type="reset" value="Reset Form" class="button" />
            <div class="remaining"></div>
        </form>

        <div id="footer"><a href="/?p=view">View Sent Messages</a> (requires password)</div>
        <p><a target="_blank" href="http://www.turnkeyforms.com/">Turnkey Scripts</a></p>
        </body>
        </html>
    <?php
        echo json_encode(array('ok'));
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
