@section('title') 
Neon - Sparkline Chart
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h4 class="xp-page-title">Sparkline Chart</h4>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="xp-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Charts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sparkline Chart</li>
                </ol>
            </div>
        </div>
    </div>          
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <div class="row">
    <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Donation reciept form</h5>
                    <h6 class="card-subtitle">Alrasool islamic center donation reciept form</h6>
                </div>
                <div class="card-body">
                    <form id="xp-basic-form-wizard" action="#">
                        <div>
                            <h3>Donor Information</h3>
                            <section>
                                <h4 class="mb-3">Donor Information</h4>
                                <div class="form-group">
                                    <label for="username">First Name</label>
                                    <input type="text" class="form-control" id="donor-fname">
                                </div>
                                <div class="form-group">
                                    <label for="password">Last Name</label>
                                    <input type="password" class="form-control" id="donor-lname">
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword">Phone Number</label>
                                    <input type="tel" class="form-control" id="donor-phone">
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword">Email (optional)</label>
                                    <input type="password" class="form-control" id="">
                                </div>
                            </section>
                            <h3>Donation Info</h3>
                            <section>
                                <h4 class="mb-3">About the Donation</h4>
                                <div class="form-group">
                                    <label for="firstname">how much?</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">what was the method of payment?</label>
                                    <input type="text" class="form-control" id="lastname">
                                </div>
                                <div class="form-group">
                                    <label for="email">what is the associated campaign?</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </section>
                            <h3>Summary</h3>
                            <section>
                                <h4 class="mb-3">Conformation Summary</h4>
                                <ul>
                                    <li><strong>Donor Name:</strong> Mohamed Alsoudani</li>
                                    <li><strong>Donated amount:</strong> $20</li>
                                    <li><strong>Phone Number:</strong> +1 208-316-0850</li>
                                    <li><strong>Donation Campaign:</strong> Ramadan 2020</li>
                                </ul>
                            </section>
                            <h3>Confirmation</h3>
                            <section>
                                <h4 class="m-b-30">Confirm Payment Reciept</h4>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="acceptTerms">
                                  <label class="custom-control-label" for="acceptTerms">I confirm that I have recieved a donation on behalf of the Alrasool Islamic Center.</label>
                                </div>
                            </section>
                        </div>
                    </form>                                
                </div>
            </div>
        </div>
    </div>  
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<!-- Form Step JS -->
<script src="{{ asset('assets/plugins/jquery-step/jquery.steps.min.js') }}"></script>
<script src="{{ asset('assets/js/init/form-step-init.js') }}"></script>
@endsection 