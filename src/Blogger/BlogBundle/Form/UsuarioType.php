<?php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

    
    class UsuarioType extends AbstractType{
    	
		public function buildForm(FormBuilder $builder, array $options){
				
			$builder->add('nombre', 'text', array())
					->add('apellidos')
					->add('direccion', 'textarea')
					->add('telefono')
					->add('ci', 'text', array('label'=>'CI'))
					->add('email', 'email')
					->add('password','repeated', array('first_name'=>'Contraseña', 'second_name' =>'Repetir Contraseña', 'type'=>'password'));
		}
		
		public function getName(){
			return 'Usuario' ;
		}
    }
    
?>