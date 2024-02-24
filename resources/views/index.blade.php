@extends('layouts.app')

@section('content')
    <h1>Test</h1>


    @php
        $garden = \App\Models\Garden::find(1);
    @endphp

    <form method="post" action="{{route('garden.update', $garden->id)}}">
        @csrf
        @method('PUT')

        <input type="text" name="number" value="{{$garden->number}}">

        @foreach($features as $feature)
            <label for="feature_{{$feature->id}}">
                <input
                    type="checkbox"
                    value="{{$feature->id}}"
                    name="features[]"
                    id="feature_{{$feature->id}}"
                    @if($garden->features->contains($feature)) checked @endif
                >
                {{$feature->name}}
            </label>
        @endforeach

        <button type="submit">save</button>

    </form>

@endsection
