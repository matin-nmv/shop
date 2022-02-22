@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box-header">
                <h3 class="box-title">ایجاد دسته بندی</h3>
            </div>
            <div class="box-body">
                <form action="{{route('categories.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category-id">دسته والد</label>
                        <select name="category-id" id="category-id" class="form-control">
                            <option value="" disabled selected>دسته والد را انتخاب کنید . .</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" >{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" value="ثبت" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
