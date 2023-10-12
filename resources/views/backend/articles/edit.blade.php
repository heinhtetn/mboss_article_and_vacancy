@extends('layouts.master')

@section('article', 'nav-link active')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Articles Edit Page</h1>
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
                <form method="POST" action="{{route('articles.update', $article->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{old('title', $article->title)}}" placeholder="Title">
                    </div>
                    <div class="form-group mb-3">
                        <label for="body">Description</label>
                        <textarea class="form-control" name="body" cols="30" rows="10">{{old('body', $article->body)}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Featured Image</label><br>
                        <img src="{{url('featured/' . $article->featured_image)}}" style="width: 150px; height: 100px" alt=""><br><br>
                        <input type="file" name="featured_image">
                   </div>
                    <div class="form-group">
                        <label for="" class="form-label">Content Image</label><br>
                        @for($i = 0; $i < count($image); $i++)
                            <img style="width: 150px; height: 100px;" src="{{url('uploads/' . $image[$i])}}" alt="">
                        @endfor

{{--                        <img style="width: 150px; height: 100px;" src="{{url('uploads/' . $image[1])}}" alt="">--}}
                        <br><br>
                        <input type="file" name="image[]" multiple accept="image/*" onchange="checkFileCount(this)">
                   </div>

                    <button type="submit" id="saveButton" class="btn btn-success mt-3">Update Article</button>

                </form>

                <p id="message"></p>
            </div>
        </div>
        <!-- /.content -->
    </div>


@endsection

@section('script')
    <script>

        function checkFileCount(input) {
            var maxFiles = 2;
            var fileCount = input.files.length;
            var fileCountMessage = document.getElementById('message');
            var button = document.getElementById('saveButton');

            if (fileCount > maxFiles) {

                fileCountMessage.textContent = 'You can only upload up to ' + maxFiles + ' files.';
                button.disabled = true; // Disable the submit button

            } else {

                fileCountMessage.textContent = '';
                button.disabled = false; // Enable the submit button

            }
        }
    </script>
@endsection

