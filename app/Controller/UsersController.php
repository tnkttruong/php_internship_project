<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class UsersController extends AppController{
	public $name = "Users";
	var $helpers = array ('Html','Form');
	var $components = array('Session');
    function login(){
  if ($this->request->is('post')){  
      $this->User->set($this->data);
      if($this->User->UserLoginForm()){
        $this->Session->setFlash("Data is avaliable !");
      $username =  $this->request->data["User"]["Username"];
        $this->Session->write("session",$username);
        $this->redirect("info");
      }
    else{
      $this->Session->setFlash("Data is not avaliable !");
    }   
  }     
    }
    function info(){
        if($this->Session->check("session")){
            $username = $this->Session->read('session');
            $this->set("name", $username);
        }else{
         
        }
    }
    function logout(){
        $this->Session->delete('session'); 
        $this->redirect("login"); 
    }

  public function signup(){
  	if ($this->request->is('post')){
			
  		$this->User->set($this->data);
  		if($this->User->formuser()){
  			$this->Session->setFlash("Data is avaliable !");	
			
  			if ($this->User->save($this->request->data)){
				
  				$this->Session->setFlash('User was added.');
				
  				$this->redirect(array('action' => 'login?msg=1'));

  			}else{
				
  				$this->Session->setFlash('Unable to add user. Please, try again.');	
  			}
  		}
  	else{
  		$this->Session->setFlash("Data is not avaliable !");
  	}  	
  }
}
    public function users_infomation() {
       $username = $this->Session->read('session');
          $User_login = $this->User->findByusername($username);
      $this->set("User_login", $User_login);
   
   
    
      if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
       
        if( $this->User->save( $this->request->data ) ){
        
         
          $this->Session->setFlash('User was edited.');
          
          
          $this->redirect(array('action' => 'index?msg=3'));
          
        }else{
          $this->Session->setFlash('Unable to edit user. Please, try again.');
        }
        
      }else{
      
       
        $this->request->data = $this->User->read();
      }
      
    

  

  }

  
}