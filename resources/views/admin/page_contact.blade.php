@extends('admin.layout.app')

@section('heading', 'Edit Contact Page Content')

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_page_contact_update') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Contact Title * </label>
                            <div>
                                <input type="text" name="contact_title" class="form-control"
                                    value="{{ $page_data->contact_title }}" placeholder="contact Title">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Contact Detail * </label>
                            <textarea name="contact_detail" class="form-control snote" cols="30" rows="10">
                                                        {{ old('contact_detail', $page_data->contact_detail) }}

                                                    </textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Contact Map X * </label>
                            <div>
                                <input type="text" name="contact_map_x" class="form-control"
                                    value="{{ $page_data->contact_map_x }}" placeholder="Contact Map X">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Contact Map Y * </label>
                            <div>
                                <input type="text" name="contact_map_y" class="form-control" value="{{ $page_data->contact_map_y }}"
                                    placeholder="Contact Map Y">
                            </div>
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
