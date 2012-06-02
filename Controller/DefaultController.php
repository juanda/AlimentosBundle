<?php

 namespace Jazzyweb\AulasMentor\AlimentosBundle\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\Controller;

 class DefaultController extends Controller
 {

     public function indexAction()
     {
         $params = array(
             'mensaje' => 'Bienvenido al curso de Symfony2',
             'fecha' => date('d-m-yyy'),
         );

         return $this->render('JazzywebAulasMentorAlimentosBundle:Default:index.html.twig',
         $params);
     }
 }

