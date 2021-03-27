@extends('layout.mainlayout')
@section('content')

<div class="container">

    <div class="title">
        <h3 class="product-title">{{ $product->product_name }}</h3>
    </div>

        @if(str_contains($product->product_img, 'https'))
        <img src="{{ $product->product_img }}" class="img-fluid"/>
        @elseif((!empty($product->product_img)))
            <img src="/storage/uploads/{{ $product->product_img }}" class="img-fluid"/>
        @else 
        
        @endif
 

    <div class="product-desc">
        <p>{{ $product->product_desc }}</p>
    </div>


    <div>
        <p>Hind {{ $product->product_price }}</p>
    </div>

</div>
@endsection



