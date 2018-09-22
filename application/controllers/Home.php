<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$data['previllegesBar'] = 'null';
		if ($this->input->post('loginValidation')) {
			$loginValidation = $this->home_model->loginValidation();
			if ($loginValidation->num_rows()==1) {
				$previlleges = $this->home_model->getPrevilleges();
				$account = $this->home_model->getLoggedUser($previlleges->previlleges);
				$data_session = array(
					'login' => 1,
					'id' => $account->id,
					'username' => $account->username,
					'password' => $account->password,
					'fullname' => $account->fullname,
					'email' => $account->email,
					'phone_number' => $account->phone_number,
					'address' => $account->address,
					'previlleges' => $previlleges->previlleges
				 );
				$this->session->set_userdata($data_session);
				$data['previllegesBar'] = $previlleges->previlleges;
				} else {
					$this->load->view('notification/loginFailed');
				}
			}
			if($this->session->userdata['login']==1){
				$data['previllegesBar'] = $this->session->userdata['previlleges'];
			}
			$data['site'] = $this->home_model->getSiteConfig();
			$data['view_name'] = 'home';
			$this->load->view('temp',$data);

		}

		public function logout()
		{
//			$this->session->sess_destroy();
			$data = array(
				'login' => 0,
			);

			$this->session->set_userdata($data);
			redirect(base_url('.'));
		}

		public function profil()
		{
			if ($this->input->post('updateProfile')) {
				$this->home_model->updateProfile();
			} else if ($this->input->post('updatePassword')) {
				$this->home_model->updatePassword();
			}
			if($this->session->userdata['login']==1){
				$data['previllegesBar'] = $this->session->userdata['previlleges'];
			}

			$data['site'] = $this->home_model->getSiteConfig();
			$data['view_name'] = 'profil';
			$this->load->view('temp',$data);
		}

		public function detailPlace($id)
		{
			if($this->session->userdata['login']==1){
			$data['previllegesBar'] = $this->session->userdata['previlleges'];
		} else {
			$data['previllegesBar'] = 'null';

		}

			$data['region'] = $this->home_model->getRegionInfo($id);
			$data['brand'] = $this->home_model->getBrandList($id);
			$data['site'] = $this->home_model->getSiteConfig();
			$data['view_name'] = 'detailPlace';
			$this->load->view('temp',$data);

		}

	}
