@extends('layout.Master')
@section('title','Add New Product')
@section('mainContent')
@csrf
@method("post")
Card Template
<table class="table">
    <thead>
    <tr>
        <th scope="col">#Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
    </tr>
    </thead>
    <tbody>
{{--    @foreach($NewTable as $newTable)--}}
        <tr>
            <th scope="row">{{$NewTable->id}}</th>
            <td>{{$NewTable->name}}</td>
            <td>{{$NewTable->email}}</td>
            <td>{{$NewTable->phone}}</td>
            <td><img src="{{  asset('storage/'.$NewTable->image) }}" alt="" class="img-thumbnail"></td>

        </tr>
{{--    @endforeach--}}
    </tbody>
</table>
@endsection
