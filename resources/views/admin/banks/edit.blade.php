@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h4>Editar Banco</h4>
            {!! Form::model($bank, [
                'route' => ['admin.banks.update', 'bank' => $bank->id],
                'method' => 'PUT'
            ]) !!}

            @include('admin.banks._form')

            <div class="row">
                {!! Form::submit('Salvar alterações', ['class' =>'btn waves-effect']) !!}
                <a href="{{route('admin.banks.index')}}" class="btn waves-effect">Voltar</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection