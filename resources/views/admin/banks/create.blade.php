@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h4>Cadastrar Banco</h4>
            {!! Form::open(['route' => 'admin.banks.store']) !!}

            @include('admin.banks._form')

            <div class="row">
                {!! Form::submit('Criar banco', ['class' =>'btn waves-effect']) !!}
                <a href="{{route('admin.banks.index')}}" class="btn waves-effect">Voltar</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection