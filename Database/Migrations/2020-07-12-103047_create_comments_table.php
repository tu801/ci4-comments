<?php namespace Modules\Comments\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCommentsTable extends Migration
{
	public function up()
	{
        /*
         * Create Comments Table
         */
        $this->forge->addField([
            'id'              	=> ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'mod_id'	      	=> ['type' => 'int', 'constraint' => 11, 'unsigned' => false],
            'mod_name'  	    => ['type' => 'varchar', 'constraint' => 32, 'null' => false],
            'cmt_author_id'		=> ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'author_ref'		=> ['type' => 'varchar', 'constraint' => 32, 'null' => true],
            'author_name'  	    => ['type' => 'varchar', 'constraint' => 128, 'null' => true],
            'cmt_content'       => ['type' => 'text'],
            'cmt_agent'			=> ['type' => 'varchar', 'constraint' => 255],
            'cmt_approve'       => ['type' => 'tinyint', 'constraint' => 1, 'default' => 0],
            'created_at'       	=> ['type' => 'datetime', 'null' => true],
            'updated_at'       	=> ['type' => 'datetime', 'null' => true],
            'deleted_at'       	=> ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('comments', true);

        /*
         * Create Comments Reply Table
         */
        $this->forge->addField([
            'id'              	=> ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'comment_id'      	=> ['type' => 'int', 'constraint' => 11, 'unsigned' => false],
            'cmt_author_id'		=> ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'author_ref'		=> ['type' => 'varchar', 'constraint' => 32, 'null' => true],
            'author_name'  	    => ['type' => 'varchar', 'constraint' => 128, 'null' => true],
            'cmt_content'       => ['type' => 'text'],
            'cmt_agent'			=> ['type' => 'varchar', 'constraint' => 255],
            'cmt_approve'       => ['type' => 'tinyint', 'constraint' => 1, 'default' => 0],
            'created_at'       	=> ['type' => 'datetime', 'null' => true],
            'updated_at'       	=> ['type' => 'datetime', 'null' => true],
            'deleted_at'       	=> ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('comment_reply', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropTable('comment_reply', true);
        $this->forge->dropTable('comments', true);
	}
}
