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

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('grass.index') }}">{{ __('messages.allgr') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$datagr->name}}</li>
                        </ol>
                    </nav>
                <div class="card">
                    <div class="card-header">   {{ __('messages.ass.page.index') }}</div>

                    <div class="card-body">

                        <a class="btn btn-success" href="{{ route('ass.add',['idgroup'=>$idgroup]) }}" role="button">
                            {{ __('messages.add') }}
                        </a><br><br>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">{{ __('messages.ass.page.index.tabbar') }}</th>
                                <th scope="col">{{ __('messages.ass.page.index.tabname') }}</th>
                                <th scope="col">{{ __('messages.users.page.index.tabevent') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                    <tr>
                                        <td>
                                            {{$data->id}}
                                        </td>
                                        <td>
                                            {{$data->barcode}}
                                        </td>
                                        <td>
                                            {{$data->name}}
                                        </td>
                                        <td>
                                            <a class="btn btn-secondary" href="{{ route('ass.edit',['id'=>$data->id ]) }}" role="button">
                                                {{ __('messages.edit') }}
                                            </a>
                                            <a class="btn btn-danger" href="{{ route('ass.delete',['id'=>$data->id ]) }}" role="button">
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
