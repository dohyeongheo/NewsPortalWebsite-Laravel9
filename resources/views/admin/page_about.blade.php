@extends('admin.layout.app')

@section('heading', 'Edit About Page Content')

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_page_about_update') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Title * </label>
                            <div>
                                <input type="text" name="about_title" class="form-control"
                                    value="{{ $page_data->about_title }}" placeholder="About Title">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>About Detail * </label>
                            <textarea name="about_detail" class="form-control snote" cols="30" rows="10">
                                {{ old('about_detail', $page_data->about_detail) }}

                            </textarea>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Show on Menu</label>
                            <select name="about_status" class="form-control">
                                <option value="Show" @if ($page_data->about_status == 'Show')
                                    Selected
                                    @endif
                                    >Show</option>
                                <option value="Hide" @if ($page_data->about_status == 'Hide')
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
