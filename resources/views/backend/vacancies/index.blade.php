@extends('layouts.master')

@section('vacancy', 'nav-link active')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Vacancies Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <a href="{{ route('vacancies.create') }}" class="btn btn-success float-right">Create Vacancy</a>
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
                                    Vacancies Table
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover" id="vacancies">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Job Title</th>
                                        <th>Job Type</th>
                                        <th>Posted</th>
                                        <th>Deadline</th>
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
        var table = $('#vacancies').DataTable({
            'serverSide': true,
            'processing': true,
            'ajax': {
                url: '/admin/vacancies/',
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
                    "data": "type"
                },
                {
                    'data': 'created_at'
                },
                {
                    'data': 'deadline'
                },
                {
                    "data": "action"
                }
            ]
        });


        $(document).on('click', '.deleteButton', function(a) {
            a.preventDefault();
            const id = $(this).data('id');
            console.log(id);
            Swal.fire({
                title: 'Do you want to delete this vacancy?',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                confirmButtonColor: '#FF0000',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/admin/vacancies/' + id,
                        type: 'DELETE',
                        success: function() {
                            table.ajax.reload();
                        }
                    });

                    Swal.fire(
                        'Deleted!',
                        'Vacancy has been deleted.',
                        'success'
                    )
                }
            })
        });
    </script>
@endsection
