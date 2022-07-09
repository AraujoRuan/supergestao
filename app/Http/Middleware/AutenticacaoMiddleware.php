<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao, $perfil)
    {
        //verificar se o nusuario possui acesso a rota
        echo $metodo_autenticacao.'-'.$perfil.'<br>';

        if($metodo_autenticacao == 'padrao'){
            echo'verificar o usuário e senha no banco de dados'.$perfil.'<br>';
        }

        if($metodo_autenticacao == 'ldap'){
            echo'verificar o usuário e senha no AD'.$perfil.'<br>';
        }

        if($perfil== 'visitante'){
            echo'Exibir apenas alguns recursos';
        }else{
             echo 'carregar o perfil do banco de dados';
        }


        if(false){
            return $next($request);
        }else{
            return Response('Acesso negado! Rota exige autenticação!!');
        }
        
    }
}
