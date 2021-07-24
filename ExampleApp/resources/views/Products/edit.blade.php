@extends('layout.Master')
@section('title','Add New Product')
@section('mainContent')



    <h1 class="h1 text-center">Edit Product</h1>
    <form action="{{ route('addNewProduct.update', ["newTable"=>$NewTable->id]) }}" method="post" class="mx-auto w-50" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include("Products.fields")

    </form>

@endsection
