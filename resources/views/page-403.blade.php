@section('title') 
Neon - 403
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
                                <h1 class="xp-error-title mb-3"><span class="text-black">4</span><span class="text-black">0</span><span class="text-black">3</span>
                                </h1>
                                <h4 class="xp-error-subtitle text-black m-b-30">F<i class="mdi mdi-emoticon-sad text-danger font-32"></i>rbidden</h4>
                                <p class="text-muted m-b-30">You're not permitted to see this. <br>If you feel this is a mistake, contact your admin. </p>
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