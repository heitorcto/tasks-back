<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getAll()
    {
        return response()->json(Task::all(), 200);
    }

    public function getByid(Request $request)
    {
        return response()->json(Task::findOrFail($request->id), 200);
    }

    public function create(Request $request)
    {
        Task::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return response()->json(['message' => 'Sucesso!'], 200);
    }
}
