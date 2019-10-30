<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class TrabajaConNosotros extends Mailable
{
    use Queueable, SerializesModels;

    public $consulta;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->consulta = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    
 public function build()
    {
        if(isset($this->consulta->file)){
        
            return $this
                    ->subject('Argenpesos - TRABAJA CON NOSOTROS - HAZ RECIBIDO UNA SOLICITUD DE TRABAJO')
                    ->attach($this->consulta->file, 
                         [
                        'as' => $this->consulta->file->getClientOriginalName(),
                        'mime' => $this->consulta->file->getClientMimeType(),
                    ])
                    ->view('mails.trabajaConNosotros');

        }else if(isset($this->consulta->file2)){

            return $this
                    ->subject('Argenpesos - TRABAJA CON NOSOTROS - HAZ RECIBIDO UNA SOLICITUD DE TRABAJO')
                    ->attach($this->consulta->file2, 
                         [
                        'as' => $this->consulta->file2->getClientOriginalName(),
                        'mime' => $this->consulta->file2->getClientMimeType(),
                    ])
                    ->view('mails.trabajaConNosotros');
                    
        }//if

    }//function
}