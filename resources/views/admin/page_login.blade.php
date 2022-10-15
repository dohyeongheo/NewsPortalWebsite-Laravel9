@extends('admin.layout.app')

@section('heading', 'Edit Login Page Content')

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_page_login_update') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Title * </label>
                            <div>
                                <input type="text" name="login_title" class="form-control"
                                    value="{{ $page_data->login_title }}" placeholder="login Title">
                            </div>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Show on Menu</label>
                            <select name="login_status" class="form-control">
                                <option value="Show" @if ($page_data->login_status == 'Show')
                                    Selected
                                    @endif
                                    >Show</option>
                                <option value="Hide" @if ($page_data->login_status == 'Hide')
                                    Selected
                                    @endif
                                    >Hide</option>
                            </select>
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
