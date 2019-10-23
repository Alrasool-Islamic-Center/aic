@section('title') 
Neon - Coming Soon
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
                            <div class="xp-maintenance-box text-center">
                                <a href="{{url('/')}}" class="xp-web-logo"><img src="assets/images/logo.svg" height="40" alt="logo"></a>
                                <p class="xp-error-title text-black mb-3"><i class="icon-rocket"></i></p>
                                <h4 class="xp-error-subtitle text-black m-b-30">Coming Soon</h4>
                                <p class="text-muted m-b-30">Stay Connected, Stay Updated!</p>                                
                                <div class="xp-counter-box">
                                    <div id="xp-counter"></div>
                                </div>
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
<!-- Countdown JS -->
<script src="{{ asset('assets/plugins/jquery-countdown/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/init/comingsoon-init.js') }}"></script>
@endsection 