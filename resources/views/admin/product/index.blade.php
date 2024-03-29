@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Create Products
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alerty alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>

            @endif
            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-3 col-md-6 col-sm-12 col-form-label"> Name:</label>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-controll">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-3 col-md-6 col-sm-12 col-form-label"> Price:</label>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <input type="number" name="price" value="{{ old('price') }}" class="form-controll">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input class="form-control" type="file" name="image">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-3 col-md-6 col-sm-12 col-form-label"> Brand:</label>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <input type="number" name="status" value="{{ old('status') }}" class="form-controll">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-3 col-md-6 col-sm-12 col-form-label"> Description:</label>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <textarea name="description" cols="20" rows="3" class="form-controll">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Manage Products
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.product.edit', ['id' => $product->getId()]) }}">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.product.delete', $product->getId()) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
