@extends('layouts.app')
@section('content')

    <div class="col-md-12">
        <form method="post" action="{{route('client.store')}}">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Cod: </label>
                <input type="number" class="form-control" name="codClient" id="codClient" placeholder="Insert Code">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Name: </label>
                <input type="text" class="form-control" name="nameClient" id="nameClient" placeholder="Insert Name">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">City: </label>
                <select name="citiesClient" id="citiesClient" class="form-control">
                    @foreach($cities as $key)
                        <option value="{{$key->id}}">{{$key->name}}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success">Create</button>
        </form>

    </div>

@endsection
