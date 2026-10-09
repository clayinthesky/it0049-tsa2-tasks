<?php
namespace App\Controllers;
use App\Models\TaskModel;
class TaskController extends BaseController
{
    private TaskModel $tasks;
    public function __construct() { $this->tasks = new TaskModel(); }
    public function index() { return view('tasks/index', ['tasks' => $this->tasks->active()->findAll()]); }
    public function new() { return view('tasks/form', ['task' => null]); }
    public function create()
    {
        $data = $this->request->getPost(['title', 'description', 'task_date']);
        $data['is_archived'] = 0;
        if (! $this->tasks->insert($data)) return redirect()->back()->withInput()->with('errors', $this->tasks->errors());
        return redirect()->to('/tasks')->with('message', 'Task created.');
    }
    public function edit($id) { return view('tasks/form', ['task' => $this->tasks->where('is_archived', 0)->find($id)]); }
    public function update($id)
    {
        if (! $this->tasks->update($id, $this->request->getPost(['title', 'description', 'task_date']))) return redirect()->back()->withInput()->with('errors', $this->tasks->errors());
        return redirect()->to('/tasks')->with('message', 'Task updated.');
    }
    public function delete($id) { $this->tasks->update($id, ['is_archived' => 1]); return redirect()->to('/tasks')->with('message', 'Task archived.'); }
}
