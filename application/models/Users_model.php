  <?php
  defined('BASEPATH') or exit('No direct script access allowed');

  /**
   *
   * Model Users_model
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

  class Users_model extends CI_Model
  {

    // ------------------------------------------------------------------------

    public function __construct()
    {
      parent::__construct();
    }

    public function getUsers($start, $length, $orderColumn, $columnDirection, $search)
    {

      $this->db->select("*");
      $this->db->from("users");

      if (!empty($search)) {
        $this->db->group_start();
        $this->db->like('id', $search);
        $this->db->or_like('name', $search);
        $this->db->or_like('age', $search);
        $this->db->or_like('email', $search);
        $this->db->or_like('city', $search);
        $this->db->or_like('address', $search);
        $this->db->group_end();
      }

      if (!empty($orderColumn)) {
        $this->db->order_by($orderColumn,$columnDirection);
      }

      if($length != -1){
        $this->db->limit($length,$start);
      }

      
      return $this->db->get()->result_array();


    }
  }

  /* End of file Users_model.php */
  /* Location: ./application/models/Users_model.php */