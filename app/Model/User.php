<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class User extends AppModel {
	var $name = "User";
	var $validate = array();
	function formuser(){
		
		$this->validate = array(
			"Username"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập username.",
					),
				"rule2" => array(
					"rule" => "/^[a-z0-9_]{6,}$/i",
					"message" => "Username không được có ký tự đặc biệt và có 6 ký tự trở lên.",
					),
				"rule3" =>array(
                    "rule" => "checkUsername", 
                    "message" => "Username đã tồn tại.",
                    ),

				),

				"Password"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập password.",
					),
				"rule2" => array(
					"rule" => array('minLength', '6'),
					"message" => "password phải có ít nhất 6 ký tự",
					),
				"rule3" =>array(
                  	"rule" => array('maxLength', '10'),
					"message" => "password không được quá 10 ký tự.",
                    ),

				),

				"Retype_password"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập lại password.",
					),
				"rule2" => array(
					"rule" => array('minLength', '6'),
					"message" => "password phải có ít nhất 6 ký tự.",
					),
				"rule3" =>array(
                  	"rule" => array('maxLength', '10'),
					"message" => "password không được quá 10 ký tự.",
                    ),
				"rule4" =>array(
                    "rule" => "checkPassword",
                    "message" => "Vui lòng nhập giống password ở trên.",
                    ),
				),

				"Fullname"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập fullname.",
					),
				"rule2" => array(
					"rule" => "/^[a-z\\sáàạảãăắằẳẵặâầấẩậẫìíỉĩịùúủũụưừứửữựéèẻẻẹẽêếềểễệòóỏõọôồốổỗộơờớởỡợỳýỷỹỵđ]+$/i",
					"message" => "fullname không được chứa ký tự đặc biệt và số.",
					),
				),

					"Phone"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập phone.",
					),
				"rule2" => array(
					"rule" => "/((\+841|01)\d{9})|((\+849|09)\d{8})/i",
					"message" => "vui lòng điền đúng định dạng số điện thoại.",
					),
				),

				"Email"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập email.",
					),
				"rule2" => array(
					"rule" => "/[A-Za-z0-9_\.]{3,}@([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})+/i",
					"message" => "vui lòng điền đúng định dạng email.",
					),
				),

				

				
			);
		if($this->validates($this->validate)) 
			return TRUE; 
		else 
			return FALSE;
	}
	function editform(){
		
		$this->validate = array(
			"Username"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập username.",
					),
				"rule2" => array(
					"rule" => "/^[a-z0-9_]{6,}$/i",
					"message" => "Username không được có ký tự đặc biệt và có 6 ký tự trở lên.",
					),
				"rule3" =>array(
                    "rule" => "checkUsername", 
                    "message" => "Username đã tồn tại.",
                    ),

				),

				"Password"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập password.",
					),
				"rule2" => array(
					"rule" => array('minLength', '6'),
					"message" => "password phải có ít nhất 6 ký tự",
					),
				"rule3" =>array(
                  	"rule" => array('maxLength', '10'),
					"message" => "password không được quá 10 ký tự.",
                    ),

				),

				"Retype_password"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập lại password.",
					),
				"rule2" => array(
					"rule" => array('minLength', '6'),
					"message" => "password phải có ít nhất 6 ký tự.",
					),
				"rule3" =>array(
                  	"rule" => array('maxLength', '10'),
					"message" => "password không được quá 10 ký tự.",
                    ),
				"rule4" =>array(
                    "rule" => "checkPassword",
                    "message" => "Vui lòng nhập giống password ở trên.",
                    ),
				),

				"Fullname"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập fullname.",
					),
				"rule2" => array(
					"rule" => "/^[a-z\\sáàạảãăắằẳẵặâầấẩậẫìíỉĩịùúủũụưừứửữựéèẻẻẹẽêếềểễệòóỏõọôồốổỗộơờớởỡợỳýỷỹỵđ]+$/i",
					"message" => "fullname không được chứa ký tự đặc biệt và số.",
					),
				),

					"Phone"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập phone.",
					),
				"rule2" => array(
					"rule" => "/((\+841|01)\d{9})|((\+849|09)\d{8})/i",
					"message" => "vui lòng điền đúng định dạng số điện thoại.",
					),
				),

				"Email"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập email.",
					),
				"rule2" => array(
					"rule" => "/[A-Za-z0-9_\.]{3,}@([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})+/i",
					"message" => "vui lòng điền đúng định dạng email.",
					),
				),

				

				
			);
		if($this->validates($this->validate)) 
			return TRUE; 
		else 
			return FALSE;
	}
	
	
	function checkUsername(){
		$username = $this->data['User']['Username'];
		$username_result = $this->findAllByUsername($username);
		if($username_result==null){
			return true;	
		}else{
			return false;
		}
	}
	function checkPassword(){
		$password = $this->data['User']['Password'];
		$retype_password = $this->data['User']['Retype_password'];
		if($password==$retype_password){
			return true;	
		}else{
			return false;
		}
	}


    function checkLogin(){
    	$username = $this->data['User']['Username'];
    	$password = $this->data['User']['Password'];
        $sql = "Select * from users where username='$username' && password ='$password'";
       // echo $sql;
        $this->query($sql);
        if($this->getNumRows()<=0){
            return false;
        }else{
            return true;
        }
    }

    function UserLoginForm(){
        $this->validate = array(
            "Username"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập username.",
					),
				"rule2" => array(
					"rule" => "/^[a-z0-9_]{6,}$/i",
					"message" => "Username không được có ký tự đặc biệt và có 6 ký tự trở lên.",
					),
				"rule3" =>array(
                    "rule" => "checkLogin",
                    "message" => "Sai Username or Password.",
                    ),

				),

				"Password"=>array(
				"rule1" =>array(
					"rule" => "notBlank",
					"message" => "Vui lòng nhập password.",
					),
				"rule2" => array(
					"rule" => array('minLength', '6'),
					"message" => "password phải có ít nhất 6 ký tự",
					),
				"rule3" =>array(
                  	"rule" => array('maxLength', '32'),
					"message" => "password không được quá 32 ký tự.",
                    ),
				"rule4" =>array(
                    "rule" => "checkLogin",
                    "message" => "Sai Username or Password.",
                    ),


				),


        );
        if($this->validates($this->validate))
            return TRUE;
        else
            return FALSE;
    }

}
?>
