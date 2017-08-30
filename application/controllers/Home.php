<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('download');
        $this->load->library('facebook');
        $this->load->model('user');
    }
	public function index()
	{
		
        $content= 'content/dashboard';    
        $download = $this->download->get_all();

        $data = array(
            'content'=>$content,
            'downloads_data' => $download
            
        );
        $this->load->view('home/app-home', $data);    
	}

	public function login(){
       /* $content='content/login';
        $data = array(
            'content'=>$content,

        );
        $this->load->view('home/app-home', $data);*/
       /* $userData = array();

        // Check if user is logged in
        if($this->facebook->is_authenticated()){
            // Get user facebook profile details
            $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];

            // Insert or update user data
            $userID = $this->user->checkUser($userData);

            // Check user data insert or update status
            if(!empty($userID)){
                $data['userData'] = $userData;
                $this->session->set_userdata('userData',$userData);
            } else {
                $data['userData'] = array();
            }

            // Get logout URL
            $data['logoutUrl'] = $this->facebook->logout_url();
        }else{
            $fbuser = '';

            // Get login URL
            $data['authUrl'] =  $this->facebook->login_url();
        }*/

        // Load login & profile view
        // echo "berhasil";
        $content= 'content/login';
        $data = array();
        $data['authUrl'] =  $this->facebook->login_url();
        $data['content'] = $content;
        $data['dataku'] = "ojo keloro loro lungaku";
       // $this->load->view('home/app-home/user_authentication/index',$data);
        $this->load->view('home/app-home',$data);
    }

    public function logout() {
        // Remove local Facebook session
        $this->facebook->destroy_session();
        // Remove user data from session
        $this->session->unset_userdata('userData');
        // Redirect to login page
        redirect('/user_authentication');
    }
  
}
