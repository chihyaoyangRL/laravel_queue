<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\TesteModel;



class Teste implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // Parâmetro
    public $titulo;
    public $mensagem;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    // $data = array();
    public function __construct($data)
    {

        $this->titulo = $data['titulo'];
        $this->mensagem = $data['mensagem'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $data['titulo'] = $this->titulo;
        $data['mensagem'] = $this->mensagem;
        TesteModel::create($data);
    }
}
