@extends('admin.layout.app')

@section('heading', 'Posts')

@section('button')
<a href="{{ route('admin_post_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add </a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Thumbnail</th>
                                    <th>Post Title</th>
                                    <th>Sub Category</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Admin</th>
                                    {{-- <th>Post Detail</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($posts as $row)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('uploads/'.$row->post_photo) }}" alt="" style="width:200px"
                                            ;>
                                    </td>
                                    <td>{{ $row->post_title }}</td>
                                    <td>{{ $row->rSubcategory->sub_category_name }}</td>
                                    <td>{{ $row->rSubcategory->rCategory->category_name }}</td>
                                    <td>
                                        {{-- Work later --}}
                                    </td>
                                    <td>
                                        @if($row->admin_id != 0)
                                        {{ Auth::guard('admin')->user()->name }}

                                        @endif
                                    </td>
                                    {{-- <td>{!! $row->post_detail !!} </td> --}}

                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_post_edit', $row->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin_post_delete', $row->id) }}" class="btn btn-danger"
                                            onClick="return confirm('삭제하시겠습니까?');">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
