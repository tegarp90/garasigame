<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
	}
	public function index()
	{
		// var_dump($_SESSION['username']); exit;
		redirect('profile?user='.$_SESSION['username']);
	
	}
	public function formlogin()
	{
		if($this->input->is_ajax_request()){
			$msg = [
				'data' => $this->load->view('modal/modal_sign', '', TRUE)
			];

			echo json_encode($msg);
		}else{
			echo "Maaf Tidak di proses";
		}
	}
	public function formregister()
	{
		if($this->input->is_ajax_request()){
			$msg = [
				'data' => $this->load->view('modal/modal_register', '', TRUE)
			];

			echo json_encode($msg);
		}else{
			echo "Maaf Tidak di proses";
		}
	}
	public function validate() {

        if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

			if ($this->form_validation->run() == FALSE){
				$errors = [
					'error' =>[
						'username' => form_error('username'),
						'password' => form_error('password')
					]
				];
				echo json_encode($errors);
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$cek = $this->crud->cekid('USER','USERNAME',$username);
				if ($cek == false) {
					echo json_encode(['auths'=>'<p>Username is not Exist</p>']);
				}else{
					$cekstatus = $this->crud->get_where('USER',['USERNAME' => $username])->row_array();
					if($cekstatus['STATUS'] == 0){
						echo json_encode(['auth'=>'<p>Your Accounnt Need Activated</p>']);
					}else{
						$cekpass = $this->crud->cekpass('USER','USERNAME',$username,$password);
						if ($cekpass == false) {

							echo json_encode(['authp'=>'<p>Password Invalid!</p>']);

						}else{
							$arraysesi = array('username' => $username, 'web_sesi' => true);
							$this->session->set_userdata($arraysesi);
						   	echo json_encode(['success'=>'Login Success']);
						}
					}
				}
			}
			 
		}else{
			echo "Maaf Tidak di proses";
		}

    }
    public function validatereg() {

        if($this->input->is_ajax_request()){
        	$this->form_validation->set_rules('email-reg', 'Email', 'trim|required|valid_email|is_unique[USER.EMAIL]');
			$this->form_validation->set_rules('username-reg', 'Username', 'trim|required|min_length[6]|is_unique[USER.USERNAME]');
			$this->form_validation->set_rules('password-reg', 'Password', 'trim|required|min_length[6]');
			$this->form_validation->set_rules('password-reg2', 'Confirm Password', 'trim|required|matches[password-reg]');

			if ($this->form_validation->run() == FALSE){
				$errors = [
					'error' =>[
						'email' => form_error('email-reg'),
						'username' => form_error('username-reg'),
						'password' => form_error('password-reg'),
						'password2' => form_error('password-reg2')
					]
				];
				echo json_encode($errors);
			}else{
				$email = $this->input->post('email-reg');
				$username = $this->input->post('username-reg');
				$password = $this->input->post('password-reg');

				$data = array(
					'EMAIL'			=> $email,
					'USERNAME' 		=> $username,
					'PASSWORD' 		=> password_hash($password,PASSWORD_DEFAULT),
					'ID_GAME' 		=> rand(200000,1000000),
					'AVATAR' 		=> "default.jpg",
					'CREATED_DATE' 	=> date("Y-m-d"),
					'UPDATE_DATE' 	=> date("Y-m-d"),
					'STATUS'		=> 0,
					 );

				$token = base64_encode(random_bytes(32));
				$data_token = [
					'EMAIL' => $email,
					'TOKEN'	=> $token,
					'DATE_CREATED' 	=> time()
				];

				$this->crud->insert('USER',$data);
				$this->crud->insert('USER_TOKEN',$data_token);

				$this->_sendEmail($token,$email,'verify');
				echo json_encode(['success'=>'registration is successful, please activate via your email']);
			}
			 
		}else{
			echo "Maaf Tidak di proses";
		}

    }
    private function _sendEmail($token,$email,$type)
    {
    	$config = [
    		'protocol' 	=> 'smtp',
    		'smtp_host'	=> 'ssl://smtp.googlemail.com',
    		'smtp_user' => 'garasigame21@gmail.com',
    		'smtp_pass'	=> '*#G4ras1G4m3',
    		'smtp_port'	=> 465,
    		'mailtype'	=> 'html',
    		'charset'	=> 'utf-8',
    		'newline'	=> "\r\n"
    	];
    	$this->email->initialize($config);
    	
    	$this->email->from('garasigame21@gmail.com','Garasi Game');
    	$this->email->to($email);
    	if ($type == 'verify') {
    		$this->email->subject('Account Verification');
    		$this->email->message('Click this lin to verify your acccount : <a href="'.base_url().'login/verify?email='.$email.'&token='.urlencode($token).'">Activate</a>');
    	}else{
    		$this->email->subject('Account Verification');
    		$this->email->message('Click this lin to verify your acccount : <a href="'.base_url().'login/reset?email='.$email.'&token='.urlencode($token).'">Reset Password</a>');
    	}
    	
    	
    	if($this->email->send()){
    		return true;
    	}else{
    		echo $this->email->print_debugger();
    		die;
    	}
    }
    public function verify()
    {
    	$email = $this->input->get('email');
    	$token = $this->input->get('token');

    	$user = $this->crud->get_where('USER',['EMAIL' => $email])->row_array();
    	if($user){
    		$user_token = $this->crud->get_where('USER_TOKEN',['TOKEN' => $token])->row_array();
    		if ($user_token) {
    			if (time() - $user_token['DATE_CREATED'] < (60*60*24)) {
    				$this->crud->update('USER','EMAIL',$email,['STATUS' => 1]);
    				$this->crud->delete('USER_TOKEN',['EMAIL' => $email]);
    				redirect(base_url());
    			}else{
    				$this->crud->delete('USER',['EMAIL' => $email]);
    				$this->crud->delete('USER_TOKEN',['EMAIL' => $email]);
    				show_error('Token was Expired.','103','Activation Failed!!');
    			}
    		}else{
    			show_error('Token is Invalid.','102','Activation Failed!!');
    		}
    	}else{
    		show_error('Email is Invalid.','101','Activation Failed!!');
    	}
    }
	function logout()
	{
		$this->session->sess_destroy();
		?>
			<script type="text/javascript">
			alert("Sign Out Berhasil!");			
			</script>
		<?php
		redirect(base_url());
	}
	public function google_login()
	{
		include_once APPATH . "libraries/vendor/autoload.php";

		$google_client = new Google_Client();
		$google_client->setClientId('188463175625-67l3gjrgo442n7k793878bd85da1v5p5.apps.googleusercontent.com
');
		$google_client->setClientSecret('BNDS2tOVrTLMUw4SW66yC3yb');
		$google_client->setRedirectUrl('http://localhost/GarasiGames/login/google_login');
		$google_client->addScope('email');

		$google_client->addScope('profile');
		if (isset($_GET["code"])) {

			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

			if (!isset($token["error"])) {
				$google_client->setAccessToken($token['access_token']);
				$this->session->userdata('access_token', $token['access_token']);

				$google_service = new Google_Service_Oauth2($google_client);

				$data = $google_service->userinfo->get();

				$current = date('Y-m-d H:i:s');

				if ($this->crud->cekid('USER','GOOGLE_ID',$data['id'])) {
					$user_data = array(
						'NAMA' => $data['given_name']+''+$data['family_name'],
						'EMAIL' => $data['email'],
						'AVATAR' => $data['picture'],
						'UPDATE_DATE' => $current
					);
					$this->crud->update('USER','GOOGLE_ID',$data['id'],$user_data);
				}else{
					$user_data = array(
						'GOOGLE_ID' => $data['id'],
						'NAMA' => $data['given_name']+''+$data['family_name'],
						'EMAIL' => $data['email'],
						'AVATAR' => $data['pictur'],
						'CREATED_DATE' => $current
					);
					$this->crud->insert('USER',$user_data);
				}
				$this->session->set_userdata('web_sesi',true);
				$this->session->userdata('user_data',$user_data);
			}
			
		}

	}
}
