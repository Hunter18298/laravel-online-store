@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        @foreach ($viewData['products'] as $product)
            @if ($product->getStatus() == 1)
                <div class="col-md-4 clo-lg3 mb-2">
                    <div class="card">
                        <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top img-card">
                        <div class="card-body text-center">
                            <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                                class="btn bg-primary text-white">{{ $product->getName() }}</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

@endsection
