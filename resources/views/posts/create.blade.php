@extends('layouts.logged')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">

            {!! Form::open(['route' => 'posts.store']) !!}

                <div class="form-group">
                    <label for="description">Descrição</label>
                    {!! Form::text('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
                </div>

                <button class="btn btn-success float-right">
                    <i class="fas fa-save"></i> Salvar
                </button>

            {!! Form::close() !!}
        </div>
    </div>

@endsection
