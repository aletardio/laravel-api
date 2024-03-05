<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        // $projects = Project::paginate(6); Recupero i projects suddivisi per pagina, in questo caso suddive i projects in 6 per pagina

        // Recupero i projects con i dati relativi alla tipologia di appartenenza e le tecnologie
        $projects = Project::with(['type', 'technologies'])->orderBy('id', 'desc')->paginate(6);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show($slug)
    {
        $project = Project::with('type', 'technologies')->where('slug', $slug)->first();

        if ($project) {
            return response()->json([
                'success' => true,
                'project' => $project
            ]);
        }

        return response()->json([
            'success' => false,
            'error' => 'Progetto non trovato'
        ]);
    }
}
