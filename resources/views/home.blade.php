@extends('layouts.app')

@section('topolino')
    @foreach ($pippi as $pippo)
        <div class="card">
            <div class="title">
                <h1>{{$pippo['title']}}</h1>
            </div>
            <p>uscito: {{$pippo['date']}}</p>
        </div>
    @endforeach
@endsection
{{-- @dump($pippo); --}}


