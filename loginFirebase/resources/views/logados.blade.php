@extends('app')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h1>USUARIO LOGADO</h1>
                 </div>
            </div>
        </div>
    </div>
    <button onclick="window.location='{{ route('logout') }}'">Logout</button>
</main>
@endsection
                                