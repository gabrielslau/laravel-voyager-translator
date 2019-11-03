@extends('layouts/default')

@section('content')
    <section>
        <ul class="list-group">
            @foreach ($categories as $category)
            <li class="list-group-item">
                {{ $category->title }}
            </li>
            @endforeach
        </ul>
    </section>
@stop
