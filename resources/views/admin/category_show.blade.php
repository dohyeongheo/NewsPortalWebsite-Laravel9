@extends('admin.layout.app')

@section('heading', 'Categories')

@section('button')
<a href="{{ route('admin_category_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add </a>
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
                                    <th>Category Name</th>
                                    <th>Show on menu</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($categories as $row)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->category_name }}</td>
                                    <td>{{ $row->show_on_menu }}</td>
                                    <td>{{ $row->category_order }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_category_edit', $row->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin_category_delete', $row->id) }}"
                                            class="btn btn-danger" onClick="return confirm('삭제하시겠습니까?');">Delete</a>
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
