<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('home_model');
		$this->load->helper('form');
	}

	public function index()
	{

	}

	public function adminDashboard()
	{

	}

	public function configureDisplay()
	{
		if($this->session->userdata['login']==1){
			$data['previllegesBar'] = $this->session->userdata['previlleges'];
		} else {
			redirect(base_url('home'));
		}
		if ($this->input->post('updateAppereance')) {
			$this->home_model->updateAppereance();
		} elseif ($this->input->post('updateSiteIdentity')) {
			$this->home_model->updateSiteIdentity();
		}	elseif ($this->input->post('uploadPhoto')) {
			$config['upload_path']   = APPPATH.'../assets/carousel/';
			$config['overwrite'] = TRUE;
			$config['file_name']     = 'carousel_img_'.$this->input->post('carousel');
			$config['allowed_types'] = 'jpg|png';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('carousel_img_')) {
				echo $this->upload->display_errors();
			} else {
				$this->home_model->updateCarousel($config['file_name']);
			}
		}
		$data['site'] = $this->home_model->getSiteConfig();
		$data['view_name'] = 'admin/configureDisplay';
		$this->load->view('temp',$data);
	}

	public function configureContent()
	{
		if($this->session->userdata['login']==1){
			$data['previllegesBar'] = $this->session->userdata['previlleges'];
		} else {
			redirect(base_url('home'));
		}

		if ($this->input->post('addBrand')) {
			$this->home_model->addBrand();
		} elseif ($this->input->post('addRegion')) {
			$this->home_model->addRegion();
		}
		$data['site'] = $this->home_model->getSiteConfig();
		$data['region'] = $this->home_model->getRegion();
		$data['brand'] = $this->home_model->getBrand();
		$data['view_name'] = 'admin/configureContent';
		$this->load->view('temp',$data);
	}


	public function deleteBrand($id)
	{
		$this->home_model->deleteBrand($id);
		redirect(base_url('configureContent'));
	}

	public function deleteRegion($id)
	{
		$this->home_model->deleteRegion($id);
		$this->home_model->deleteBrandInRegion($id);
		redirect(base_url('configureContent'));
	}

	public function editBrand($id)
	{
		$data['brand'] = $this->home_model->getSelectedBrand($id);
		if($this->session->userdata['login']==1){
			$data['previllegesBar'] = $this->session->userdata['previlleges'];
		} else {
			redirect(base_url('home'));
		}

		if ($this->input->post('updateBrand')) {
			$this->home_model->updateBrand($id);
			redirect(base_url('configureContent'));
		} elseif ($this->input->post('uploadLogo')) {
			$config['upload_path']   = APPPATH.'../assets/brand/';
			$config['overwrite'] = TRUE;
			$config['file_name']     = $data['brand']->brand_name;
			$config['allowed_types'] = 'jpg|png';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('img')) {
				echo $this->upload->display_errors();
			} else {
				$this->home_model->updateLogoBrand($config['file_name'],$id);
			}
		}
		$data['site'] = $this->home_model->getSiteConfig();
		$data['region'] = $this->home_model->getRegion();
		$data['view_name'] = 'admin/editBrand';
		$this->load->view('temp',$data);
	}

	public function editRegion($id)
	{
		$data['region'] = $this->home_model->getSelectedRegion($id);
		if($this->session->userdata['login']==1){
			$data['previllegesBar'] = $this->session->userdata['previlleges'];
		} else {
			redirect(base_url('home'));
		}

		if ($this->input->post('updateRegion')) {
			$this->home_model->updateRegion($id);
			redirect(base_url('configureContent'));
		} elseif ($this->input->post('uploadPhoto')) {
			$config['upload_path']   = APPPATH.'../assets/batik/';
			$config['overwrite'] = TRUE;
			$config['file_name']     = $data['region']->batik_name.$this->input->post('carousel');
			$config['allowed_types'] = 'jpg|png';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('carousel_img')) {
				echo $this->upload->display_errors();
			} else {
				$this->home_model->updatePhotoBatik($config['file_name'],$id);
			}

		}
		$data['site'] = $this->home_model->getSiteConfig();
		$data['region'] = $this->home_model->getSelectedRegion($id);
		$data['view_name'] = 'admin/editRegion';
		$this->load->view('temp',$data);
	}
}
