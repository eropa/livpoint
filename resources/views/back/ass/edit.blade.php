@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('grass.index') }}">{{ __('messages.allgr') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ass.index',['id'=>$data->grass->id]) }}">{{$data->grass->name}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('messages.editgoods') }}</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-header">   {{ __('messages.ass.page.add') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('ass.update',['id'=>$data->id])}}">

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.ass.page.index.tabname') }}</label>
                                <input type="text" class="form-control"
                                       required
                                       value="{{$data->name}}"
                                       name="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.ass.page.index.tabbar') }}</label>
                                <input type="text"
                                       class="form-control"
                                       required
                                       value="{{$data->barcode}}"
                                       name="barcode">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.ass.page.index.tabcountbox') }}</label>
                                <input type="number"
                                       class="form-control"
                                       required
                                       name="countbox"
                                       step="0.001"
                                       value="{{$data->countbox}}"
                                       value="0.000">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">{{ __('messages.ass.page.index.tabgroup') }}</label>
                                <select class="form-control" name="grass_id">
                                    @foreach($datagr as $item)
                                        <option value="{{$item->id}}"
                                        @if($item->id==$data->grass_id)
                                            selected
                                        @endif
                                        >{{ $item->name }}</option>
                                    @endforeach
                                </select>
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
