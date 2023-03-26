@extends('admin-backend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">General Statistics</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card  mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Members</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            $
                                            {{--                                            <span class="text-success text-sm font-weight-bolder">+55%</span>--}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card ">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Revenue</p>
                                        <h5 class="font-weight-bolder mb-0">
{{--                                            <span class="text-success text-sm font-weight-bolder">+3%</span>--}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card  mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Today Pages Viewed</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{--                                            <span class="text-danger text-sm font-weight-bolder">-2%</span>--}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card ">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales via Coupon</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            $
{{--                                            <span class="text-success text-sm font-weight-bolder">+5%</span>--}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-lg-8">
                    <div class="card z-index-2">
                        <div class="card-header p-3 pb-0">
                            <h6>Memberships by month</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="line-chart" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <h6 class="mb-0">Total Memberships</h6>
                                <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" title="See each level's progress">
                                    <i class="fas fa-info"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-12 col-12 text-center">
                                    <div class="chart mt-5">
                                        <canvas id="chart-doughnut" class="chart-canvas" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">

        <div class="col-lg-12">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                    <h6>Recent Members</h6>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="card-body p-3">

                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-search">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Level</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Full Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email Address</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Coupon</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Paid</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Active</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">March 3</td>
                                    <td class="text-sm font-weight-normal">Level 1</td>
                                    <td class="text-sm font-weight-normal">John Doe</td>
                                    <td class="text-sm font-weight-normal">Johndoe@gmail.com</td>
                                    <td class="text-sm font-weight-normal">4F3FFF</td>
                                    <td class="text-sm font-weight-normal">4.99</td>
                                    <td class="text-sm font-weight-normal">Today</td>
                                    <td class="text-sm font-weight-normal">Australia</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7">
                <canvas width="700" height="550" class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card z-index-2">
                <div class="card-header pb-0 ">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h5>Sales Dashboard |</h5>
                            <h5>Total Members (8)</h5>

                            <div class="dropleft ms-3">
                                <button class="btn bg-gradient-dark dropdown-toggle" type="button" id="dropdownImport" data-bs-toggle="dropdown" aria-expanded="false">
                                    Today
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownImport">
                                    <li><a class="dropdown-item" href="javascript:;">Yesterday</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Last 7 days</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Last 30 days</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Last <input type="number" value="90" style="width: 70px"> days</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8 p-4 border-radius-2xl" style="margin-left: 35px; background-color: #f7f6f6">
                            <div class="row">
                                <div class="col-3">
                                    <p>Level 1</p>
                                    <h2>2</h2>
                                </div>
                                <div class="col-3">
                                    <p>Level 2</p>
                                    <h2>2</h2>
                                </div>
                                <div class="col-3">
                                    <p>Level 3</p>
                                    <h2>2</h2>
                                </div>
                                <div class="col-3">
                                    <p>Level 4</p>
                                    <h2>2</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 p-4 border-radius-2xl"  style="margin-left: 35px; background-color: #f7f6f6">
                            <p>Total Revenue </p>
                            <h2>$20.5</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('additional-scripts')
    <script>
    </script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush
