<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Get homepage
     *
     * @return void
     */
    public function get_home() {
        return view("welcome");
    }


    /**
     * Get current csrf_token
     *
     * @return void
     */
    public function get_token () {
        return csrf_token();
    }

    /**
     * Get all todos model
     *
     * @return void
     */
    public function get_todos() {
        return Task::all();
    }

    /**
     * Get todo with the given id
     *
     * @param [type] $id
     * @return void
     */
    public function get_todo($id) {
        return Task::find($id);
    }

    /**
     * Create a new task
     *
     * @param Request $request
     * @return void
     */
    public function post_todo(Request $request) {
        
        $todo = new Task;
        $todo->content = $request->content;
        $todo->save();
        return $todo;
    }

    /**
     * Update the task
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function update_todo(Request $request, $id) {
        $task = Task::find($id);
        $task->content = $request->has("content") ? $request->content : $task->content;
        $task->is_complete = $request->has("is_complete") ? $request->is_complete : $task->is_complete;
        $task->is_deleted = $request->has("is_deleted") ? $request->is_deleted : $task->is_deleted;
        $task->save();
        return $task;
    }

    /**
     * Delete the task from tasks model
     *
     * @param Request $request
     * @return void
     */
    public function delete_todo(Request $request, $id) {
        return Task::destroy([$id]);
    }


}
