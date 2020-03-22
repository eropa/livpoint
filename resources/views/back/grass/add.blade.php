@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">   {{ __('messages.grass.page.add') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('grass.store')}}">

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.ass.page.index.tabname') }}</label>
                                <input type="text" class="form-control" required name="name">
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox"
                                       class="form-check-input"
                                       name="visible"
                                       checked>
                                <label class="form-check-label">Видимость в расходе</label>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('messages.add') }}</button>

                            @csrf

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
