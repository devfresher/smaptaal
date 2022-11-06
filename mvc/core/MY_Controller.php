<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property document_m $document_m
 * @property email_m $email_m
 * @property error_m $error_m
 */
class MY_Controller extends CI_Controller {
/*
| -----------------------------------------------------
| PRODUCT NAME: 	limpids SCHOOL MANAGEMENT SYSTEM
| -----------------------------------------------------
| AUTHOR:			limpids TEAM
| -----------------------------------------------------
| EMAIL:			info@limpids.net
| -----------------------------------------------------
| COPYRIGHT:		RESERVED BY limpids IT
| -----------------------------------------------------
| WEBSITE:			http://limpids.net
| -----------------------------------------------------
*/
	public $data = array();

	public function __construct() {
		parent::__construct();
		$this->load->config('iniconfig');
		$this->data['errors'] = array();

        if(!$this->config->config_install()) {
            redirect(site_url('install'));
        }
	}

}
