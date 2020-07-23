<?php

namespace App\Http\Controllers;

use App\Http\Requests\KnowledgeFormRequest;
use App\Models\Knowledge;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    public function index(Request $request)
    {
        $knowledge = Knowledge::query()
        ->orderBy('name')
        ->get();
        $message = $request->session()->get('message');
        return view('knowledge.index', compact('knowledge', 'message'));
    }

    public function create()
    {
        return view('knowledge.create');
    }

    public function store(KnowledgeFormRequest $request)
    {
        $knowledge = Knowledge::create($request->all());
        $request->session()
            ->flash(
                'message',
                "Conhecimento  {$knowledge->name} adicionado com sucesso!");

        return redirect()->route('list_knowledge');

    }

    public function destroy(Request $request)
    {
        Knowledge::destroy($request->id);

        $request->session()
            ->flash(
                'message',
                "Conhecimento removido com sucesso!");

        return redirect()->route('list_knowledge');
    }
}
