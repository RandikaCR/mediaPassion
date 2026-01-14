@extends('layouts.backend')

@section('page_title')
    User Roles
@endsection

@section('styles')

@endsection

@section('css')

@endsection

@section('header_buttons')

@endsection

@section('content')

    @if(!empty($is_screen_access))

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">All User Roles</h4>
                    <div class="flex-shrink-0">
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <div class="row">
                            <div class="col-xl-612">
                                <div class="table-responsive mt-4 mt-xl-0">
                                    <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th class="text-center" scope="col">
                                                <p class="mb-0">ID</p>
                                            </th>
                                            <th scope="col" style="width: 50%;">
                                                <p class="mb-0">User Role</p>
                                            </th>
                                            <th class="text-center" scope="col">
                                                <p class="mb-0">Display Name</p>
                                            </th>
                                            <th class="text-center" scope="col">
                                                <p class="mb-0">Status</p>
                                            </th>
                                            <th class="text-end" scope="col">
                                                <p class="mb-0">Actions</p>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($items as $item)
                                            <tr id="row-{{ $item->id }}">
                                                <td class="fw-medium text-center">
                                                    <p class="mb-0">{{ $item->id }}</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0">{{ $item->user_role }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0">{{ $item->display_name }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0"><span class="badge {{ status($item->status)->class }}">{{ status($item->status)->text }}</span></p>
                                                </td>
                                                <td class="text-end">
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <div class="form-check form-switch form-switch-success form-switch-md">
                                                            <input class="form-check-input status" data-id="{{ $item->id }}" type="checkbox" role="switch"  {{ ($item->status == 1) ? 'checked': '' }} >
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" data-id="{{ $item->id }}" class="btn btn-primary btn-sm waves-effect waves-light edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="mdi mdi-pencil"></span></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>


        <div class="col-md-4">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1"><span class="me-1">Create New</span><span>User Role</span></h4>
                    <div class="flex-shrink-0">
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="row">
                        {{--<div class="col-sm-12 mb-3">
                            <div>
                                <label for="category-input" class="form-label">Slug *</label>
                                <input type="text" class="form-control" id="slug-input" placeholder="Enter here...." readonly>
                            </div>
                        </div>--}}
                        <div class="col-sm-12 mb-2">
                            <div>
                                <label for="role-input" class="form-label">User Role *</label>
                                <input type="text" class="form-control" id="role-input" placeholder="Enter here....">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div>
                                <label for="display-name-input" class="form-label">Display Name *</label>
                                <input type="text" class="form-control" id="display-name-input" placeholder="Enter here....">
                            </div>
                        </div>

                        <div class="col-sm-12" id="form-alert-area">

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-end">
                            <input type="hidden" id="edit-id" value="0">
                            <a href="{{ url('/admin/user-roles') }}" class="btn btn-outline-dark waves-effect waves-light me-2"><i class="mdi mdi-restore me-1"></i>Reset</a>
                            <button type="button" class="btn btn-secondary waves-effect waves-light save-this-form"><i class="mdi mdi-content-save me-1"></i>SAVE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @else
        @include('partials.backend.access-warning')
    @endif

@endsection


@section('scripts')
    <script src="{{ asset('assets/backend/packages/code.jquery.com/jquery-3.6.0.min.js') }}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endsection

@section('custom_scripts')
    <script>
        $(document).ready(function (){


            $('.save-this-form').on('click', function (){
                $this = $(this);
                $($this).prop('disabled', true);

                $url = "{{ route('backend.userRoles.store') }}";

                $isInvalid = 0;

                $id = $('#edit-id').val();
                $role = $.trim($('#role-input').val());
                $displayName = $.trim($('#display-name-input').val());

                if($role == ''){
                    $('#form-alert-area').html('');
                    $alert = alertDanger('User Role can not be empty!', 'Error');
                    $('#form-alert-area').html($alert);
                    $($this).prop('disabled', false);
                }else if($displayName == ''){
                    $('#form-alert-area').html('');
                    $alert = alertDanger('Display Name can not be empty!', 'Error');
                    $('#form-alert-area').html($alert);
                    $($this).prop('disabled', false);
                }

                if($isInvalid == 0){
                    $.ajax({
                        url: $url,
                        dataType: 'json',
                        data: {
                            id: $id,
                            user_role: $role,
                            display_name: $displayName,
                            _token: csrf_token()
                        },
                        method: 'POST',
                        beforeSend: function ($jqXHR, $obj) {
                            $('#form-alert-area').html('');
                            $('#form-alert-area').html(alertProcessing());
                        },
                        success: function ($res, $textStatus, $jqXHR) {
                            $('#edit-id').val(0);
                            $('#role-input').val('');
                            $('#display-name-input').val('');

                            $('#form-alert-area').html('');
                            $alert = alertSuccess($res.message_text, $res.message_title);
                            $('#form-alert-area').html($alert);
                            $($this).prop('disabled', false);

                            setTimeout(function (){
                                location.reload();
                            }, 1000);
                        },
                        error: function ($jqXHR, $textStatus, $errorThrown) {

                        }
                    });
                }

            });


            $('.table').on('click', '.edit', function (){
                $id = $(this).data('id');
                $url = "{{ route('backend.userRoles.get') }}";
                $.ajax({
                    url: $url,
                    dataType: 'json',
                    data: {
                        "id": $id,
                        "_token": csrf_token()
                    },
                    method: 'POST',
                    beforeSend: function ($jqXHR, $obj) {
                        $('#form-alert-area').html('');
                        $('#form-alert-area').html(alertProcessing('Please Wait...', 'Getting Info'));

                        $('.save-this-form').prop('disabled', true);

                        $('#edit-id').val(0);
                        $('#role-input').val('');
                        $('#display-name-input').val('');
                    },
                    success: function ($res, $textStatus, $jqXHR) {
                        $('#edit-id').val($res.id);
                        $('#role-input').val($res.user_role);
                        $('#display-name-input').val($res.display_name);
                        $('#form-alert-area').html('');
                        $('.save-this-form').prop('disabled', false);

                    },
                    error: function ($jqXHR, $textStatus, $errorThrown) {

                    }
                });
            });

            $('.table').on('change', '.status', function (){
                $id = $(this).data('id');
                $url = "{{ route('backend.userRoles.status') }}";
                $rowId = '#row-' + $id;
                $.ajax({
                    url: $url,
                    dataType: 'json',
                    data: {
                        "id": $id,
                        "_token": csrf_token()
                    },
                    method: 'POST',
                    beforeSend: function ($jqXHR, $obj) {

                    },
                    success: function ($res, $textStatus, $jqXHR) {
                        $($rowId).find('.badge').removeClass('bg-success bg-warning').addClass($res.class);
                        $($rowId).find('.badge').html($res.text);
                    },
                    error: function ($jqXHR, $textStatus, $errorThrown) {

                    }
                });
            });
        });
    </script>


@endsection
