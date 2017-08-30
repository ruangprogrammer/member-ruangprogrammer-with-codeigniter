<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('download_model');
        $this->load->library('facebook');
        $this->load->model('user');
    }

    public function index()
    {
        $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');
        // Preparing data for database insertion
        $content= 'content/dashboard';

        $download = $this->download_model->get_all();

        if(!empty($userProfile['first_name'])){
            $userData = array();
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = (!empty($userProfile['email'])) ? $userProfile['email'] : "kosong";
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];
            // Insert or update user data
            $userID = $this->user->checkUser($userData);
            $this->session->set_userdata($userData);
            $data = array(
                'content'=> $content,
                'status_login' => 1,
                'member' => $userData,
                'logout' => $this->facebook->logout_url(),
                'downloads_data' => $download
            );
        } else {
            $data = array(
                'content'=> $content,
                'status_login' => 0,
                'downloads_data' => $download
            );
        }
        $this->load->view('home/app-home', $data);
    }

    public function code($code){

        if(!empty($_SESSION['first_name'])){
            $row = $this->download_model->get_by_code($code);
            redirect('https://github.com'.$row->download_link_download);
        }else{
            redirect('download/login');
        }

    }

    public function login(){
        $content= 'content/login';
        $data = array();
        $data['authUrl'] =  $this->facebook->login_url();
        $data['content'] = $content;
        $this->load->view('home/app-home',$data);

    }

    public function logout() {
        // Remove local Facebook session
        $this->facebook->destroy_session();
        // Remove user data from session
        unset($_SESSION['first_name']);
        $this->session->unset_userdata('userData');
        // Redirect to login page
        redirect('/download');
    }

}
