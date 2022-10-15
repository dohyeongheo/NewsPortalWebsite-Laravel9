@extends('admin.layout.app')

@section('heading', 'Add Photo')

@section('button')
<a href="{{ route('admin_photo_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_photo_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Upload Photo * </label>
                            <div>
                                <input type="file" name="photo" class="form-control"
                                    placeholder="Upload Photo">
                            </div>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Caption * </label>
                            <textarea name="caption" class="form-control snote" id="" cols="30" rows="10">{{ old('caption') }}</textarea>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
