<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            // Se l'utente è autenticato, reindirizza alla dashboard dell'amministratore
            $projects = Project::all();
            return view('admin.index', compact('projects'));
        } else {
            // Altrimenti, reindirizza alla pagina degli elenchi dei progetti per gli ospiti
            $projects = Project::all();
            return view('index', compact('projects'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //Validiamo la richiesta e otteniamo i dati validati
        $validatedData = $request->validated();

        //Creiamo un nuovo Progetto con i dati validati
        $newProject = new Project();
        $newProject->fill($validatedData);

        $newProject->save();


        //Reindirizziamo alla pagina dei Progetti
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        $request->validated();

        $project->fill($request->all());

        $project->save();
        
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.index');
    }
}
