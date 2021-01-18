@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3>Registro Jornalista</h3>
            <br />
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach

                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
            @endif
            <form method="post" action="{{url('api')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label>
                        <input type="text" name="nome" class="form-control"
                               placeholder="Digite seu nome" />
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="text" name="sobrenome"
                               class="form-control" placeholder="Digite seu sobrenome" />
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="text" name="email" class="form-control"
                               placeholder="Digite seu email" />
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="text" name="senha" class="form-control"
                               placeholder="Digite sua senha" />
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
@endsection
