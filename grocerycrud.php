<?php
class GroceryCrud extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->events->add_action( 'after_app_init', array( $this, 'init' ) );
	}
	function init()
	{
		$this->config->load( 'grocery_crud' );
		$this->load->library( 'Grocery_CRUD' );
	}
}
new GroceryCrud;