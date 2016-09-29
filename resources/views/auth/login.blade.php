@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body" id="login">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest patch release (recommended for production) -->
    <script src="https://cdn.auth0.com/js/lock-passwordless-2.2.3.min.js"></script>
    <script>
//        var lock = new Auth0Lock('{{ env('AUTH0_CLIENT_ID') }}', '{{ env('AUTH0_DOMAIN') }}',
//          );

        var lock = new Auth0LockPasswordless('{{ env('AUTH0_CLIENT_ID') }}', '{{ env('AUTH0_DOMAIN') }}');
        lock.emailcode({
            container: 'login',
            labeledSubmitButton: true,
            icon: 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2a/Major_League_Baseball.svg/1280px-Major_League_Baseball.svg.png',
            primaryColor: '#0B1A57',
            dict: {
                title: 'Auth0 Laravel App',
                welcome: 'Seja bem vindo, {name}!',
                email: {
                    emailInputPlaceholder: 'exemplo@exemplo.com',
                    footerText: 'Produzido por JP7',
                    headerText: 'Digite seu e-mail'
                },
                confirmation: {
                    success: 'Obrigado por se cadastrar.',
                    failure: 'Não foi possível cadastrar seu usuário, favor entrar em contato com um administrador.'
                },
                code: {
                    codeInputPlaceholder: 'Seu código',
                    footerText: '',
                    headerText: 'A senha foi enviada para sua caixa de e-mail ({email}).'
                }
            },
            authParams: {
                callbackURL: '{{ env('APP_URL') }}/auth0/callback',
                responseType: 'code'
            }
        });
    </script>

@endsection
