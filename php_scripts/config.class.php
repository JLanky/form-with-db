<?php

Class DBConfig {
	protected $dbConfig = array();

	protected function createConfig() {
		$this->dbConfig['host']     = 'localhost';
		$this->dbConfig['username'] = 'root';
		$this->dbConfig['password'] = '';
		$this->dbConfig['dbname']   = 'wp_loc';
	}
}