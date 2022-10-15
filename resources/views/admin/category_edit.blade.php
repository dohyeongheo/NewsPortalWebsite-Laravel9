@extends('admin.layout.app')

@section('heading', 'Edit Category')

@section('button')
<a href="{{ route('admin_category_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View </a>
@endsection

@section('main_content')

<div class="section-body">
    <form action="{{ route('admin_category_update', $category_single->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Category Name * </label>
                            <div>
                                <input type="text" name="category_name" class="form-control"
                                    value="{{ $category_single->category_name }}" placeholder="Category Name">
                            </div>
                        </div>

                        <div class=" form-group mb-3">
                            <label>Show on Menu</label>
                            <select name="show_on_menu" class="form-control">
                                <option value="Show" @if ($category_single->show_on_menu == 'Show')
                                    Selected
                                    @endif
                                    >Show</option>
                                <option value="Hide" @if ($category_single->show_on_menu == 'Hide')
                                    Selected
                                    @endif

                                    >Hide</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Category_order * </label>
                            <input type="text" class="form-control" name="category_order"
                                value="{{ $category_single->category_order }}">
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
