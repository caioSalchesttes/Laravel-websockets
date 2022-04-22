<?php

namespace App\Http\Controllers;

use App\Events\SendMessage;
use App\Models\Mensagens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MensagemController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        $sessao = Session::getId();
        $mensagens = Mensagens::all();

        return [
          'sessao' => $sessao,
          'mensagens' => $mensagens->toArray()
        ];
    }

    public function send(Request $request)
    {
        Mensagens::create([
            'name' => 'TESt',
            'session_id' => $request->sessao,
            'mensagem' => $request->message
        ]);

        event(new SendMessage($request->message));
    }
}
