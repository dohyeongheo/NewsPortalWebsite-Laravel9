@extends('admin.layout.app')

@section('heading', 'Edit Post')

@section('button')
<a href="{{ route('admin_post_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_post_update', $post_single->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Post Title * </label>
                            <div>
                                <input type="text" name="post_title" class="form-control" placeholder="Post Title"
                                    value="{{ $post_single->post_title }}">
                            </div>

                        </div>
                        <div class="form-group mb-3">
                            <label>Post Detail * </label>
                            <div>
                                <textarea name="post_detail" class="form-control snote" cols="30" rows="10">
                                    {!!$post_single->post_detail !!}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Existing Post Photo * </label>
                            <div>
                                <img src="{{ asset('uploads/'.$post_single->post_photo) }}" alt="" style="width:200px;">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Change Post Photo * </label>
                            <div>
                                <input type="file" name="post_photo" id="" class="form-control"
                                    placeholder="Post Photo">
                            </div>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Select Category * </label>
                            <select name="sub_category_id" class="form-control select2">
                                @foreach ($sub_categories as $row)
                                <option value="{{ $row->id }}" @if($post_single->sub_category_id == $row->id)
                                    selected
                                    @endif
                                    >
                                    {{ $row->sub_category_name }} (Category :
                                    {{
                                    $row->rCategory->category_name }})</option>
                                @endforeach

                            </select>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Is Shareable</label>
                            <select name="is_share" class="form-control">
                                <option value="1" @if($post_single->is_share == 1)
                                    selected
                                    @endif
                                    >Yes</option>
                                <option value="0" @if($post_single->is_share == 0)
                                    selected
                                    @endif
                                    >No</option>
                            </select>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Is Commentable</label>
                            <select name="is_comment" class="form-control">
                                <option value="1" @if($post_single->is_comment == 1)
                                    selected
                                    @endif
                                    >Yes</option>
                                <option value="0" @if($post_single->is_comment == 0)
                                    selected
                                    @endif
                                    >No</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Existing Tags </label>
                            <div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Tag Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($existing_tags as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->tag_name }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_post_delete_tag', [$post_single->id, $row->id]) }}"
                                                    class="btn btn-danger"
                                                    onClick="return confirm('삭제하시겠습니까?');">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>New Tags </label>
                            <div>
                                <input type="text" name="tags" class="form-control" placeholder="Tags">
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
