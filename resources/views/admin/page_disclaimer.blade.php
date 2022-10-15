@extends('admin.layout.app')

@section('heading', 'Disclaimer Page Content')

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_page_disclaimer_update') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Title * </label>
                            <div>
                                <input type="text" name="disclaimer_title" class="form-control"
                                    value="{{ $page_data->disclaimer_title }}" placeholder="Disclaimer Title">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Disclaimer Detail * </label>
                            <textarea name="disclaimer_detail" class="form-control snote" cols="30" rows="10">
                                {{ old('disclaimer_detail', $page_data->disclaimer_detail) }}

                            </textarea>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Show on Menu</label>
                            <select name="disclaimer_status" class="form-control">
                                <option value="Show" @if ($page_data->disclaimer_status == 'Show')
                                    Selected
                                    @endif
                                    >Show</option>
                                <option value="Hide" @if ($page_data->disclaimer_status == 'Hide')
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
