@extends('layouts.logged')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="alert alert-dark" role="alert">
                {{ $post->description }}
            </div>

            <h1> Comentários </h1>

        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-left">Comentário</th>
                <th class="text-left">Usuário</th>
            </tr>
        </thead>
        <tbody>

        @forelse($post->comments as $comment)
            <tr>
                <td class="text-center">{{ $comment->id }}</td>
                <td class="text-left">{{ $comment->comment }}</td>
                <td class="text-left">{{ $comment->user->name }}</td>
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="3">Nenhum comentário encontrado</td>
            </tr>
        @endforelse

        </tbody>
    </table>

    {!! Form::open(['route' => 'comments.store', 'method' => 'post']) !!}

        {!! Form::hidden('post_id', $post->id) !!}

        {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}

        <button class="btn btn-success float-right">
            <i class="fas fa-save"></i> Salvar
        </button>

    {!! Form::close() !!}



@endsection
