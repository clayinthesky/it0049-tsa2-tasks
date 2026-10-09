<?php
namespace App\Controllers;
use App\Models\TaskModel;
class PageController extends BaseController
{
    public function welcome() { return view('pages/welcome', ['tasks' => (new TaskModel())->active()->limit(5)->findAll()]); }
    public function profile() { return view('pages/profile'); }
    public function about() { return view('pages/about'); }
}
