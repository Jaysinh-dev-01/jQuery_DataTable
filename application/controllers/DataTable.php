<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller DataTable
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class DataTable extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Users_model','Users');
  }

  public function index()
  {
    $this->load->view('table');
  }

  public function getUsers()
  {
    if ($this->input->is_ajax_request()) {
      $draw = $this->input->post('draw');
      $start = $this->input->post('start');
      $length = $this->input->post('length');
      $search = $this->input->post('search')['value'];
      $columns = $this->input->post('columns');


      if ($this->input->post('order')) {
        $order = $this->input->post('order')[0];
        $orderColumnIndex = $order['column'];
        $columnDirection = $order['dir'];
        $orderColumn = $columns[$orderColumnIndex]['data'];
      } else {
        $orderColumn = "id";
        $columnDirection = "asc";
      }

      $userData = $this->Users->getUsers($start,$length,$orderColumn,$columnDirection,$search);
      
      $totalRecords = count($this->Users->getUsers(0,-1,null,null,''));
      $totalFilterRecords  =count($this->Users->getUsers(0,-1,$orderColumn,$columnDirection,$search));

      $data = [
        'draw' => $draw,
        'recordsTotal' => $totalRecords,
        'recordsFiltered' =>$totalFilterRecords,
        'data' => $userData
      ];

      echo json_encode($data);
    }
  }
}


/* End of file DataTable.php */
/* Location: ./application/controllers/DataTable.php */