<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GestionContact
 *
 * @author adrien.poignard
 */
use Doctrine\Persistence\ManagerRegistry;
use \App\Repository\MessageRepository;
use Twig\Environment;
namespace App\Service;
class GestionContact {

    private \Swift_Mailer $mail;
    private Environment $environnementTwig;
    private ManagerRegistry $doctrine;
    private MessageRepository $repo;
    
    function __construct(\Swift_Mailer $mail, Environment $environnementTwig, ManagerRegistry $doctrine, MessageRepository $repo) {
        $this->mail = $mail;
        $this->environnementTwig = $environnementTwig;
        $this->doctrine = $doctrine;
        $this->repo = $repo;
    }
    public function envoiMailContact(Message $message){
        //$titre = ($contact->getTitre()=='M') ? ('Monsieur') : ('Madame');
        $email = (new \Swift_Message('Demande de renseignement'))
                ->setFrom([$message->getMail()=>'Nouvelle demande'])
                //->setTo(['contact@benoitroche.fr'=> 'Benoit Roche Symfony']);
                ->setTo(['benoit.roche@gmail.com'=>'Benoit Roche Symfony']);
        //$img=$email->embed(\Swift Image::fromPath('build/images/symfony.png'));
        $email->setBody(
                $this->environnementTwig->render(
                        //templates/emails/registration.html.twig
                        'mail/mail/html.twig',
                        ['message'=>$message]
                        ),
                'text/html'
                );
        $email->attach(\Swift_Attachment::fromPath('documents/presentation.pdf'));
        $this->mail->send($email);
    }
    
    
}
