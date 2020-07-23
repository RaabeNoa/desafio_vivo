<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationFormRequest;
use App\Http\Requests\KnowledgeFormRequest;
use App\Models\Application;
use App\Models\Knowledge;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $application = Application::query()
            ->orderBy('name')
            ->get();
        $message = $request->session()->get('message');
        return view('application.index', compact('application', 'message'));
    }

    public function create()
    {
        $knowledge = Knowledge::all();
        return view('application.create', compact('knowledge'));
    }

    public function store(ApplicationFormRequest $request)
    {
        Application::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $request->session()
            ->flash(
                'message',
                "Aplicação enviada com sucesso!");

        return redirect()->route('home');
    }
}
