@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">   {{ __('messages.users.page.edit') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('users.update',['id'=>$user->id])}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.users.page.index.tabname') }}</label>
                                <input type="text"
                                       class="form-control"
                                       value="{{$user->name}}"
                                       required name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('messages.users.page.index.tabemail') }}</label>
                                <input type="email"
                                       value="{{$user->email}}"
                                       class="form-control" required name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{ __('messages.users.page.index.tabrole') }}</label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="role">
                                    <option value="admindb"
                                        @if($user->role=='admindb')
                                            selected
                                        @endif
                                    >{{ __('messages.users.role.admindb') }}</option>
                                    <option value="admin"
                                        @if($user->role=='admin')
                                            selected
                                        @endif
                                    >{{ __('messages.users.role.admin') }}</option>
                                    <option value="oper"
                                        @if($user->role=='oper')
                                            selected
                                        @endif
                                    >{{ __('messages.users.role.oper') }}</option>
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
