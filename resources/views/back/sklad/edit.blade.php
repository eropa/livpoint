@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">   {{ __('messages.sklad.page.edit') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('sklads.update',['id'=>$data->id])}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.sklad.page.index.tabname') }}</label>
                                <input type="text"
                                       class="form-control"
                                       required
                                       value="{{$data->name}}"
                                       name="name">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('messages.edit') }}</button>
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
