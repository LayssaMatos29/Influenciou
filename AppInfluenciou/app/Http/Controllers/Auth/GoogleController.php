<?php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\Jobs\CreateUser;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            //Faz a requisição ao google do usuário
            $user = Socialite::driver('google')->user();

            //Verifica se já tem email cadastrado
            $findUser = User::where('google_id', $user->id)->orWhere('email', $user->email)->first();
            if ($findUser) {
                //Salva o id do google
                $findUser->google_id = $user->id;
                $findUser->save();
                //Autentica
                Auth::login($findUser);
                //Redireciona
                return $this->redirecTo();
            } else {
                //Gera uma senha aleatória
                $senha = mt_rand();

                //Cria um novo usuário
                $novoUsuario = new User();
                $novoUsuario->name = $user->name;
                $novoUsuario->email = $user->email;
                $novoUsuario->google_id = $user->id;
                $novoUsuario->password = Hash::make($senha, ['cost' => 12]);
                $novoUsuario->save();
                
                //dispara um trabalho de enviar notificação ao novo usuário
                CreateUser::dispatch($novoUsuario, $senha);

                //Autentica o novo usuário
                Auth::login($novoUsuario);

                //Retorno para o dashboard de acordo com o cargo
                return $this->redirecTo();
            }
        } catch (Exception $e) {
            //Exceção de erro
            throw new Exception('Falha na autenticação com o google.');
        }
    }

    public function redirecTo()
    {
        switch (Auth::user()->roles[0]->name) {
            case 'admin':
                    return redirect()->route('dashboard.admin.index');
                break;
            
            case 'aluno':
                    return redirect()->route('dashboard.aluno.index');
                break;

            case 'instrutor':
                    return redirect()->route('dashboard.instrutor.index');
                break;

            default:
                Auth::logout();
                return redirect()->route('login');
        }
    }
}
