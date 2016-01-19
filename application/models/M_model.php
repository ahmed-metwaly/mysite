<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of M_model
 *  this class main model
 * @author Ahmed
 */
class M_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // start database crud oprations
    /**
     * insert into one table
     * 
     * @param string $table
     * @param array $data
     * @return bool
     */
    public function add($table, $data = array()) {
        return $this->db->insert($table, $data) ? TRUE : FALSE;
    }

    /**
     * Add into multi tables
     * 
     *  only assgin multi array as this
     * 
      array(
      'tal1' => array(
      'key' => 'val',
      'key' => 'val',
      'key' => 'val',
      'key' => 'val'
      ),
      'tal2' => array(
      'key' => 'val',
      'key' => 'val',
      'key' => 'val',
      'key' => 'val'
      ),
      );
     * 
     * @param array $data
     * @return boolean
     */
    public function addMulti($data = array()) {
        foreach ($data as $table => $value) {
            $this->db->insert($table, $value);
        }
        return TRUE;
    }

    /**
     * 
     * @param string $table
     * @param string $colName
     * @param string $colVal
     * @param array $data
     * @return bool
     */
    public function edit($table, $colName, $colVal, $data = array()) {
        $this->db->where($colName, $colVal);
        return $this->db->update($table, $data) ? TRUE : FALSE;
    }

    /**
     *  Delete
     * 
     * @param string $table
     * @param string $colName
     * @param string $colVal
     * @return bool
     */
    public function remove($table, $colName, $colVal) {
        $this->db->where($colName, $colVal);
        return $this->db->delete($table) ? TRUE : FALSE;
    }
    
    /**
     *  Get data using condtions
     * @param string $table
     * @param array $data
     * @param array $options
     * @param string $fetch
     * @return array
     */
    public function get($table, $data = '*', $options = '', $fetch = 'result_array') {
        if ($data != '') {
            foreach ($data as $fild) {
                $this->db->select($fild);
            }
        }
        
        $this->db->from($table);
        
        if ($options != '' && is_array($options)) {
            foreach ($options as $cond) {
                $cond;
            }
        }
        
        return $this->db->get()->$fetch();
    }

    /**
     * Get count query
     * 
     * @param string $table
     * @param array $options
     * @return int
     */
    public function getCount($table, $options = '') {
        if ($options != '' && is_array($options)) {
            foreach ($options as $cond) {
                $cond;
            }
        }
        $this->db->from($table);
        return $this->db->count_all_results();
    }

    /**
     *  Get last insert id
     * 
     * @param string $table
     * @param string $id colmun name
     * @return int
     */
    public function getLastInsertId($table, $id) {
        $this->db->select_max($id);
        $result = $this->db->get($table)->row_array();
        return $result[$id];
    }
    
    
    
    
    // end database crud oprations
}
