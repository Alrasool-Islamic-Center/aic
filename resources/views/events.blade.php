@section('title') 
Neon - Events
@endsection
@extends('layouts.main')
@section('style')
<!-- Calendar CSS -->
<link href="{{ asset('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h4 class="xp-page-title">Events</h4>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="xp-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </div>
        </div>
    </div>          
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <div class="row">
        <div class="col-12">                                 
            <div class="row">
                 <div class="col-md-8 col-lg-9 col-xl-10">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black mb-0">Created Events</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" id="add_event_form" class="m-t-5 m-b-20">
                                <input type="text" class="form-control new-event-form" placeholder="Add new event..." />
                            </form>
                            <div id='external-events'>
                                <h4 class="m-b-15 font-16">Draggable Events</h4>
                                <div class='fc-event'>Birthday</div>
                                <div class='fc-event'>Sports</div>
                                <div class='fc-event'>Holiday</div>
                                <div class='fc-event'>Break Time</div>
                                <div class='fc-event'>Lunch</div>
                            </div>
                            <!-- checkbox -->
                            <div class="custom-control custom-checkbox mt-3">
                                <input type="checkbox" class="custom-control-input" id="drop-remove" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Col -->
    </div> 
    <!-- End Row -->  
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<!-- jQuery UI -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/js/init/event-init.js') }}"></script>
@endsection 