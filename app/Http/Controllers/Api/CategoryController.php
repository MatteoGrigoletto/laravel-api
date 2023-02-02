<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class CategoryController extends Controller
{
    public function index()
    {
    $projects = Project::all();
    return $projects;
    
    }
    public function show($slug){
    $project = Project::where('slug', $slug)->first();
    return $project;
    }
}

