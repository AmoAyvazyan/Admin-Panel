@extends('layouts.admin_layout')

@section('title', 'Create post')

@section('content')

    <!-- Content Header (Page header) -->
{{--    <div class="content-header">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row mb-2">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <h1 class="m-0">Create post</h1>--}}
{{--                </div><!-- /.col -->--}}
{{--            </div><!-- /.row -->--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </div>--}}
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6 mt-5">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create post</h3>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('user.store')}}" id="quickForm" novalidate="novalidate">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="name" name="name" class="form-control" id="exampleInputName1" placeholder="Enter name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Role</label>
                                    <select name="role" class="form-control select2 select2-hidden-accessible"  style="width: 100%;" >
                                        @hasanyrole('super')
                                        <option selected="selected" value="admin" data-select2-id="6">Admin</option>
                                        @endrole
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ asset('admin_panel/user') }}" type="button" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
{{--    <section class="content">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="card card-primary">--}}
{{--                    <!-- /.card-header -->--}}
{{--                    <!-- form start -->--}}
{{--                    <form action="{{route('post.store')}}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">Title</label>--}}
{{--                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter post title" required>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Post</label>--}}
{{--                                <textarea name="post" class="form-control" rows="3" placeholder="Enter text"></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /.card-body -->--}}

{{--                        <div class="card-footer">--}}
{{--                            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </section>--}}
    <!-- /.content -->

@endsection

