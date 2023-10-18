@extends('layouts.master')

@section('article', 'nav-link active')
@section('title','Create-Article')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Articles Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <a href="{{route('admin.articles.index')}}" class="btn btn-success float-right">Back</a>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <form method="POST" action="{{route('admin.articles.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group mb-3">
                        <label for="body">Description</label>
                        <textarea class="form-control" name="body" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Featured Image</label><br>
                        <input type="file" name="featured_image">
                   </div>
                    <div class="form-group">
                        <label for="" class="form-label">Content Image</label><br>
                        <input type="file" name="image[]" multiple accept="image/*" onchange="checkFileCount(this)">
                   </div>
                    <br><br>
 
                    <button type="submit" id="saveButton" class="btn btn-success">Save Article</button>

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

