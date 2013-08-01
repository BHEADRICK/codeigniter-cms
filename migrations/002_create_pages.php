<?php

class Migration_create_pages extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'slug' => array(
				'type' => 'varchar',
				'constraint' => '128',
			),
                    'order' => array(
				'type' => 'int',
				'constraint' => '11',
			),
			'body' => array (
                            'type'=>'text',
                            
                        )
                        
		));
                $this->dbforge->add_key('id', true);
		$this->dbforge->create_table('pages');
	}

	public function down()
	{
		$this->dbforge->drop_table('pages');
	}
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
