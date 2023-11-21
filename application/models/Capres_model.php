<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Capres_model_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Capres_model extends CI_Model {

public $table = 'calon_presiden';
public $id = 'calon_presiden.id';
  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function get()
  {
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->result_array();
    // 
  }

  public function getById($id)
  {
    $this->db->from($this->table);
    $this->db->where($this->id, $id);
    $query = $this->db->get();
    return $query->row_array();
    // 
  }

  public function update($where, $data)
  {
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
    // 
  }
  // ------------------------------------------------------------------------
  public function insert($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
    // 
  }

  public function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
    // 
  }
  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

}

/* End of file Capres_model_model.php */
/* Location: ./application/models/Capres_model_model.php */