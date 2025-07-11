<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            
            'id' => [
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
               'auto_increment' => true
               
            ],

            'title' =>  [
                'type' => 'VARCHAR',
                'constraint' => 255               
            ],

            'slug' =>  [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true
            ],

            'content' => [
                'type' => 'text'
            ],

            'image' =>  [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],

            'category_id' => [
                'type' => 'INT',
                'contraint' => 11,
                'unsigned' => true,
                'null' => true
            ],

            'user_id' => [
                'type' => 'INT',
                'contraint' => 11,
                'unsigned' => true
            ],

            'status' => [
                'type' => 'ENUM',
                'constraint' => ['draft', 'published', 'trash'],
                'default' => 'draft'
            ],

            'created_at' =>  [
                'type' => 'DATETIME',
                'null' => true
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],

            
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_id', 'categories', 'id', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');  
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}