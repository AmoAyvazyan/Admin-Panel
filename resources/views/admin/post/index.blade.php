@extends('layouts.admin_layout')

@section('title', 'All post')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><strong>All post</strong></h1>
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
                                            Title
                                        </th>
                                        <th style="width: 49%">
                                            Post
                                        </th>
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
                                    @foreach($posts as $post)
                                    <tr>
                                        <td> {{$post['id']}} </td>
                                        <td> {{$post['title']}} </td>
                                        <td> {{$post['post']}} </td>
                                        <td> {{$post['created_at']}} </td>
                                        <td> {{$post['updated_at']}} </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="{{route('post.show',$post['id'])}}">
                                                <i class="fas fa-folder"></i>
                                                View
                                            </a>
                                            @hasanyrole('super')
                                            <a class="btn btn-info btn-sm" href="{{route('post.edit',$post['id'])}}">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                            </a>
                                            @endrole
                                            @hasanyrole('super')
                                            <form method="POST" action="{{route('post.destroy',$post['id'])}}" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                 <button type="submit" class="btn btn-danger btn-sm delete-btn" >
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                 </button>
                                            </form>
                                            @endrole
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </section>
                <!-- /.content -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
