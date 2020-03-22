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
                    <div class="card-header">   {{ __('messages.prixod') }}</div>

                    <div class="card-body">

                        <a class="btn btn-success" href="{{ route('prixod.add') }}" role="button">
                            {{ __('messages.add') }}
                        </a><br><br>
                        <hr>
                            <prixod-spisok-component></prixod-spisok-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
