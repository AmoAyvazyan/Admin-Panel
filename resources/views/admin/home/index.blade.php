@extends('layouts.admin_layout')

@section('title', 'Home')

@section('content')

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60"
             width="60">
    </div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="btn btn-outline-success">log Out</button>
                    </form>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $posts_count }}</h3>

                            <p>Posts</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('post.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            {{--                <div class="col-lg-3 col-6">--}}
            {{--                    <!-- small box -->--}}
            {{--                    <div class="small-box bg-success">--}}
            {{--                        <div class="inner">--}}
            {{--                            <h3>53<sup style="font-size: 20px">%</sup></h3>--}}

            {{--                            <p>Bounce Rate</p>--}}
            {{--                        </div>--}}
            {{--                        <div class="icon">--}}
            {{--                            <i class="ion ion-stats-bars"></i>--}}
            {{--                        </div>--}}
            {{--                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $users_count }}</h3>

                            <p>Users</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        @hasanyrole('super|admin')
                        <a href="{{route('user.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                        @endrole
                    </div>
                </div>
                <!-- ./col -->
            {{--                <div class="col-lg-3 col-6">--}}
            {{--                    <!-- small box -->--}}
            {{--                    <div class="small-box bg-danger">--}}
            {{--                        <div class="inner">--}}
            {{--                            <h3></h3>--}}

            {{--                            <p></p>--}}
            {{--                        </div>--}}
            {{--                        <div class="icon">--}}
            {{--                            <i class="ion ion-pie-graph"></i>--}}
            {{--                        </div>--}}
            {{--                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection
