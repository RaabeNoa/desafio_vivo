<?php


namespace App\Repositories;


use Illuminate\Support\Facades\DB;

class KnowledgeApplicationRepository
{
    public function chooseEmails($request)
    {
        DB::transaction(function () use ($request) {
            //switch ($request->grade){
                /* TODO: Verificar array $request->grades e retornar quais emails devem ser enviados  */
           // }
        });
    }
}
