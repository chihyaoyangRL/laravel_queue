<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Jobs;



class Imp implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;



    // passar variavel
    public $edital;

    public $msg;




    /**
     * Create a new job instance.
     *
     * @return void
     */
    // $data = array();
    public function __construct($data)
    {

        $this->edital = $data['edital'];
        $this->msg = $data['text'];



        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $data['edital'] = $this->edital;
        $data['text'] = $this->msg;
        Jobs::create($data);
        
    }
}
