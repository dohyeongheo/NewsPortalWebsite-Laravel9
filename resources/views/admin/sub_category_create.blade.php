@extends('admin.layout.app')

@section('heading', 'Add Sub Category')

@section('button')
<a href="{{ route('admin_sub_category_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_sub_category_store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Sub Category Name * </label>
                            <div>
                                <input type="text" name="sub_category_name" class="form-control"
                                    placeholder="Category Name">
                            </div>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Select Category *</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $row)
                                <option value="{{ $row->id }}"> {{ $row->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Show on Menu</label>
                            <select name="show_on_menu" class="form-control">
                                <option value="Show">Show</option>
                                <option value="Hide">Hide</option>
                            </select>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Show on Home</label>
                            <select name="show_on_home" class="form-control">
                                <option value="Show">Show</option>
                                <option value="Hide">Hide</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Category_order * </label>
                            <input type="text" class="form-control" name="sub_category_order" value="">
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
