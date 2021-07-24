@extends('layout.Master')
@section('title','Add New Product')
@section('mainContent')



    <h1 class="h1 text-center">Add New Product</h1>
    <form action="{{ route('addNewProduct.store') }}" method="post" class="mx-auto w-50" enctype="multipart/form-data">
        @csrf
        @include("Products.fields")

    </form>

@endsection
