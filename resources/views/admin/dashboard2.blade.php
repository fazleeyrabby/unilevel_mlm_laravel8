@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Drixo</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <h5 class="page-title">Dashboard</h5>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cube-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">New Orders</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">Last : 1325</p>
                    </div>
                    <h5 class="m-0">1456<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-account-network float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">New Users</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                        <span class="badge badge-success"> +22% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">Last : 3426</p>
                    </div>
                    <h5 class="m-0">3567<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Average Price</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-danger"> -02% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">Last : 15.8</p>
                    </div>
                    <h5 class="m-0">14.5<i class="mdi mdi-arrow-down text-danger ml-2"></i></h5>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cart-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Total Sales</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-success"> +10% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">Last : 14256</p>
                    </div>
                    <h5 class="m-0">15234<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<!-- end row -->
<div class="row">
    <div class="col-xl-8">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Email Sent</h4>

                <ul class="list-inline widget-chart m-t-20 text-center">
                    <li>
                        <h4 class=""><b>3652</b></h4>
                        <p class="text-muted m-b-0">Marketplace</p>
                    </li>
                    <li>
                        <h4 class=""><b>5421</b></h4>
                        <p class="text-muted m-b-0">Last week</p>
                    </li>
                    <li>
                        <h4 class=""><b>9652</b></h4>
                        <p class="text-muted m-b-0">Last Month</p>
                    </li>
                </ul>

                <div id="morris-area-example" style="height: 300px"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Revenue</h4>

                <ul class="list-inline widget-chart m-t-20 text-center">
                    <li>
                        <h4 class=""><b>5248</b></h4>
                        <p class="text-muted m-b-0">Marketplace</p>
                    </li>
                    <li>
                        <h4 class=""><b>321</b></h4>
                        <p class="text-muted m-b-0">Last week</p>
                    </li>
                    <li>
                        <h4 class=""><b>964</b></h4>
                        <p class="text-muted m-b-0">Last Month</p>
                    </li>
                </ul>
                <div id="morris-bar-example" style="height: 300px"></div>
            </div>
        </div>
    </div>
    
</div>
<!-- end row -->
<div class="row">
    <div class="col-xl-4">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Monthly Earning</h4>
                <div class="">
                    
                    <div class="row align-items-center mb-5">
                        <div class="col-md-6">
                            <div class="pl-3">
                                <h3>$6451</h3>
                                <h6>Monthly Earning</h6>
                                <p class="text-muted">Sed ut perspiciatis unde omnis</p>
                                <a href="#" class="text-primary">Learn more...</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <span class="peity-pie" data-peity='{ "fill": ["#508aeb", "#f2f2f2"]}' data-width="84" data-height="84">6/8</span>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-6">
                            <div>
                                <div class="mb-4">
                                    <span class="peity-donut" data-peity='{ "fill": ["#508aeb", "#f2f2f2"], "innerRadius": 22, "radius": 32 }' data-width="60" data-height="60">2,4</span>
                                </div>
                                <h4>42%</h4>
                                <p class="mb-0 text-muted">Online Earning</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <div class="mb-4">
                                    <span class="peity-donut" data-peity='{ "fill": ["#508aeb", "#f2f2f2"], "innerRadius": 22, "radius": 32 }' data-width="60" data-height="60">8,4</span>
                                </div>
                                <h4>58%</h4>
                                <p class="text-muted mb-0">Offline Earning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-b-30 blog-wid">
            <div class="card-body">
                <div class="float-left p-1 mr-3">
                    <div class="text-center bg-primary rounded p-3">
                        <p class="text-white-50 mb-4">October</p>
                        <h2 class="text-white mb-0">24</h2>
                    </div>
                </div>
                <div class="post-details p-2">
                    <h6 class="mt-0"><a href="#" class="text-dark">It will be as simple as Occidental</a></h6>
                    <p class="text-muted">Everyone realizes why a new common language would be desirable.</p>
                    <p class="mb-0">By <a href="#" class="text-primary">Daniel Sons</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Recent Activity Feed</h4>
                <ul class="list-unstyled activity-list">
                    <li class="activity-item">
                        <span class="activity-date">12 Oct</span>
                        <span class="activity-text">Responded to need “Volunteer Activities”</span>
                        <p class="text-muted mt-2">Everyone realizes why a new common language would be desirable common words.</p>
                    </li>
                    <li class="activity-item">
                        <span class="activity-date">13 Oct</span>
                        <span class="activity-text">Uploaded this Images</span>
                        <p class="text-muted mt-2">Their separate existence is a myth</p>
                        <div>
                            <a href="#" class="activity-item-img"><img src="assets/images/small/img-1.jpg" alt="" class="rounded mb-2"></a>
                            <a href="#" class="activity-item-img"><img src="assets/images/small/img-2.jpg" alt="" class="rounded mb-2"></a>
                        </div>
                    </li>
                    <li class="activity-item">
                        <span class="activity-date">14 Oct</span>
                        <span class="activity-text">Uploaded this File</span>
                        <p class="text-muted mt-2 mb-4">The new common language will be more simple and regular their pronunciation.</p>
                        <div>
                            <a href="#" class="text-muted">
                                <i class="ion-ios7-folder h1 p-3 bg-light rounded"></i>
                                <p class="mt-2 mb-0">background.psd</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="card bg-primary m-b-30 text-white weather-box">
                    <div class="card-body">
                        <div class="text-center">
                            <div>
                                <canvas id="rain" width="56" height="56"></canvas>
                            </div>
                            <div>
                                <h3>28° c</h3>
                                <h6>Heavy rain</h6>
                                <h4 class="mt-4">New York</h4>
                            </div>
                        </div>
                        <div class="weather-icon">
                            <i class="mdi mdi-weather-pouring"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card bg-warning m-b-30 text-white weather-box">
                    <div class="card-body">
                        <div class="text-center">
                            <div>
                                <canvas id="partly-cloudy-day" width="56" height="56"></canvas>
                            </div>
                            <div>
                                <h3>32° c</h3>
                                <h6>Partly cloudy</h6>
                                <h4 class="mt-4">California</h4>
                            </div>
                        </div>
                        <div class="weather-icon">
                            <i class="mdi mdi-weather-partlycloudy"></i>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Sales Analytics</h4>
                        <div id="morris-donut-example" class="morris-charts" style="height: 265px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Recent Candidates</h4>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2017/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2017/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2015/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2018/03/29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2014/11/28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2018/12/02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2018/08/06</td>
                                <td>$137,500</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop