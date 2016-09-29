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

    <script src="https://cdn.auth0.com/js/lock/10.2/lock.min.js"></script>
    <script>
        var lock = new Auth0Lock('{{ env('AUTH0_CLIENT_ID') }}', '{{ env('AUTH0_DOMAIN') }}', {
            container: 'login',
            auth: {
                redirectUrl: 'https://auth0-laravel.dev/auth0/callback',
                responseType: 'code',
                params: {
                    scope: 'openid email' // Learn about scopes: https://auth0.com/docs/scopes
                }
            },
            language: 'pt-BR',
            theme: {
                labeledSubmitButton: true,
                logo: 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2a/Major_League_Baseball.svg/1280px-Major_League_Baseball.svg.png',
                primaryColor: '#0B1A57'
            },
            languageDictionary: {
                title: 'Auth0 Laravel App'
            }
        });

        lock.show();
    </script>

@endsection
