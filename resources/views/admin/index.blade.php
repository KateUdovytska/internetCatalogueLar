@extends('layouts.default')
@section('content')




    <form action="{{ route('admin.products.create') }}" method="post" class="form-horizontal">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-info">
                    <i class="fa fa-plus"></i> @lang('messages.newProduct')
                </button>
            </div>
        </div>
    </form>

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
                        <th class="text-center">@lang('messages.delete')</th>
                        <th class="text-center">@lang('messages.edit')</th>
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
                            <td>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Удалить
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('admin.products.edit', $product->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('GET') }}
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-pencil" aria-hidden="true"> Редактировать</i>
                                    </button>
                                </form>
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