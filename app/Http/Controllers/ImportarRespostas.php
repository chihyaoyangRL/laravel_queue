<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Jobs;

use App\Jobs\Imp;


class ImportarRespostas extends Controller
{
    public function importacao(Request $request)
    {
        return view('import_res.step')->with('edital', $request->edital);
    }



    public function importacaoAAAAA(Request $request)
    {


        $data = array();
        $data['edital'] = $request->edital;
        $data['text'] = $request->textD;

        $job = new Imp($data);
        // $job = (new Imp($data))->delay(60);
        dispatch($job);



        // php artisan queue:work


        return view('import_res.step')->with('edital', $request->edital);

        // $data = array();

        // for ($i = 1; $i <= 1000; $i++) {
        //     $data['edital'] = $request->edital;
        //     $data['text'] = $request->textD;
        //     Jobs::create($data);
        // }






    }


    // public function sendTestEmails()
    // {
    //     $emailJobs = new Imp();
    //     $this->dispatch($emailJobs);
    // }
}
