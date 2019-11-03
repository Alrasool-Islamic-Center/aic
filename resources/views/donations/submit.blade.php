@section('title') 
AIC - Basic Donation Form
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h4 class="xp-page-title">Basic Donation Form</h4>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="xp-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Donations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Donation Form</li>
                </ol>
            </div>
        </div>
    </div>          
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <div class="d-flex justify-content-center">
    <div class="col-lg-8">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Donation Form</h5>
                    <h6 class="card-subtitle">Phone number of the Donor</h6>
                </div>
                <div class="card-body">
                    <form action="/donation" method="POST" class="xp-form-validate needs-validation">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="val-phoneus" name="phoneNumber" placeholder="+1 9876543210" required>
                            @if (session('not_valid'))
                            <div></div>
                            <div class="text-danger">
                                please provide a valid phone number
                            </div>
                            @endif
                            <small id="phoneDisclaimer" class="form-text text-muted">Never share phone numbers of donors outside of this form.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>
<!-- End XP Contentbar -->
@endsection