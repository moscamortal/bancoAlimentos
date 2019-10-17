<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Auth;

class AdminLoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [ 'email'    => $request->email,  
        'password' => $request->password ];

        $authOk = Auth::guard('admin')->attempt($credentials, $request->remember);

        if ($authOk) {
            // Quando um usuário tenta acessar uma página que necessita de login
            // e o Laravel redireciona direto pro login, essa página é mantida 
            // pelo framework e pode ser chamada através do método redirect()->intended()
            // Se nao houver nenhuma página requisitada anterior ao login, 
            // o Laravel redireciona para a rota passada por parâmetro
            return redirect()->intended(route('admin.dashboard'));
        }
    }

    public function index(){
        return view('auth.admin-login');
    }
}
