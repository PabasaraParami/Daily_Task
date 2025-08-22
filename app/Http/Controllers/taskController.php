<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class taskController extends Controller
{
    public function save(Request $request)
    {
        // dd($request->all());
        // Logic to save the task
        // For example, you might want to validate and store the task in the database
        // $task = $request->input('task');
        
        // Assuming you have a Task model set up
        // Task::create(['name' => $task]);

        // return redirect()->back()->with('success', 'Task saved successfully!');
    $request->validate([
            'task' => 'required|string|max:255',
        ]);

        $task = new Task();
        $task->task = $request->input('task');
        $task->save();
        
        return redirect()->route('task');
       
    }

  public function index()
{
    $tasks = Task::all();
    return view('Task', compact('tasks'));
}
        

public function updateTask($id)
{
   

    $task = Task::find($id); // task table id- parameter
    if ($task) {
        $task->completed= 1; // Assuming you have a 'completed' field in your Task model
        $task->save();
              
        return redirect()->route('task')->with('success', 'Task marked as completed!');
       
    }
    return redirect()->route('task')->with('error', 'Task not found!');
}   



 public function markAsNotComplete($id)
 {
    $task = Task::find($id);
    if ($task) {
        $task->completed = 0;
        $task->save();

        return redirect()->route('task')->with('success', 'Task marked as not completed!');
    }
    return redirect()->route('task')->with('error', 'Task not found!');
}


public function destroy($id)
{
    $task = Task::find($id);
    if ($task) {
        $task->delete();
        return redirect()->route('task')->with('success', 'Task deleted successfully!');
    }
    return redirect()->route('task')->with('error', 'Task not found!');
}
public function Updateview($id)
{
    $task = Task::find($id);
    if ($task) {
        return view('edit', compact('task')); // Assuming you have an editTask view
    }
    return redirect()->route('task')->with('error', 'Task not found!');
}

public function update(Request $request)
{
// dd($request);
$id=$request->input('id');
$newtask = $request->input('task');

$data = Task::find($id); // data walata adala id
if ($data) {
    $data->task = $newtask;
    $data->save();
    $tasks = Task::all();
   return view('Task', compact('tasks'));
}
else{
return redirect()->route('task')->with('error', 'Task not found!');
}

}
}


