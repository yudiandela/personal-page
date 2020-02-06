@extends('layouts.master-dashboard')

@section('content-dashboard')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="form-inline">
                    <div class="form-group">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control shadow border-white" id="dash-daterange">
                            <div class="input-group-append">
                                <span class="input-group-text bg-primary border-primary text-white">
                                    <i class="mdi mdi-calendar-range font-13"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-primary btn-sm ml-2 font-14">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-primary btn-sm ml-1 font-14">
                        <i class="mdi mdi-filter-variant"></i>
                    </a>
                </form>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                        <i class="fe-heart font-22 avatar-title text-info"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1">$<span data-plugin="counterup">58,947</span></h3>
                        <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                        <i class="fe-shopping-cart font-22 avatar-title text-primary"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                        <p class="text-muted mb-1 text-truncate">Today's Sales</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                        <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                        <p class="text-muted mb-1 text-truncate">Conversion</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                        <i class="fe-eye font-22 avatar-title text-primary"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span data-plugin="counterup">78.41</span>k</h3>
                        <p class="text-muted mb-1 text-truncate">Today's Visits</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-12">
        <!-- Portlet card -->
        <div class="card">
            <div class="card-body">
                <div class="card-widgets">
                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                    <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false"
                        aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                </div>
                <h4 class="header-title mb-0">Projects</h4>

                <div id="cardCollpase4" class="collapse pt-3 show">
                    <div class="table-responsive">
                        <table class="table table-centered table-borderless mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Project Name</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Clients</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>App design and development</td>
                                    <td>Jan 03, 2015</td>
                                    <td>Oct 12, 2018</td>
                                    <td>
                                        <span class="badge bg-soft-info text-info p-1">
                                            Work in Progress
                                        </span>
                                    </td>
                                    <td>Halette Boivin</td>
                                    <td><a href="#" class="btn btn-link">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>Coffee detail page - Main Page</td>
                                    <td>Sep 21, 2016</td>
                                    <td>May 05, 2018</td>
                                    <td>
                                        <span class="badge bg-soft-warning text-warning p-1">
                                            Pending
                                        </span>
                                    </td>
                                    <td>Durandana Jolicoeur</td>
                                    <td><a href="#" class="btn btn-link">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>Poster illustation design</td>
                                    <td>Mar 08, 2018</td>
                                    <td>Sep 22, 2018</td>
                                    <td>
                                        <span class="badge bg-soft-success text-success p-1">
                                            Completed
                                        </span>
                                    </td>
                                    <td>Lucas Sabourin</td>
                                    <td><a href="#" class="btn btn-link">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>Landing page design - Home</td>
                                    <td>Coming Soon</td>
                                    <td>May 25, 2021</td>
                                    <td>
                                        <span class="badge bg-soft-dark text-dark p-1">
                                            Coming Soon
                                        </span>
                                    </td>
                                    <td>Karel Auberjo</td>
                                    <td><a href="#" class="btn btn-link">Detail</a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div> <!-- .table-responsive -->
                </div> <!-- end collapse-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
@endsection
