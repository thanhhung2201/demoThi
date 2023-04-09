@extends('master')
@section('content')
<div class="card">
    <div class="card-header">Edit Plane</div>
    <div class="card-body">
        <form method="post" action="{{ route('planes.update', $plane->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Plane So Dang Ky</label>
                <div class="col-sm-10">
                    <input type="text" name="SoDangKy" class="form-control" value="{{ $plane->SoDangKy }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Plane So Hieu</label>
                <div class="col-sm-10">
                    <input type="text" name="SoHieu" class="form-control" value="{{ $plane->SoHieu }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Plane Kha Nang</label>
                <div class="col-sm-10">
                    <input type="text" name="KhaNang" class="form-control" value="{{ $plane->KhaNang }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $plane->id}}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>
<script>
</script>
@endsection('content')