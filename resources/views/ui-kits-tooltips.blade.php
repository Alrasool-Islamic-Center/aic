@section('title') 
Neon - Tooltips
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h4 class="xp-page-title">Tooltips</h4>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="xp-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tooltips</li>
                </ol>
            </div>
        </div>
    </div>          
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Tooltips</h5>
                    <h6 class="card-subtitle">Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left.</h6>
                </div>
                <div class="card-body">
                    <div class="xp-button">
                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                          Tooltip on top
                        </button>
                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                          Tooltip on right
                        </button>
                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                          Tooltip on bottom
                        </button>
                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                          Tooltip on left
                        </button>

                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="right" title="Disabled tooltip">
                          <button class="btn btn-danger" style="pointer-events: none;" type="button" disabled>Disabled button</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->  
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 