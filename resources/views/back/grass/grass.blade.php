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
                                <th scope="col">{{ __('messages.users.page.index.tabevent') }}</th>
                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
