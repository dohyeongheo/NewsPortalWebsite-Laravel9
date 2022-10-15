@extends('admin.layout.app')

@section('heading', 'Photos')

@section('button')
<a href="{{ route('admin_photo_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add </a>
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
                                    <th>Photo</th>
                                    <th>Caption</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($photos as $row)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/photo_gallery/'.$row->photo) }}" alt="" style="width:200px;">
                                    </td>
                                    <td>{!! $row->caption !!}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_photo_edit', $row->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin_photo_delete', $row->id) }}" class="btn btn-danger"
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
