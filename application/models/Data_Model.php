<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_Model extends My_Model{

    public $tableName = 'tblusers';
    public $primaryKey = 'id';

    function __construct() {
        parent::__construct();
    }

}