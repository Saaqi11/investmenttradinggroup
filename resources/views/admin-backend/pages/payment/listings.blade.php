@extends("admin-backend.layouts.main")
@section("content")
<div class="row mt-4 payment-listings">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header ">
                    <div class="row">
						<div class="col-12">
							<h4>Payments</h4>
							<p class="text-sm">
							</p>
						</div>
						<!-- <div class="col-1">
							<a href="{{ route("admin.email.sendEmail") }}" class="btn btn-primary">Add</a>
						</div> -->
					</div>
                </div>
                <div class="card-body p-3">
					<table class="table table-flush draggable-table" id="datatable-search">
						<thead class="thead-light">
						<tr>
						<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment Id</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subscription Level</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User Id</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Method</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment Date</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Paypal Plan ID</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Start Date</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">End Date</th>
						</tr>
						</thead>
						<tbody>
							@if(!empty($payments) && count($payments) > 0)
								@foreach($payments as $payment)
									<tr>
										<td class="text-sm font-weight-normal">{{ $payment->id }}</td>
										<td class="text-sm font-weight-normal">{{ str_replace('l', 'Level ', $payment->subscription_id) }}</td>
										<td class="text-sm font-weight-normal">{{ $payment->amount }} {{ $payment->currency }}</td>
										<td class="text-sm font-weight-normal">{{ strtolower($payment->status) }}</td>
										<td class="text-sm font-weight-normal">{{ $payment->user_id }}</td>
										<td class="text-sm font-weight-normal">{{ $payment->method }}</td>
										<td class="text-sm font-weight-normal" data-create-date="{{ $payment->create_date }}">{{ $payment->create_date }}</td>
										<td class="text-sm font-weight-normal">{{ $payment->paypal_plan_id }}</td>
										<td class="text-sm font-weight-normal"data-create-date="{{ $payment->start_date }}">{{ $payment->start_date }}</td>
										<td class="text-sm font-weight-normal"data-create-date="{{ $payment->end_date }}">{{ $payment->end_date }}</td>
									</tr>
								@endforeach
							@else
								<tr>
									<td colspan="5">
										There is not any payments available
									</td>
								</tr>
							@endif
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
@endsection