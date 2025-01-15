<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_mhs_model
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

class M_mhs extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function get_data()
  {
    return $this->db->get('tb_mhs')->result_array();
  }

  // ------------------------------------------------------------------------

}

/* End of file M_mhs_model.php */
/* Location: ./application/models/M_mhs_model.php */