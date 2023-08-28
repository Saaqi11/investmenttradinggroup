@extends("admin-backend.layouts.main")
@section("content")
<div class="row mt-4 email-listings">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header ">
                    <div class="row">
						<div class="col-12">
							<h4>Member Emails</h4>
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
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email Id</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Membership Levels</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Download Attachment</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sent to All</th>
						</tr>
						</thead>
						<tbody>
							@if(!empty($emailRecords) && count($emailRecords) > 0)
								@foreach($emailRecords as $emailRecord)
									<tr>
										<td class="text-sm font-weight-normal">{{ $emailRecord->id }}</td>
										<td class="text-sm font-weight-normal">{{ $emailRecord->subject }}</td>
										<td class="text-sm font-weight-normal">{{ $emailRecord->membership_levels }}</td>
										<td class="text-sm font-weight-normal">{{ strip_tags($emailRecord->message) }}</td>
										<td class="text-sm font-weight-normal"><a href="{{$emailRecord->attachment}}" download class="download-attachment-btn">Download</a></td>
										<td class="text-sm font-weight-normal">{{ $emailRecord->is_all ? 'Yes' : 'No' }}</td>
									</tr>
								@endforeach
							@else
								<tr>
									<td colspan="5">
										There is not any$emailRecords available
									</td>
								</tr>
							@endif
						</tbody>
					</table>
					<div class="mt-3 email-pagination">
    {{ $emailRecords->links() }}
</div>
                </div>
            </div>
        </div>
    </div>
@endsection