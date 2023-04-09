@extends('master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Plane Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('planes.index') }}" class="btn btn-primary btnsm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Plane So Dang Ky</b></label>
            <div class="col-sm-10">
                {{ $plane->SoDangKy }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Plane So Hieu</b></label>
            <div class="col-sm-10">
                {{ $plane->SoHieu }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Plane Kha Nang</b></label>
            <div class="col-sm-10">
                {{ $plane->KhaNang }}
            </div>
        </div>
    </div>
</div>
@endsection('content')