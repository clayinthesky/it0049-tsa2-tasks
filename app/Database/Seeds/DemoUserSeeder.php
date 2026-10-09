<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class DemoUserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert([
            'username' => 'demo',
            'password' => password_hash('Demo123!', PASSWORD_DEFAULT),
            'full_name' => 'Demo User',
        ]);
        $this->db->table('tasks')->insertBatch([
            ['title' => 'Prepare database migration', 'description' => 'Add password and archive support.', 'task_date' => date('Y-m-d'), 'is_archived' => 0, 'created_at' => date('Y-m-d H:i:s')],
            ['title' => 'Build login page', 'description' => 'Protect management actions behind authentication.', 'task_date' => date('Y-m-d'), 'is_archived' => 0, 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
