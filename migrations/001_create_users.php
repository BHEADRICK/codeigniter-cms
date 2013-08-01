<?php

class Migration_create_users extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'password' => array(
				'type' => 'varchar',
				'constraint' => '128',
			),
                    'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			
                        
		));
                $this->dbforge->add_key('id', true);
		$this->dbforge->create_table('users');
	}

	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
