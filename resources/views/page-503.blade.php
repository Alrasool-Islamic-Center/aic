@section('title') 
Neon - 503
@endsection
@extends('layouts.main')
@section('style')

@endsection
<div class="xp-authenticate-bg"></div>
<!-- Start XP Container -->
<div id="xp-container" class="xp-container">
    <!-- Start Container -->
    <div class="container">
        <!-- Start XP Row -->
        <div class="row vh-100 align-items-center">
            <!-- Start XP Col -->
            <div class="col-lg-12 ">
                <!-- Start XP Auth Box -->
                <div class="xp-auth-box">
                    <div class="card">
                        <div class="card-body">
                            <div class="xp-error-box text-center">
                                <h1 class="xp-error-title mb-3"><span class="text-black">5</span><span class="text-black">0</span><span class="text-black">3</span>
                                </h1>
                                <h4 class="xp-error-subtitle text-black m-b-30">The Server is  D<i class="mdi mdi-emoticon-sad text-danger font-32"></i>wn</h4>
                                <p class="text-muted m-b-30">Why don't you come back in a little while and see if our expert are finished tinkering.</p>
                                <a href="{{url('/')}}" class="btn btn-primary btn-rounded mb-3"><i class="icon-home"></i> Take Me Home</a>
                            </div>
                        </div>
                    </div>    
                </div>
                <!-- End XP Auth Box -->
            </div>
            <!-- End XP Col -->
        </div>
        <!-- End XP Row -->
    </div>
    <!-- End Container -->
</div>
<!-- End XP Container -->
@section('script')

@endsection 