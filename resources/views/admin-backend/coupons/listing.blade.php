@extends('admin-backend.layouts.main')
@section('content')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card z-index-2 p-3 py-0">
                <div class="card-header pb-0 ">
                    <div class="row">
                        <div class="col-12">
                            <h5  class="text-5xl font-weight-bolder mb-0">ADMIN Subscription Coupons</h5>
                            <p class="font-weight-bold text-sm">Customers use this at checkout to receive a discount for one or more specific membership levels</p>
                        </div>
                    </div>
                </div>
                <form method="post">
                    @csrf
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 p-4 border-radius-2xl">
                                <div class="row">
                                    <div class="col-2 itg-border-right">
                                        <h6 class="font-weight-bolder">Coupon Code-</h6>
                                        <input type="text" placeholder="Example: TR43E"/>
                                    </div>
                                    <div class="col-3 itg-pad">
                                        <h6 class="font-weight-bolder">Monthly Discount</h6>
                                        <input type="text" placeholder="10%"/>
                                        <p class="font-weight-bold">Applies to all level</p>
                                    </div>
                                    <div class="col-2">
                                        <h6 class="font-weight-bolder">Time Limit</h6>
                                        <div class="radio-wrapper">
                                            <div class="radio-input">
                                                <input  class="itg-radio" type="radio" name="noLimit" value="true" /><span>No Limit</span>
                                            </div>
                                            <div class="radio-input">
                                                <input class="itg-radio" type="radio" name="limit" value="false"/><input class="itg-input" type="text" placeholder="Days"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <h6 class="font-weight-bolder">Use Limit</h6>
                                        <div class="radio-wrapper">
                                            <div class="radio-input">
                                                <input  class="itg-radio" type="radio" name="noLimit" value="true" /><span>No Limit</span>
                                            </div>
                                            <div class="radio-input">
                                                <input class="itg-radio" type="radio" name="limit" value="false"/><input class="itg-input" type="text" placeholder="Times"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 itg-pad">
                                        <h6 class="font-weight-bolder">Email association and % amount</h6>
                                        <div class="ii-wrapper">
                                            <i class="fal fa-user-alt"></i><input type="text" placeholder="fed@email.com"/>
                                        </div>
                                        <div class="ii-wrapper">
                                            <i class="fal fa-money-check-alt"></i><input type="text" placeholder="% Amount"/>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Next">Creat Coupon</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Coupons</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Level</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Discount</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Created</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Expires</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Uses</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Email</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Archive</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">URL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-sm font-weight-normal text-center">% 10percentoff</td>
                                <td class="text-sm font-weight-normal text-center">1,2,3,4</td>
                                <td class="text-sm font-weight-normal text-center">10%/m</td>
                                <td class="text-sm font-weight-normal text-center">123 days ago</td>
                                <td class="text-sm font-weight-normal text-center">-</td>
                                <td class="text-sm font-weight-normal text-center">4</td>
                                <td class="text-sm font-weight-normal text-center">ff@gmai.com</td>
                                <td class="text-sm font-weight-normal text-center"><a><i class="fal fa-eye"></i></a></td>
                                <td class="text-sm font-weight-normal text-center"><a><i class="fal fa-link"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
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
