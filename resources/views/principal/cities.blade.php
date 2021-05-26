@extends('layouts.app')
@section('pageCities', 'active')
@section('content')

    <div class="col-md-12">
        <div class="col-md-12 mt-5">

            <h1>City List</h1>

            <a href="{{route('cities.create')}}" class="btn btn-primary my-3">Create</a>

            <table class="table table-striped table-bordered table-hover" id="datatableAll">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Cod</td>
                        <td>Name</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cities as $key)
                    <tr>
                        <td>{{$key->id}}</td>
                        <td>{{$key->cod}}</td>
                        <td>{{$key->name}}</td>
                        <td><a class="btn btn-primary btn-sm" href="{{route('cities.edit', $key->id)}}">Edit</a>&emsp13;
                            <form class="d-inline" method="post" action="{{route('cities.destroy', $key->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" href="#">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
