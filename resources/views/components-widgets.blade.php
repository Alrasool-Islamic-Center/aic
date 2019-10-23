@section('title') 
Neon - Widgets
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h4 class="xp-page-title">Widgets</h4>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="xp-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Components</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-primary">2580</h4>
                            <p class="mb-0 font-16 text-muted">Total Projects</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                                <i class="mdi mdi-file-document font-30 text-primary"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="progress mt-3 mb-1" style="height: 5px;">
                          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0 text-primary">Up 85% in last month</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-success">55790</h4>
                            <p class="mb-0 font-16 text-muted">Total Revenue</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                <i class="mdi mdi-currency-usd font-30 text-success"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="progress mt-3 mb-1" style="height: 5px;">
                          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0 text-success">Up 60% in last month</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-warning">930</h4>
                            <p class="mb-0 font-16 text-muted">Total Clients</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                                <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="progress mt-3 mb-1" style="height: 5px;">
                          <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0 text-warning">Down 78% in last month</p>                                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-danger">2750</h4>
                            <p class="mb-0 font-16 text-muted">Total Visitors</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                                <i class="mdi mdi-eye font-30 text-danger"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="progress mt-3 mb-1" style="height: 5px;">
                          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0 text-danger">Down 55% in last month</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <input class="xp-knob" data-width="100" data-height="100" data-linecap=round data-bgColor="#e1e4e9" data-fgColor="#4c7cf3" data-thickness=".1" readonly value="85">
                        <h4 class="xp-counter text-primary m-t-20">2580</h4>
                        <p class="text-muted font-16">Projects</p>
                        <p class="mb-0 f-w-5 text-danger"><span class="badge badge-primary"><i class="mdi mdi-arrow-up mx-1"></i>85%</span></p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <input class="xp-knob" data-width="100" data-height="100" data-linecap=round data-bgColor="#e1e4e9" data-fgColor="#2bcd72" data-thickness=".1" readonly value="54">
                        <h4 class="xp-counter text-success m-t-20">55790</h4>
                        <p class="text-muted font-16">Revenue</p>
                        <p class="mb-0 f-w-5 text-success"><span class="badge badge-success"><i class="mdi mdi-arrow-up mx-1"></i>54%</span></p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <input class="xp-knob" data-width="100" data-height="100" data-linecap=round data-bgColor="#e1e4e9" data-fgColor="#fac751" data-thickness=".1" readonly value="64">
                        <h4 class="xp-counter text-warning m-t-20">930</h4>
                        <p class="text-muted font-16">Client</p>
                        <p class="mb-0 f-w-5 text-danger"><span class="badge badge-warning"><i class="mdi mdi-arrow-down mx-1"></i>64%</span></p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <input class="xp-knob" data-width="100" data-height="100" data-linecap=round data-bgColor="#e1e4e9" data-fgColor="#ff4b5b" data-thickness=".1" readonly value="72">
                        <h4 class="xp-counter text-danger m-t-20">2750</h4>
                        <p class="text-muted font-16">Visitors</p>
                        <p class="mb-0 f-w-5 text-danger"><span class="badge badge-danger"><i class="mdi mdi-arrow-down mx-1"></i>72%</span></p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-primary m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">2580</h4>
                            <p class="mb-0 text-white">Total Projects</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg">
                                <i class="mdi mdi-file-document font-40 text-white"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-success m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">55790</h4>
                            <p class="mb-0 text-white">Total Revenue</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg">
                                <i class="mdi mdi-currency-usd font-40 text-white"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-warning m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">930</h4>
                            <p class="mb-0 text-white">Total Clients</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg">
                                <i class="mdi mdi-account-multiple font-40 text-white"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-danger m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">2750</h4>
                            <p class="mb-0 text-white">Total Visitors</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg">
                                <i class="mdi mdi-eye font-40 text-white"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-primary m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">2580</h4>
                            <p class="mb-0 text-white">Total Projects</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                <i class="mdi mdi-file-document font-30 text-primary"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-success m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">55790</h4>
                            <p class="mb-0 text-white">Total Revenue</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                <i class="mdi mdi-currency-usd font-30 text-success"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-warning m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">930</h4>
                            <p class="mb-0 text-white">Total Clients</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-danger m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-white">2750</h4>
                            <p class="mb-0 text-white">Total Visitors</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-white">
                                <i class="mdi mdi-eye font-30 text-danger"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-primary">2580</h4>
                            <p class="mb-0 text-muted">Total Projects</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg">
                                <i class="mdi mdi-file-document font-40 text-primary"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-success">55790</h4>
                            <p class="mb-0 text-muted">Total Revenue</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg">
                                <i class="mdi mdi-currency-usd font-40 text-success"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-warning">930</h4>
                            <p class="mb-0 text-muted">Total Clients</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg">
                                <i class="mdi mdi-account-multiple font-40 text-warning"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-danger">2750</h4>
                            <p class="mb-0 text-muted">Total Visitors</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg">
                                <i class="mdi mdi-eye font-40 text-danger"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-primary">2580</h4>
                            <p class="mb-0 text-muted">Total Projects</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-primary">
                                <i class="mdi mdi-file-document font-30 text-white"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-success">55790</h4>
                            <p class="mb-0 text-muted">Total Revenue</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-success">
                                <i class="mdi mdi-currency-usd font-30 text-white"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-warning">930</h4>
                            <p class="mb-0 text-muted">Total Clients</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-warning">
                                <i class="mdi mdi-account-multiple font-30 text-white"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-danger">2750</h4>
                            <p class="mb-0 text-muted">Total Visitors</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-danger">
                                <i class="mdi mdi-eye font-30 text-white"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-primary">2580</h4>
                            <p class="mb-0 text-muted">Total Projects</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                                <i class="mdi mdi-file-document font-30 text-primary"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-success">55790</h4>
                            <p class="mb-0 text-muted">Total Revenue</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                <i class="mdi mdi-currency-usd font-30 text-success"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-warning">930</h4>
                            <p class="mb-0 text-muted">Total Clients</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                                <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-danger">2750</h4>
                            <p class="mb-0 text-muted">Total Visitors</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                                <i class="mdi mdi-eye font-30 text-danger"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">                                            
                            <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                                <i class="mdi mdi-file-document font-30 text-primary"></i>
                            </div>                   
                        </div>
                        <div class="float-right text-right">
                            <h4 class="xp-counter text-primary">2580</h4>
                            <p class="mb-0 text-muted">Total Projects</p> 
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">                                        
                            <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                <i class="mdi mdi-currency-usd font-30 text-success"></i>
                            </div>                       
                        </div>
                        <div class="float-right text-right">
                            <h4 class="xp-counter text-success">55790</h4>
                            <p class="mb-0 text-muted">Total Revenue</p> 
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                                <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                            </div>                                                                
                        </div>
                        <div class="float-right text-right">
                            <h4 class="xp-counter text-warning">930</h4>
                            <p class="mb-0 text-muted">Total Clients</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                                <i class="mdi mdi-eye font-30 text-danger"></i>
                            </div>                         
                        </div>
                        <div class="float-right text-right">
                            <h4 class="xp-counter text-danger">2750</h4>
                            <p class="mb-0 text-muted">Total Visitors</p>       
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                            <i class="mdi mdi-file-document font-30 text-primary"></i>
                        </div>
                        <h4 class="xp-counter text-primary m-t-20">2580</h4>
                        <p class="text-muted">Total Projects</p>
                        <p class="mb-0 f-w-5 text-danger"><i class="mdi mdi-arrow-down mx-1"></i>24.2%</p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                            <i class="mdi mdi-currency-usd font-30 text-success"></i>
                        </div>
                        <h4 class="xp-counter text-success m-t-20">55790</h4>
                        <p class="text-muted">Total Revenue</p>
                        <p class="mb-0 f-w-5 text-success"><i class="mdi mdi-arrow-up mx-1"></i>112.71%</p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                            <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                        </div>
                        <h4 class="xp-counter text-warning m-t-20">930</h4>
                        <p class="text-muted">Total Clients</p>
                        <p class="mb-0 f-w-5 text-success"><i class="mdi mdi-arrow-up mx-1"></i>24.2%</p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-center">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                            <i class="mdi mdi-eye font-30 text-danger"></i>
                        </div>
                        <h4 class="xp-counter text-danger m-t-20">2750</h4>
                        <p class="text-muted">Total Visitors</p>
                        <p class="mb-0 f-w-5 text-danger"><i class="mdi mdi-arrow-down mx-1"></i>112.71%</p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Social Profile</h5>
                </div>
                <div class="card-body">
                    <div class="xp-social-profile">
                        <div class="xp-social-profile-img">
                            <div class="row">
                                <div class="col-4 px-1">
                                    <img src="assets/images/ui-images/image-circle.jpg" class="rounded img-fluid" alt="img">
                                </div>
                                <div class="col-4 px-1">
                                    <img src="assets/images/ui-images/image-rounded.jpg" class="rounded img-fluid" alt="img">
                                </div>
                                <div class="col-4 px-1">
                                    <img src="assets/images/ui-images/image-thumbnail.jpg" class="rounded img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-top">
                            <div class="row">
                                <div class="col-3">
                                    <div class="xp-social-profile-star py-3">
                                        <i class="icon-star font-20"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="xp-social-profile-avatar text-center">
                                        <img src="assets/images/ui-media/media-image-8.jpg" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-social-profile-live"></span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="xp-social-profile-menu text-right py-3">
                                        <i class="icon-options font-20"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-middle text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div class="xp-social-profile-title">
                                        <h5 class="my-1 text-black">karina_simons</h5>
                                    </div>
                                    <div class="xp-social-profile-subtitle">
                                        <p class="mb-3 text-muted">Karina Simons</p>
                                    </div>
                                    <div class="xp-social-profile-desc">
                                        <p class="text-muted mb-1">Lifestyle coach and photographer <br />delivering best images only...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-bottom text-center">
                            <div class="row">
                                <div class="col-4">
                                    <div class="xp-social-profile-media pt-3">
                                        <h5 class="text-black my-1">45</h5>
                                        <p class="mb-0 text-muted">Posts</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="xp-social-profile-followers pt-3">
                                        <h5 class="text-black my-1">278k</h5>
                                        <p class="mb-0 text-muted">Fans</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="xp-social-profile-following pt-3">
                                        <h5 class="text-black my-1">552</h5>
                                        <p class="mb-0 text-muted">Likes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Actions History</h5>
                </div>
                <div class="card-body">
                    <div class="xp-actions-history">
                        <div class="xp-actions-history-list">
                            <div class="xp-actions-history-item">                                            
                                <h6 class="mb-1 text-black">Start Web Designing</h6>
                                <p class="text-muted font-12">5 mins ago</p>
                                <p class="m-b-30">We are start working on USA Project</p>
                            </div>
                        </div>
                        <div class="xp-actions-history-list">
                            <div class="xp-actions-history-item">
                                <h6 class="mb-1 text-black">Completed Theme Development</h6>
                                <p class="text-muted font-12">15 mins ago</p>
                                <p class="m-b-30">We are completed a theme development into 5 days</p>
                            </div>
                        </div>
                        <div class="xp-actions-history-list">
                            <div class="xp-actions-history-item">
                                <h6 class="mb-1 text-black">Project Submitted</h6>
                                <p class="text-muted font-12">30 mins ago</p>
                                <p class="m-b-30">We are done process of submitted project</p>
                            </div>
                        </div>
                        <div class="xp-actions-history-list">
                            <div class="xp-actions-history-item">
                                <h6 class="mb-1 text-black">Received a Payment</h6>
                                <p class="text-muted font-12">45 mins ago</p>
                                <p class="m-b-30">We got monthy payment from clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">To do Lists</h5>
                </div>
                <div class="card-body">
                    <div class="xp-to-do-list">
                        <ul id="list-group" class="list-group list-group-flush"></ul>
                        <form class="add-items">
                            <div class="input-group mt-3">
                                <input type="text" class="form-control" id="todo-list-item" placeholder="What do you need to do today?" aria-label="What do you need to do today?" aria-describedby="button-addon-to-do-list">
                                <div class="input-group-append">
                                    <button class="btn btn-primary add" id="button-addon-to-do-list" type="submit">Add to List</button>
                                </div>
                            </div>
                        </form>
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
<!-- Knob Chart JS -->
<script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/js/init/knob-init.js') }}"></script>
<!-- To Do List JS -->
<script src="{{ asset('assets/js/init/to-do-list-init.js') }}"></script>
@endsection 