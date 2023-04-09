@extends('master')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="card">
    <div class="card-header">Add Plane</div>
    <div class="card-body">
        <form method="post" action="{{ route('planes.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Plane So Dang Ky</label>
                <div class="col-sm-10">
                    <input type="text" name="SoDangKy" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Plane So Hieu</label>
                <div class="col-sm-10">
                    <input type="text" name="SoHieu" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Plane Kha Nang</label>
                <div class="col-sm-10">
                     <input type="text" name="KhaNang" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>
@endsection('content')