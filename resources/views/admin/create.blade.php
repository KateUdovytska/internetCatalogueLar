@extends('layouts.default')

@section('content')

{{--    @include('common.errors')--}}
    <div class="panel-heading text-center">
        <h2>@lang('messages.addPr')</h2>
    </div>
    <!-- Форма новой продукции -->
    <form action="{{ route('admin.products.store') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <!-- Имя задачи -->
        <div class="form-group">
            <label for="product" class="col-sm-3 control-label">@lang('messages.namePr')</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="product" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">@lang('messages.description')</label>
            <div class="col-sm-6">
                <textarea class="form-control" name="description" id="description" required>
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-sm-3 control-label">@lang('messages.price')</label>
            <div class="col-sm-6">
                <input type="number" name="price" id="price" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="producer" class="col-sm-3 control-label">@lang('messages.producer')</label>
            <div class="col-sm-6">
                <input type="text" name="producer" id="producer" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="producer_web" class="col-sm-3 control-label">@lang('messages.producer_web')</label>
            <div class="col-sm-6">
                <input type="text" name="web_site" id="producer_web" class="form-control" required>
            </div>
        </div>

        <!-- Кнопка добавления задачи -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> @lang('messages.addPr')
                </button>
            </div>
        </div>
    </form>
@endsection