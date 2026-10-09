<?php
namespace App\Models;
use CodeIgniter\Model;
class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'task_date', 'is_archived'];
    protected $useTimestamps = true;
    protected $validationRules = [
        'title' => 'required|min_length[2]|max_length[150]',
        'task_date' => 'required|valid_date[Y-m-d]',
        'description' => 'permit_empty|max_length[1000]',
    ];
    public function active()
    {
        return $this->where('is_archived', 0)->orderBy('task_date', 'ASC');
    }
}
