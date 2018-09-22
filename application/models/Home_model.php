<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_model{
  public function __construct()
  {
    error_reporting(0);
    $this->load->database();
  }

  public function getSiteConfig()
  {
    $where = array('id' => 1);
    $query = $this->db->get_where('site_options',$where);
    return $query->row();
  }

  public function loginValidation()
  {
    $where = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
    );
    $query = $this->db->get_where('account',$where);
    return $query;
  }

  public function getPrevilleges()
  {
    $where = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
    );
    $query = $this->db->get_where('account',$where);
    return $query->row();
  }

  public function getLoggedUser($previlleges)
  {
    $where = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
    );
    $query = $this->db->get_where('view_'.$previlleges,$where);
    return $query->row();
  }

  public function updateProfile()
  {
    $data = array(
      'username' => $this->input->post('username'),
     );
    $where = array('id' => $this->session->userdata['id']);
    $this->db->where($where);
    $this->db->update('account',$data);
    $data = array(
      'fullname' => $this->input->post('fullname'),
      'email' => $this->input->post('email'),
      'phone_number' => $this->input->post('phone_number'),
      'address' => $this->input->post('address')
     );
    $where = array('id' => $this->session->userdata['id']);
    $this->db->where($where);
    $this->db->update('account_'.$this->session->userdata['previlleges'],$data);
  }

  public function updatePassword()
  {
    $data = array('password' => md5($this->input->post('password')));
    $where = array('id' => $this->session->userdata['id']);
    $this->db->where($where);
    $this->db->update('account',$data);
  }

  public function updateAppereance()
  {
    $data = array(
      'color_bar' => $this->input->post('color_bar'),
      'web_explanation' => $this->input->post('web_explanation'),
      'map_link' => $this->input->post('map_link')
    );
    $where = array('id' => 1 );
    $this->db->where($where);
    $this->db->update('site_options',$data);
  }

  public function getRegion()
  {
    $query = $this->db->get('region');
    return $query->result();
  }

  public function getBrand()
  {
    $query = $this->db->get('view_brand');
    return $query->result();
  }

  public function addBrand()
  {
    $data = array(
      'id_region' => $this->input->post('id_region'),
      'brand_name' => $this->input->post('brand_name'),
      'owner' => $this->input->post('owner'),
      'address' => $this->input->post('addres')
     );
     $this->db->insert('brand',$data);
  }

  public function addRegion()
  {
    $data = array(
      'id' => $this->input->post('id'),
      'region_name' => $this->input->post('region_name'),
      'batik_name' => $this->input->post('batik_name'),
      'batik_explanation' => $this->input->post('batik_explanation')
     );
     $this->db->insert('region',$data);
  }

  public function deleteRegion($id)
  {
    $where = array('id' => $id );
    $this->db->delete('region',$where);
  }

  public function deleteBrand($id)
  {
    $where = array('id' => $id );
    $this->db->delete('brand',$where);
  }

  public function deleteBrandInRegion($id)
  {
    $where = array('id_region' => $id );
    $this->db->delete('brand',$where);
  }

  public function getSelectedBrand($id)
  {
    $where = array('id' => $id );
    $query = $this->db->get('view_brand',$where);
    return $query->row();
  }

  public function updateBrand($id)
  {
    $where = array('id' => $id );
    $data = array(
      'id_region' => $this->input->post('id_region'),
      'brand_name' => $this->input->post('brand_name'),
      'owner' => $this->input->post('owner'),
      'address' => $this->input->post('address')
     );
     $this->db->where($where);
     $this->db->update('brand',$data);
  }

  public function updateRegion($id)
  {
    $where = array('id' => $id );
    $data = array(
      'id' => $this->input->post('id'),
      'region_name' => $this->input->post('region_name'),
      'batik_name' => $this->input->post('batik_name'),
      'batik_explanation' => $this->input->post('batik_explanation')
     );
     $this->db->where($where);
     $this->db->update('region',$data);
  }

  public function getSelectedRegion($id)
  {
    $where = array('id' => $id );
    $query = $this->db->get('region',$where);
    return $query->row();
  }

  public function updateSiteIdentity()
  {
    $data = array(
      'first_site_name' => $this->input->post('first_site_name'),
      'last_site_name' => $this->input->post('last_site_name'),
    );
    $where = array('id' => 1 );
    $this->db->where($where);
    $this->db->update('site_options',$data);
  }

  public function getRegionInfo($id)
  {
    $where = array('id' => $id );
    $query = $this->db->get_where('region',$where);
    return $query->row();
  }

  public function getBrandList($id)
  {
    $where = array('id_region' => $id );
    $query = $this->db->get_where('view_brand',$where);
    return $query->result();
  }

  public function updateCarousel($filename)
  {
    $data = array(
      'carousel_img_'.$this->input->post('carousel') => $filename.'.jpg',
      'carousel_exp_'.$this->input->post('carousel') => $this->input->post('carousel_exp_')
     );
     $where = array('id' =>1);
     $this->db->where($where);
     $this->db->update('site_options',$data);
  }

  public function updatePhotoBatik($filename,$id)
  {
    $fname = str_replace(' ', '_', $filename);
    $data = array(
      'img_path_'.$this->input->post('carousel') => $fname.'.jpg'
     );
     $where = array('id' =>$id);
     $this->db->where($where);
     $this->db->update('region',$data);
  }

  public function updateLogoBrand($filename,$id)
  {
    $fname = str_replace(' ', '_', $filename);
    $data = array(
      'brand_img' => $fname.'.jpg'
     );
     $where = array('id' =>$id);
     $this->db->where($where);
     $this->db->update('brand',$data);
  }

}
?>
