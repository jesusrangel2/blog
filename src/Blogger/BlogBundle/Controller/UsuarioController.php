<?php 

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Form\UsuarioType;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;


	class UsuarioController extends Controller{
		
		public function registroAction(){
			
			$form = $this->get('form.factory')->create(
				new UsuarioType(),
				array()
			);
			
			$request = $this->get('request');
			if($request->getMethod() == 'POST'){
				
				$form->bindRequest($request);;
				if($form->isValid()){
					
				}
				
			}
			
			return $this->render('BloggerBlogBundle:Usuario:registro.html.twig', array(
				'form' => $form->createView()
			));
		}
		
		public function loginAction(){
			
			return $this->render('BloggerBlogBundle:Usuario:login.html.twig', array(
				'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
				'error'			=> $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR)
			));
		}
	}
?>