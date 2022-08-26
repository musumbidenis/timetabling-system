@extends('layouts.main')
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-9 col-12 mx-auto position-relative">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 me-3 float-start">
                            <i class="material-icons opacity-10">person_add</i>
                        </div>
                        <h6 class="mb-0">New User</h6>
                    </div>
                    <div class="card-body pt-2">
                        <form id="new_user_form" action="/users" method="post">
                            {{ csrf_field() }}

                            <div class="input-group input-group-dynamic my-4">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name">
                            </div>
                            <div class="input-group input-group-dynamic my-4">
                                <label for="surname" class="form-label">Surname</label>
                                <input type="text" class="form-control" name="surname" id="surname">
                            </div>
                            <div class="input-group input-group-dynamic my-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email_address" id="email">
                            </div>
                            <div class="input-group input-group-dynamic my-4">
                                <select class="form-control" name="role" id="roles">
                                    <option disabled selected="">Select Role</option>
                                    <option value="admin">Administrator</option>
                                    <option value="HOD">Head of Department</option>
                                    <option value="deputy_HOD">Deputy HOD</option>
                                </select>
                            </div>
                            <div class="col-6 col-sm-4 mt-3 mt-sm-0">

                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" name="button" class="btn bg-gradient-dark m-0 ms-2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#new_user_form').validate({
                rules: {
                    first_name: {
                        required: true
                    },
                    surname: {
                        required: true,
                    },
                    email_address: {
                        required: true,
                        email: true
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.input-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection