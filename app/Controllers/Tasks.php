<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Tasks extends BaseController
{
    protected $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    // Public landing page
    public function today()
    {
        $tasks = $this->taskModel
            ->where('task_date', date('Y-m-d'))
            ->where('is_archived', 0)
            ->orderBy('id', 'DESC')
            ->findAll();

        return view('welcome', [
            'tasks' => $tasks,
        ]);
    }

    // Public task list
    public function index()
    {
        $tasks = $this->taskModel
            ->where('is_archived', 0)
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('tasks', [
            'tasks' => $tasks,
        ]);
    }

    // Public profile page
    public function profile()
    {
        $userModel = new UserModel();

        return view('profile', [
            'user' => $userModel->first(),
        ]);
    }

    // Public about page
    public function about()
    {
        return view('about');
    }

    // Protected: display new task form
    public function newTask()
    {
        helper(['form']);

        return view('tasks/new');
    }

    // Protected: save a new task
    public function create()
    {
        helper(['form']);

        $rules = [
            'title'     => 'required',
            'task_date' => 'required',
        ];

        if (! $this->validateData($this->request->getPost(), $rules)) {
            return redirect()
                ->back()
                ->withInput();
        }

        $this->taskModel->insert([
            'title'       => $this->request->getPost('title'),
            'status'      => $this->request->getPost('status') ?: 'pending',
            'task_date'   => $this->request->getPost('task_date'),
            'created_at'  => date('Y-m-d H:i:s'),
            'is_archived' => 0,
        ]);

        return redirect()
            ->to('/tasks')
            ->with('message', 'Task created successfully.');
    }

    // Protected: display edit form
    public function edit($id)
    {
        helper(['form']);

        $task = $this->taskModel
            ->where('is_archived', 0)
            ->find($id);

        if (! $task) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('tasks/edit', [
            'task' => $task,
        ]);
    }

    // Protected: update an existing task
    public function update($id)
    {
        helper(['form']);

        $rules = [
            'title'     => 'required',
            'task_date' => 'required',
        ];

        if (! $this->validateData($this->request->getPost(), $rules)) {
            return redirect()
                ->back()
                ->withInput();
        }

        $task = $this->taskModel
            ->where('is_archived', 0)
            ->find($id);

        if (! $task) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->taskModel->update($id, [
            'title'     => $this->request->getPost('title'),
            'status'    => $this->request->getPost('status') ?: 'pending',
            'task_date' => $this->request->getPost('task_date'),
        ]);

        return redirect()
            ->to('/tasks')
            ->with('message', 'Task updated successfully.');
    }

    // Protected: archive a task instead of deleting the row
    public function delete($id)
    {
        $task = $this->taskModel
            ->where('is_archived', 0)
            ->find($id);

        if (! $task) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->taskModel->update($id, [
            'is_archived' => 1,
        ]);

        return redirect()
            ->to('/tasks')
            ->with('message', 'Task archived successfully.');
    }
}