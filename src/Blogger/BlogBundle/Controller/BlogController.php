<?php 

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controlador del Bolg
 */

class BlogController extends Controller{
	
	/**
	 * Muestra una entrada del blog
	 */
	 public function showAction($id){
	 	
		$em = $this->getDoctrine()->getEntityManager();
		
		$blog = $em->getRepository('BloggerBlogBundle')->find($id);
		
		if (!$blog) {
			throw $this->createNotFoundException('No se encontro el articulo que busca');
		}
		
		return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
			'blog'=>$blog
		));
	 }
}
?>