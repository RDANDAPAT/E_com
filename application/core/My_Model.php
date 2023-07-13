<?php class MY_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    public function fetch($condition = '', $selector = '*', $limit = null, $offset = '', $order = '', $orderType = 'desc', $group = '') {
        $this->db->select($selector);
        if (empty($order)) {
            $order = $this->primaryKey;
        }
        if (!empty($condition))
            $this->db->where($condition);
        $this->db->order_by($order, $orderType);
        if ($limit != '') {
            if (!empty($offset)) {
                $this->db->limit($limit, $offset);
            } else {

                $this->db->limit($limit);
            }
        }

        if (!empty($group)) {
            $this->db->group_by($group);
        }


        $res = $this->db->get($this->tableName);

        if($res->num_rows() == 1) {
          $arr = $res->row_array();
        } else if ($res->num_rows() > 1){
          $arr = $res->result_array();
        } else {
          $arr = array();
        }
        // $arr = $res->num_rows() > 0 ? $res->result_array() : array();


        return $arr;
    }
    public function add($dataArray) {
        if (is_array($dataArray)) {

            if (array_filter(array_keys($dataArray), 'is_string')) {

                $this->db->set($dataArray, false);
                $this->db->insert($this->tableName);
                $result = $this->fetch("", "", 1);
                return $result;
            } else {
              //   $this->db->set($dataArray);
              //  die("here");
                $this->db->insert_batch($this->tableName,$dataArray);

                 return true;
            }
        }
    }
}