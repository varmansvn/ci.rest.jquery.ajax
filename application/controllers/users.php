<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author varman
 */
class Users extends CI_Controller{
    //put your code here
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $data['main'] = 'all_users';
        $this->load->view('layout', $data);
    }
}

?>
