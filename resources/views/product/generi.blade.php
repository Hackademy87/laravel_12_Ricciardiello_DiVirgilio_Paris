<x-layout>
    <h1>{{$products->first()->gender->name}}</h1>
@foreach($products as $product)
<x-card :product=$product></x-card>
@endforeach

</x-layout>