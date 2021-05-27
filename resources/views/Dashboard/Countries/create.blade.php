@extends('Dashboard.master')
@section('content')
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between">
            <div>
                کشور ها
            </div>
            <div>
                <a href="{{ route('countries.index') }}" class="btn btn-primary"><i class="fa fa-chevron-right"></i> بازگشت</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('countries.store') }}" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-6">
                        <label for="name" class="col-sm-12 col-form-label">نام کشور</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="price" class="col-sm-12 col-form-label">قیمت</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="price" min="1000" value="1000" step="1000" name="price">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="slug" class="col-sm-12 col-form-label">آیدی ( در سایت روسی )</label>
                        <div class="col-sm-12">
                            <input type="text" dir="ltr" class="form-control" id="slug" name="slug">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="col-12">
                            <button class=" btn btn-primary w-100" type="submit">ایجاد</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection