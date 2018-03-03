<?php

namespace AppBundle\EventListener;

use Swift_Message;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;


class SearchIndexerSubscriber implements EventSubscriberInterface
{
    protected $templater;
    protected $mailer;

    public function __construct(\Twig_Environment $templater, \Swift_Mailer $mailer)
    {
        $this->templater = $templater;
        $this->mailer = $mailer;
    }

    public static function getSubscribedEvents()
    {
        return array(
            'articleCreated' => ['index', 0],
            'articleDelete' => ['index', 0],
            'articleUpdate' => ['index', 5],
        );
    }

    public function index(GenericEvent $event)
    {
        $entity = $event->getSubject();
        var_dump($entity);
        $message = new Swift_Message();
        $message->setSubject('Data of employee ID ' . $entity->getId() . ' it is ' . $entity->getName() . ' was changed');
        $message->setFrom('gmail@gmail.com');
        try {
            $message->setBody(
                $this->templater->render(
                    'mail/employee.html.twig',
                    array('Name' => $entity->getName(),
                        'Description' => $entity->getDescription(),
                        'CreatedAt' => $entity->getCreatedAt(),
                        'Id' => $entity->getId()
                    )
                ),
                'text/html'
            );
        } catch (\Twig_Error_Loader $e) {
        } catch (\Twig_Error_Runtime $e) {
        } catch (\Twig_Error_Syntax $e) {
        }
        $this->mailer->send($message);
    }
}
