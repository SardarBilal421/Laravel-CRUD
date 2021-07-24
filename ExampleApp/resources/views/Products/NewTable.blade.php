@extends('layout.Master')
@section('title',"View Products")
@section('mainContent')



    <button class="btn btn-primary my-3 bg-white" ><a href="{{route('product.create')}}">Add New Project</a></button>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($NewTable as $newTable)
        <tr>
            <th scope="row">{{$newTable->id}}</th>
            <td>{{$newTable->name}}</td>
            <td>{{$newTable->email}}</td>
            <td>{{$newTable->phone}}</td>
            <td><img src="{{  asset('storage/'.$newTable->image) }}" alt="" class="img-thumbnail"></td>
            <td>
                <form action="{{  route( 'deleteProduct.delete',['newTable'=>$newTable->id] )  }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="btn btn-danger" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </div>
                </form>

                <a href="{{ route('addNewProduct.update', ["newTable"=>$newTable->id]) }}" class="btn btn-secondary m-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </a>
                <a href="{{ route('products.show', ["newTable"=>$newTable->id]) }}" class="btn btn-secondary m-2">
                   CLick
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
