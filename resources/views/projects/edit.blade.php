@extends('projects.layout')

@section('content')

    <h1>Edit Project</h1>


    <form method="POST" action="/projects/{{ $project->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="field">
                <input type="text" class="input" name="title" placeholder="TITLE" value="{{ $project->title }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="field">
                <textarea name="description" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Update Project</button>
            </div>
        </div>

    </form>

    <form method="POST" action="/projects/{{ $project->id }}">

        {{ method_field('DELETE')}}
        {{ csrf_field() }}

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>

    </form>

@endsection