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
                        <h6 class="mb-0">New Venue</h6>
                    </div>
                    <div class="card-body pt-2">
                        <form id="new_venue_form" action="/venues" method="post">
                            {{ csrf_field() }}

                            <div class="input-group input-group-static my-4">
                                <label for="venue_name">Venue Name</label>
                                <input type="text" class="form-control" name="venue_name" id="venue_name"
                                    value="{{ old('venue_name') }}">
                            </div>
                            <div class="input-group input-group-static my-4">
                                <label for="capacity">Capacity</label>
                                <input type="text" class="form-control" name="capacity" id="capacity"
                                    value="{{ old('capacity') }}">
                            </div>
                            <div class="select my-4">
                                <select class="selectpicker col-lg-12 col-md-12" name="venue_type" id="venue_type">
                                    <option disabled selected value="">Select Venue Type</option>
                                    <option value="lab">Practical Laboratory</option>
                                    <option value="hall">Lecture Hall</option>
                                </select>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#new_venue_form').validate({
                rules: {
                    venue_name: {
                        required: true
                    },
                    venue_type: {
                        required: true,
                    },
                    capacity: {
                        required: true,
                        number:true,
                    },
                },
                messages:{
                    venue_name:'Please fill out this field.',
                    venue_type:'Please select a venue type in the list.',
                    capacity:{
                        required:'Please enter an email address.',
                        number:'Please enter a numeric value.',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.input-group').append(error);
                    element.closest('.select').append(error);
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
