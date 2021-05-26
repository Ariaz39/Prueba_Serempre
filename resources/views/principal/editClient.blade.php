@extends('layouts.app')
@section('content')

    <div class="col-md-12">
        <form method="post" action="{{route('client.update', $client->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="formGroupExampleInput">Cod: </label>
                <input type="number" class="form-control" name="codClient" id="codClient" value="{{$client->cod}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Name: </label>
                <input type="text" class="form-control" name="nameClient" id="nameClient" value="{{$client->name}}">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">City: </label>
                <select name="citiesClient" id="citiesClient" class="form-control">
                    <option value="{{$client->city->id}}">{{$client->city->name}}</option>
                </select>
            </div>

            <button class="btn btn-success">Create</button>
        </form>

    </div>

@endsection
