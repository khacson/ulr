<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2018
 */
include_once 'Google/Google_Client.php';		
include_once 'Google/contrib/Google_Oauth2Service.php';
include_once 'Facebook/autoload.php';
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
class Account extends CI_Controller {
    /*
	 * Configuration and setup Google API
	 */
	
	var $redirectURL = 'http://localhost/batdongsan/account/logingoogle.html'; //Callback URL
	var $redirectfacebookURL = 'http://localhost/batdongsan/account/loginfacebook.html'; //Callback URL
	function __construct(){
		parent::__construct();			
	    $this->load->model('base_model');
		$this->site->setTemplate('account');
	}
    function  _remap($method, $params = array()){
        if(method_exists($this, $method)){
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }
	function _view(){
		$data = new stdClass();
		
		$content = $this->load->view('view',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
		$this->site->write('image','',true);
		$this->site->write('face_title','',true);
		$this->site->write('face_description','',true);
		$this->site->write('face_url','',true);
		$this->site->write('face_site_name','',true);
		
        $this->site->render();
	}
	function login(){		
		$data = new stdClass();
		//Call Google API
		$gClient = $this->googleconfig();
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		$data->authUrl = $gClient->createAuthUrl();
		//login facebook
		$fb = $this->facebookconfig();
		// Get redirect login helper
		$helper = $fb->getRedirectLoginHelper();
		$fbPermissions = array('email');
		$data->facebookUrl = $helper->getLoginUrl($this->redirectfacebookURL, $fbPermissions);	
		//end login facebook
		$content = $this->load->view('login',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
		$this->site->write('image','',true);
		$this->site->write('face_title','',true);
		$this->site->write('face_description','',true);
		$this->site->write('face_url','',true);
		$this->site->write('face_site_name','',true);
		
        $this->site->render();
	}
	
	function register(){
		
		$data = new stdClass();
		
		$content = $this->load->view('register',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
		$this->site->write('image','',true);
		$this->site->write('face_title','',true);
		$this->site->write('face_description','',true);
		$this->site->write('face_url','',true);
		$this->site->write('face_site_name','',true);
		
        $this->site->render();
	}
	function googleconfig(){
		$clientId = '901769501998-fc6e2vvvnrsk0gteqd9kq49rufp1usjk.apps.googleusercontent.com'; //Google client ID
		$clientSecret = 'cSL2uYqkNa81b8IhnzcQF9tU'; //Google client secret
		$gClient = new Google_Client();
		$gClient->setApplicationName('login_with_google_using_php');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($this->redirectURL);	
		return $gClient;
	}
	function logingoogle(){
		//Call Google API
		$gClient = $this->googleconfig();	
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		/*if(isset($_GET['code'])){
			$gClient->authenticate($_GET['code']);
			$_SESSION['token'] = $gClient->getAccessToken();
			header('Location: ' . filter_var($this->redirectURL, FILTER_SANITIZE_URL));
		}*/

		if (isset($_SESSION['token'])) {
			$gClient->setAccessToken($_SESSION['token']);
		}
		if ($gClient->getAccessToken()) {
			//Get user profile data from google
			$gpUserProfile = $google_oauthV2->userinfo->get();
			
			//Initialize User class
			//$user = new User();
			
			//Insert or update user data to the database		
			$gpUserData = array(
				'social_network_type'=> 'google',
				'social_network_id'     => $gpUserProfile['id'],
				'first_name'    => $gpUserProfile['given_name'],
				'last_name'     => $gpUserProfile['family_name'],
				'fullname'     => $gpUserProfile['given_name'].' '.$gpUserProfile['family_name'],
				'email'         => $gpUserProfile['email'],
				'gender'        => isset($gpUserProfile['gender'])?$gpUserProfile['gender']:'',
				'locale'        => isset($gpUserProfile['locale'])?$gpUserProfile['locale']:'',
				'picture'       => isset($gpUserProfile['picture'])?$gpUserProfile['picture']:'',
				'link'          => isset($gpUserProfile['link'])?$gpUserProfile['link']:''
			);		
			$userData = $this->model->checkUser($gpUserData);		
			
			//Render facebook profile data
			if(!empty($userData)){
				print_r('luu thanh cong');exit;
			}
			else{
				
				$output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
				print_r($output);exit;
			}
			
		}
		else{
			$output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
			print_r($output);exit;
		}		
	}
	function facebookconfig(){		
		/*
		 * Configuration and setup Facebook SDK
		 */
		$appId         = '1130918380407286'; //Facebook App ID
		$appSecret     = 'e53120190e415619121efec76f215c63'; //Facebook App Secret
		//$redirectURL   = 'http://localhost/facebook_login_with_php/'; //Callback URL
		$fbPermissions = array('email');  //Optional permissions
		$fb = new Facebook(array(
			'app_id' => $appId,
			'app_secret' => $appSecret,
			'default_graph_version' => 'v2.2',
		));
		return $fb;
	}
	function loginfacebook(){
		$fb = $this->facebookconfig();
		$helper = $fb->getRedirectLoginHelper();
		// Try to get access token
		$err_facebook ='';
		try {
			if(isset($_SESSION['facebook_access_token'])){
				$accessToken = $_SESSION['facebook_access_token'];
			}
			else{
				  $accessToken = $helper->getAccessToken();
			}
		} catch(FacebookResponseException $e) {
			echo 'Graph returned an error: ' . $e->getMessage();	exit;		
		} catch(FacebookSDKException $e) {
			echo 'Facebook SDK returned an error: ' . $e->getMessage();		exit;	
		}
		// Getting user facebook profile info
		if(isset($_SESSION['facebook_access_token'])){
			$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
		}else{
			// Put short-lived access token in session
			$_SESSION['facebook_access_token'] = (string) $accessToken;

			  // OAuth 2.0 client handler helps to manage access tokens
			$oAuth2Client = $fb->getOAuth2Client();

			// Exchanges a short-lived access token for a long-lived one
			$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
			$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;

			// Set default access token to be used in script
			$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
		}
		try {		  
			$profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
			$fbUserProfile = $profileRequest->getGraphNode()->asArray();
		} catch(FacebookResponseException $e) {
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(FacebookSDKException $e) {
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}		
		$fbUserData = array(
			'social_network_type'=> 'facebook',
			'social_network_id'     => $fbUserProfile['id'],
			'first_name'    => $fbUserProfile['first_name'],
			'last_name'     => $fbUserProfile['last_name'],
			'email'         => $fbUserProfile['email'],
			'fullname'     => $fbUserProfile['name'],
			'gender'        => isset($fbUserProfile['gender'])?$fbUserProfile['gender']:'',
			'locale'        => isset($fbUserProfile['locale'])?$fbUserProfile['locale']:'',
			'picture'       => isset($fbUserProfile['picture']['url'])?$fbUserProfile['picture']['url']:'',
			'link'          => isset($fbUserProfile['link'])?$fbUserProfile['link']:''
		);
		
		$userData = $this->model->checkUser($fbUserData);	
			
		//Render facebook profile data
		if(!empty($userData)){
			print_r('luu thanh cong');exit;
		}
		else{
			
			$output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
			print_r($output);exit;
		}
		
		echo $user;exit;
	}
}