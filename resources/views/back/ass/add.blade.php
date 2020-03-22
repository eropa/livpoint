@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('grass.index') }}">{{ __('messages.allgr') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ass.index',['id'=>$datagr->id]) }}">{{$datagr->name}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('messages.add') }}</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-header">   {{ __('messages.ass.page.add') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('ass.store')}}">

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.ass.page.index.tabname') }}</label>
                                <input type="text" class="form-control"
                                       required
                                       name="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.ass.page.index.tabbar') }}</label>
                                <input type="text"
                                       class="form-control"
                                       required
                                       name="barcode">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.ass.page.index.tabcountbox') }}</label>
                                <input type="number"
                                       class="form-control"
                                       required
                                       name="countbox"
                                       step="0.001"
                                       value="0.000">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.ass.page.index.tabgroup') }}</label>
                                <input type="text" class="form-control" value="{{$datagr->name}}" readonly required >
                                <input type="hidden" name="grass_id" value="{{$idgroup}}">
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
