<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$query = Task::query();

		foreach ($request->all() as $key => $value) {
			if (empty($value)) continue; // Skip empty inputs

			switch ($key) {
				case 'status':
					$query->where('status', $value);
					break;
				case 'priority':
					$query->where('priority', $value);
					break;
				case 'title':
					$query->where('title', 'like', "%$value%");
					break;
			}
		}

		$tasks = $query->with('user') // Eager load the assigned user
			->orderBy('created_at', 'desc')
			->paginate(10);

		return view('tasks.show-task', compact('tasks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('tasks.create-task');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// Validate the incoming request
		$data = $request->validate([
			'title'       => 'required|string|max:255',
			'description' => 'required|string',
			'team_id'     => 'required|exists:teams,id',
			'user_id'     => 'required|exists:users,id',
			'status'      => 'required|string',
			'priority'    => 'required|string',
		]);

		// Create the task
		Task::create($data);

		return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Task  $task
	 * @return \Illuminate\Http\Response
	 */
	public function show(Task $task)
	{
		return view('tasks.view-task', compact('task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Task  $task
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Task $task)
	{
		return view('tasks.edit-task', compact('task'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Task  $task
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Task $task)
	{
		// Validate the incoming request
		$validated = $request->validate([
			'title'       => 'required|string|max:255',
			'description' => 'required|string',
			'status'      => 'required|string',
			'priority'    => 'required|string',
		]);

		// Create the task
		$task->update($validated);

		return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Task  $task
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Task $task)
	{
		$task->delete();

		return redirect()->route('tasks.index')->with('success', 'Task delete Succesfully.');
	}
}
