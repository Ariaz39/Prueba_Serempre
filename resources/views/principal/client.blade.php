@extends('layouts.app')
@section('pageClient', 'active')
@section('content')

    <div class="col-md-12">
        <div class="col-md-12 mt-5">
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td>Id</td>
                    <td>Cod</td>
                    <td>Name</td>
                    <td>City</td>
                    <td>Actions</td>
                </tr>
                @foreach($client as $key)
                <tr>
                    <td>{{$key->id}}</td>
                    <td>{{$key->cod}}</td>
                    <td>{{$key->name}}</td>
                    <td>{{$key->city->name}}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{route('client.edit', $key->id)}}">Edit</a>&emsp13;
                        <form class="d-inline" method="post" action="{{route('client.destroy', $key->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" href="#">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>

@endsection
