<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationFormRequest;
use App\Http\Requests\KnowledgeFormRequest;
use App\Jobs\SendEmail;
use App\Models\Application;
use App\Models\Knowledge;
use App\Models\KnowledgeApplication;
use App\Repositories\KnowledgeApplicationRepository;
use Carbon\Carbon;
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

        $application = Application::create([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        $knowledge = Knowledge::query()->get('id');
        foreach ($knowledge as $k){
            KnowledgeApplication::create([
                'id_application' => $application->id,
                'id_knowledge'   => $k['id'],
                'grade'          => $request->grade
            ]);
        }

        $request->session()
            ->flash(
                'message',
                "Aplicação enviada com sucesso!");

        $this->sendEmail($application, $request);
        return redirect()->route('home');
    }

    public function sendEmail($application, $request)
    {
        $repository = new KnowledgeApplicationRepository();
        $repository->chooseEmails($request);

        $details = ['email' => $application->email];
        $emailJob = (new SendEmail($details))->delay(Carbon::now()->addMinutes(5));
        dispatch($emailJob);
    }
}
