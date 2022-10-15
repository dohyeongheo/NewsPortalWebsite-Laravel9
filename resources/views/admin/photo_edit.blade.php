@extends('admin.layout.app')

@section('heading', 'Edit Photo')

@section('button')
<a href="{{ route('admin_photo_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_photo_update', $photo_single->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Existing Photo </label>
                            <div>
                                <img src="{{ asset('uploads/photo_gallery/'.$photo_single->photo) }}" alt=""
                                    style="width:200px;">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Change Photo </label>
                            <div>
                                <input type="file" name="photo" class="form-control" placeholder="Photo">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Caption </label>
                            <div>
                                <textarea name="caption" class="form-control snote" cols="30" rows="10">
                                    {!!$photo_single->caption !!}
                                </textarea>
                            </div>
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
