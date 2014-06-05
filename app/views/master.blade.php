<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        @yield('head')
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <div class="text-right">
                    @if(Auth::check())
                        Logged in as
                        <strong>{{{Auth::user()->email}}}</strong>
                        {{link_to('logout', 'Log Out')}}
                    @else
                        {{link_to('login', 'Log In')}}
                    @endif
                </div>
                @section('header')
                    Text from the master template <br />
                @show
            </div>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-warning">
                    {{Session::get('error')}}
                </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>