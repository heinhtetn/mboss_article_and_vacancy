@extends('layouts.master')

@section('article', 'nav-link active')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Article Details</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <a href="{{route('articles.index')}}" class="btn btn-success float-right">Back</a>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card mb-4" style="max-width: 1200px; margin: auto">
                    <div class="row">
                        <div class="col-7" style="padding: 20px 0 20px 40px">
                            <div class="d-flex justify-content-center">
                                <img style="width: 100%; height: 540px;" src="{{url('featured/' . $article->featured_image)}}" alt="">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="row p-3">
                                <div class="col mb-3">
                                    @for($i = 0; $i < count($image); $i++)
                                        <div class="d-flex justify-content-center">
                                            <img style="width: 415px; height: 265px;" src="{{url('uploads/' . $image[$i])}}" alt="">
                                        </div>
                                    @endfor
                                </div>
{{--                                <div class="col">--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                        <img style="width: 415px; height: 265px;" src="{{url('uploads/' . $image[1])}}" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 1200px; margin: auto">
                    <div class="row">
                        <div class="col-6 px-4 pt-2">
                            <h3>{{$article->title}}</h3> by Admin,  <small class="text-sm" style="font-weight: bold;">{{ $article->created_at->diffForHumans() }}</small>
                        </div>
                        <div class="col-6 px-4 pt-2">
                            <a href="{{ route('articles.edit', $article->id)}}" class="btn btn-success float-right">Edit Article</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="p-3" style="text-align: justify">
                                {{$article->body}}
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- /.content -->
    </div>


@endsection
