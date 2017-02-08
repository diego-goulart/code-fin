@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h4>Listagem de Bancos</h4>
            <a href="{{route('admin.banks.create')}}" class="btn waves-effect">Novo banco</a>
            <table class="bordered striped highlight responsive-table centered z-depth-5">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($banks as $bank)
                    <tr>
                        <td>{{ $bank->id }}</td>
                        <td>{{ $bank->name }}</td>
                        <td width="25%">
                            <a href="{{route('admin.banks.edit', ['bank' => $bank->id])}}" class="btn btn-sm waves-effect left">Editar</a>
                            {!! Form::open(['route' => ['admin.banks.destroy', 'bank' => $bank->id], 'method' => 'DELETE']) !!}
                                {!! Form::submit('Excluir', ['class' => 'btn waves-effect']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$banks->links()}}
        </div>
    </div>
@endsection