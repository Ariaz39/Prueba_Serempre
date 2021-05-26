@extends('layouts.app')
@section('content')

    <div class="col-md-12">
        <form method="post" action="{{route('cities.update', $cities->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="formGroupExampleInput">Cod: </label>
                <input type="number" class="form-control" name="codCity" id="codCity" value="{{$cities->cod}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Name: </label>
                <input type="text" class="form-control" name="nameCity" id="nameCity" value="{{$cities->name}}">
            </div>

            <button class="btn btn-success">Create</button>
        </form>

    </div>

@endsection
