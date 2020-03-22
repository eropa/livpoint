@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">   {{ __('messages.users.page.add') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('users.store')}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.users.page.index.tabname') }}</label>
                                <input type="text" class="form-control" required name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.users.page.index.tabemail') }}</label>
                                <input type="email" class="form-control" required name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" required name="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{ __('messages.users.page.index.tabrole') }}</label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="role">
                                    <option value="" selected>........</option>
                                    <option value="admindb">{{ __('messages.users.role.admindb') }}</option>
                                    <option value="admin">{{ __('messages.users.role.admin') }}</option>
                                    <option value="oper">{{ __('messages.users.role.oper') }}</option>
                                </select>
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
