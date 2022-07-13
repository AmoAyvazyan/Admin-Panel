@extends('layouts.admin_layout')

@section('title', 'Show post')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Show post: {{ $post['title'] }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-6">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action=" {{route('post.index')}} " >
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" value="{{ $post['title'] }}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter post title" required>
                            </div>
                            <div class="form-group">
                                <label>Post</label>
                                <textarea name="post" class="form-control" rows="3" placeholder="{{ $post['post'] }}"></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Back</button>
                        </div>
                    </form>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
