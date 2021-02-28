<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

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
		redirect(base_url());
	}
	public function profil($value='')
	{
		$f_name = $this->input->post('f_name');
		$l_name = $this->input->post('l_name');
		$p_number = $this->input->post('p_number');
		$birthday = $this->input->post('birthday');
		$address = $this->input->post('address');
		$gender = $this->input->post('gender');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');

		$data = array(
			'NAMA' => $f_name.' '.$l_name,
			'PHONE_NUMBER' => $p_number,
			'BIRTHDAY'	=> $birthday,
			'ADDRESS'	=> $address,
			'GENDER'	=> $gender,
			'FACEBOOK'	=> $facebook,
			'INSTAGRAM'	=> $instagram,
			'STATUS' => 2
		 );
		$this->crud->update('USER','USERNAME',$_SESSION['username'],$data);
		redirect('login');
	}
	function upload_foto()
	{
		$username = $_SESSION['username'];
        $config['upload_path']          = './assets/img/avatar';
        $config['allowed_types']        = 'jpg|png';
        $config['overwrite']			= TRUE;
        $config['file_name']			= $username;
        $this->upload->initialize($config);

        	if(!$this->upload->do_upload('foto'))
			{   

				echo "<script> alert('Harap Upload foto sesuai permintaan');</script>";
            	redirect('home/profil_user/'.$username, 'refresh');
			}else{
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library']='gd2';
    			$config['source_image']='./assets/img/avatar/'.$gbr['file_name'];
        		$config['create_thumb']= FALSE;
        		$config['maintain_ratio']= FALSE;
        		$config['rotation_angle']= 'hor';
        		$config['width']= 300;
        		$config['height']= 300;
        		$config['quality']= '100%';
        		
        		$config['new_image']= './assets/img/avatar/'.$gbr['file_name'];
        		$this->load->library('image_lib', $config);
        		$this->image_lib->resize();

        		$data = array(
        					'USERNAME' => $username, 

        					'AVATAR' => $gbr['file_name']
        				);

        		$this->crud->input_foto('user', $data);

				redirect('login');
			}
	}
}
