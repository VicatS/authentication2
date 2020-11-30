@extends('layouts.app')

@section('content')
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Welcome {{ auth()->user()->name }}</h5>
                <hr>
                <div class="card-footer">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger btn-sm btn-block">Cerrar sesion</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
