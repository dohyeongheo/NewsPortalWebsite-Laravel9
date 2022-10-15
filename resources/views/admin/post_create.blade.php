@extends('admin.layout.app')

@section('heading', 'Add Post')

@section('button')
<a href="{{ route('admin_post_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_post_store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Post Title * </label>
                            <div>
                                <input type="text" name="post_title" class="form-control" placeholder="Post Title" value="{{ old('post_title') }}">
                            </div>

                        </div>
                        <div class="form-group mb-3">
                            <label>Post Detail * </label>
                            <div>
                                <textarea name="post_detail" class="form-control snote" cols="30" rows="10">{{ old('post_detail') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Post Photo * </label>
                            <div>
                                <input type="file" name="post_photo" id="" class="form-control"
                                    placeholder="Post Photo">
                            </div>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Select Category * </label>
                            <select name="sub_category_id" class="form-control">
                                @foreach ($sub_categories as $row)
                                <option value="{{ $row->id }}"> {{ $row->sub_category_name }} (Category :
                                    {{
                                    $row->rCategory->category_name }})</option>
                                @endforeach
                            </select>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Is Shareable</label>
                            <select name="is_share" class="form-control">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Is Commentable</label>
                            <select name="is_comment" class="form-control">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Tags </label>
                            <div>
                                <input type="text" name="tags" class="form-control" placeholder="Tags" value="{{ old('tags') }}">
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
