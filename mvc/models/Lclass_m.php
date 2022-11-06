<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lclass_m extends MY_Model {
    protected $_table_name = 'live_class';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = "created_at desc";

    function __construct() {
        parent::__construct();
    }

    function get_lives($array=NULL, $signal=FALSE) {
        $query = parent::get($array, $signal);
        return $query;
    }

    function get_single_lives($array) {
        $query = parent::get_single($array);
        return $query;
    }

    function get_order_by_lives($array=NULL) {
        $query = parent::get_order_by($array);
        return $query;
    }

    function insert_lives($array) {
        $id = parent::insert($array);
        return $id;
    }

    function update_lives($data, $id = NULL) {
        parent::update($data, $id);
        return $id;
    }

    public function delete_lives($id){
        parent::delete($id);
    }

}