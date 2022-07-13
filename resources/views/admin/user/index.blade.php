@extends('layouts.admin_layout')

@section('title', 'All user')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><strong>All user</strong></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">
                                    #
                                </th>
                                <th style="width: 10%">
                                    Name
                                </th>
                                <th style="width: 34%">
                                    Email
                                </th>
                                {{--                                <th style="width: 15%">--}}
                                {{--                                    Role--}}
                                {{--                                </th>--}}
                                <th style="width: 10%" class="text-center">
                                    Created_at
                                </th>
                                <th style="width: 10%" class="text-center">
                                    updated_at
                                </th>
                                <th style="width: 20%">

                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td> {{$user['id']}} </td>
                                    <td> {{$user['name']}} </td>
                                    <td> {{$user['email']}} </td>
                                    {{--                                    <td>--}}
                                    {{--                                        @foreach($user->$roles as $role)--}}
                                    {{--                                        {{$role->name}}--}}
                                    {{--                                        @endforeach( )--}}
                                    {{--                                    </td>--}}
                                    <td> {{$user['created_at']}} </td>
                                    <td> {{$user['updated_at']}} </td>
                                    <td class="project-actions text-right">
                                        @can('delete user')
                                            @if($user->hasRole('user'))
                                                <form method="POST" action="{{route('user.destroy',$user->id)}}"
                                                      style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                        <i class="fas fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            @endif
                                        @endcan
                                        @can('delete admin')

                                            @if($user->hasRole('admin'))
                                                <form method="POST" action="{{route('user.destroy',$user->id)}}"
                                                      style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                        <i class="fas fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            @endif
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div>
                    @hasanyrole('super|admin')
                    <a class="btn btn-info btn-sm" style="width: 20%; float: right" href="{{route('user.create')}}">
                        <i class="fas fa-pencil-alt"></i>
                        Add
                    </a>
                    @endrole
                </div>
            </section>
            <!-- /.content -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
