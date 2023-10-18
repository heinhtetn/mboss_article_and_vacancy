@extends('layouts.master')

@section('article', 'nav-link active')
@section('title','Article')
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
                        <a href="{{ route('admin.articles.create') }}" class="btn btn-success float-right">Create Article</a>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Articles Table
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover" id="post">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Post Title</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


@endsection

@section('script')
    <script>
        var table = $('#post').DataTable({
            'serverSide': true,
            'processing': true,
            'ajax': {
                url: '/admin/articles/',
                error: function(xhr, testStatus, errorThrown) {

                }
            },

            "columns": [{
                    "data": "id"
                },
                {
                    "data": "title"
                },
                {
                    "data": "created_at"
                },
                {
                    "data": "action"
                }
            ]
        });


        $(document).on('click', '.deleteButton', function(a) {
            a.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: 'Do you want to delete this article?',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                confirmButtonColor: '#FF0000',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/admin/articles/' + id,
                        type: 'DELETE',
                        success: function() {
                            table.ajax.reload();
                        }
                    });

                    Swal.fire(
                        'Deleted!',
                        'Article has been deleted.',
                        'success'
                    )
                }
            })
        });
    </script>
@endsection
