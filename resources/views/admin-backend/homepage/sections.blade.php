@extends('admin-backend.layouts.main')
@section('content')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header ">
                    <div class="row">
						<div class="col-11">
							<h4>Homepage Sections</h4>
							<p class="text-sm">
							</p>
						</div>
						<div class="col-1">
							<a href="{{ route("admin.homepage.addSection") }}" class="btn btn-primary">Add</a>
						</div>
					</div>
                </div>
                <div class="card-body p-3">
					<table class="table table-flush draggable-table" id="datatable-search">
						<thead class="thead-light">
						<tr>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Heading</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sub Heading</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
						</tr>
						</thead>
						<tbody>
							@if(!empty($sections) && count($sections) > 0)
								@foreach($sections as $section)
									<tr>
										<td class="text-sm font-weight-normal section-order" id="section-order-{{ $section->id }}"><input data-id="{{$section->id}}" class="form-control" value="{{$section->section_order}}"></td>
										<td class="text-sm font-weight-normal">{{ $section->heading }}</td>
										<td class="text-sm font-weight-normal">{{ $section->sub_heading }}</td>
										<td class="text-sm font-weight-normal">
											<div class="form-check form-switch">
												<input class="form-check-input switch-status" data-id="{{ $section->id }}" type="checkbox" id="flexSwitchCheckDefault" {{ $section->status ? "checked" : ""}}>
											</div>
										</td>
										<td>
											<a href="{{ route("admin.homepage.editSection", $section->id) }}" style="color: #a77a23"><i class="fal fa-edit"></i></a>
											<a href="{{ route("admin.homepage.deleteSection", $section->id) }}" style="color: red"><i class="fal fa-trash"></i></a>
										</td>
									</tr>
								@endforeach
							@else
								<tr>
									<td colspan="5">
										There is not any section available
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
@push("additional-scripts")
    <script>
		$(".section-order").on("change", (e) => {
			let id = $(e.target).data("id");
			$.ajax({
				url: "/admin/homepage/update-section-order/"+id,
				type: "PUT",
				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
				data: {order: $(e.target).val()},
				success: function(response){
					if(response) {
						toastr.success("Order of section has been updated")
					} else {
						toastr.success("Something wrong occurred");
					}
				}
			});
		});
		$(".switch-status").on("change", (e) => {
			let status = $(e.target).is(":checked") ? 1 : 0;
			let id = $(e.target).data("id");

			$.ajax({
				url: "/admin/homepage/update-section-status/"+id,
				type: "PUT",
				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
				data: {status: status},
				success: function(response){
					if(response) {
						toastr.success("Status has been updated");
					} else {
						toastr.error("Something wrong occurred");
					}
				}
			});
		});

    </script>
@endpush