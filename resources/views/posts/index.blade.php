@extends('layouts.logged')

@section('content')

    <table class="table table-striped">
        <thead>
            <th class="text-center" width="100px">ID</th>
            <th class="text-left">Descrição</th>
            <th class="text-left" width="200px">Autor</th>
            <th class="text-center">Comentários</th>
            <th class="text-center" width="130px">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Novo
                </a>
            </th>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td class="text-center">{{ $post->id }}</td>
                    <td class="text-left">{{ $post->description }}</td>
                    <td class="text-left">{{ $post->user->name }}</td>
                    <td class="text-center">{{ count($post->comments) }}</td>
                    <td class="text-center">

                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                            <div class="input-group">
                                <a class="btn btn-sm btn-success" href="{{ route('posts.show', $post->id) }}">
                                    <i class="far fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-primary" href="{{ route('posts.edit', $post->id) }}">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button class="btn btn-sm btn-danger" type="submit">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="4">
                        Nenhum registro encontrado!
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {!! $posts->render() !!}

@endsection
