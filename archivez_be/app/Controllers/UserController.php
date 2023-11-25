<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

    public function signin()
    { 
      $user = new UserModel(); 
      $firstname = $this->request->getVar('firstname');
      $lastname = $this->request->getVar('lastname');
      $email = $this->request->getVar('email');
      $usertype = $this->request->getVar('usertype');
      $password = $this->request->getVar('password'); 
      $data = $user->where('lastname', $lastname)->first();

       if($data){
         $pass = $data['password']; 
         $authenticatePassword = password_verify($password, $pass); 
         if($authenticatePassword){ 
           return $this->respond(['msg' => 'okay', 'token,' => $data['token'], 'usertype' => $data['usertype']]); 
         }else{ 
           return $this->respond(['msg' => 'Incorrect Pasword']); 
         } 
       }else{
            return $this->respond(['msg' => 'no user found']); 
       }
    }

    public function signup()
    {
      $user = new UserModel(); 
      $token = $this->verification(50); 
      $data = [ 
        'firstname' => $this->request->getVar('firstname'),
        'lastname' => $this->request->getVar('lastname'),
        'usertype' => $this->request->getVar('usertype'),
        'email' => $this->request->getVar('email'),
        'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT), 
        'token' => $token
      ]; 
      $u = $user->save($data); 
      if($u){ 
        return $this->respond(['msg' => 'okay', 'token' =>$token]); 
      }else{ 
        return $this->respond(['msg' => 'failed']); 
      } 
    } 
    public function verification($length){ 
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
        return substr(str_shuffle($str_result), 
        0, $length); 
      } 
}
