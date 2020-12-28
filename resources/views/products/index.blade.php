@extends('welcome')
@section('content')


    <!-- Текущие продукты -->
    @if (count($products) > 0)
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h2>@lang('messages.catalogue')</h2>
            </div>
            <div class="panel-body">
                <table class="table productTable table-bordered text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th class="text-center">@lang('messages.product')</th>
                        <th class="text-center">@lang('messages.description')</th>
                        <th class="text-center">@lang('messages.price')</th>
                        <th class="text-center">@lang('messages.producer')</th>
                    </tr>
                    </thead>
                    <tbody class="table-hover">
                    @foreach ($products as $product)
                        <tr>
                            <td class="table-text">
                                <div>{{ $product->name }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $product->description }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $product->price }}</div>
                            </td>
                            <td class="table-text">
                                <div><a href="{{ $product->producer->web_site }}" target="_blank">
                                        {{ $product->producer->name }}
                                    </a></div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">{{ $products->links() }}</div>
        </div>
    @endif
@endsection