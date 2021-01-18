@extends('main')

@section('content')
    <div class="col-md-12">
        <h3>Jornalistas</h3>
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($jornalistas as $row)
                <tr>
                    <td>{{$row['nome']}}</td>
                    <td>{{$row['sobrenome']}}</td>
                    <td>{{$row['email']}}</td>
                    <td>{{$row['senha']}}</td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{route('api.create')}}" class="btn
        btn-primary">Adicionar novo Jornalista</a>
        </div>
    </div>

@endsection
