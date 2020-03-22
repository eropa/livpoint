@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">   {{ __('messages.grass.page.index') }}</div>

                    <div class="card-body">

                        <a class="btn btn-success" href="{{ route('grass.add') }}" role="button">
                            {{ __('messages.add') }}
                        </a><br><br>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">{{ __('messages.grass.page.index.tabname') }}</th>
                                <th scope="col">{{ __('messages.grass.page.index.tabvis') }}</th>
                                <th scope="col">{{ __('messages.users.page.index.tabevent') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td>
                                        {{ $data->id }}
                                    </td>
                                    <td>
                                        <a href="{{ route('ass.index',['id'=>$data->id]) }}">
                                            {{ $data->name }}
                                        </a>

                                    </td>
                                    <td>
                                        @if($data->visible)
                                            {{ __('messages.yes') }}
                                        @else
                                            {{ __('messages.no') }}
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-secondary" href="{{ route('grass.edit',['id'=>$data->id ]) }}" role="button">
                                            {{ __('messages.edit') }}
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('grass.delete',['id'=>$data->id ]) }}" role="button">
                                            {{ __('messages.delete') }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
