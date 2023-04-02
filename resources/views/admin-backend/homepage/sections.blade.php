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

	    // (function() {
		//     "use strict";
		//
		//     const table = document.getElementById('datatable-search');
		//     const tbody = table.querySelector('tbody');
		//
		//     var currRow = null,
		// 	    dragElem = null,
		// 	    mouseDownX = 0,
		// 	    mouseDownY = 0,
		// 	    mouseX = 0,
		// 	    mouseY = 0,
		// 	    mouseDrag = false;
		//
		//     function init() {
		// 	    bindMouse();
		//     }
		//
		//     function bindMouse() {
		// 	    document.addEventListener('mousedown', (event) => {
		// 		    if(event.button != 0) return true;
		//
		// 		    let target = getTargetRow(event.target);
		// 		    if(target) {
		// 			    currRow = target;
		// 			    addDraggableRow(target);
		// 			    currRow.classList.add('is-dragging');
		//
		//
		// 			    let coords = getMouseCoords(event);
		// 			    mouseDownX = coords.x;
		// 			    mouseDownY = coords.y;
		//
		// 			    mouseDrag = true;
		// 		    }
		// 	    });
		//
		// 	    document.addEventListener('mousemove', (event) => {
		// 		    if(!mouseDrag) return;
		//
		// 		    let coords = getMouseCoords(event);
		// 		    mouseX = coords.x - mouseDownX;
		// 		    mouseY = coords.y - mouseDownY;
		//
		// 		    moveRow(mouseX, mouseY);
		// 	    });
		//
		// 	    document.addEventListener('mouseup', (event) => {
		// 		    if(!mouseDrag) return;
		//
		// 		    currRow.classList.remove('is-dragging');
		// 		    table.removeChild(dragElem);
		//
		// 		    dragElem = null;
		// 		    mouseDrag = false;
		// 	    });
		//     }
		//
		//
		//     function swapRow(row, index) {
		// 	    let currIndex = Array.from(tbody.children).indexOf(currRow),
		// 		    row1 = currIndex > index ? currRow : row,
		// 		    row2 = currIndex > index ? row : currRow;
		//
		// 	    tbody.insertBefore(row1, row2);
		//     }
		//
		//     function moveRow(x, y) {
		// 	    dragElem.style.transform = "translate3d(" + x + "px, " + y + "px, 0)";
		//
		// 	    let	dPos = dragElem.getBoundingClientRect(),
		// 		    currStartY = dPos.y, currEndY = currStartY + dPos.height,
		// 		    rows = getRows();
		//
		// 	    for(var i = 0; i < rows.length; i++) {
		// 		    let rowElem = rows[i],
		// 			    rowSize = rowElem.getBoundingClientRect(),
		// 			    rowStartY = rowSize.y, rowEndY = rowStartY + rowSize.height;
		//
		// 		    if(currRow !== rowElem && isIntersecting(currStartY, currEndY, rowStartY, rowEndY)) {
		// 			    if(Math.abs(currStartY - rowStartY) < rowSize.height / 2)
		// 				    swapRow(rowElem, i);
		// 		    }
		// 	    }
		//     }
		//
		//     function addDraggableRow(target) {
		// 	    dragElem = target.cloneNode(true);
		// 	    dragElem.classList.add('draggable-table__drag');
		// 	    dragElem.style.height = getStyle(target, 'height');
		// 	    dragElem.style.background = getStyle(target, 'backgroundColor');
		// 	    for(var i = 0; i < target.children.length; i++) {
		// 		    let oldTD = target.children[i],
		// 			    newTD = dragElem.children[i];
		// 		    newTD.style.width = getStyle(oldTD, 'width');
		// 		    newTD.style.height = getStyle(oldTD, 'height');
		// 		    newTD.style.padding = getStyle(oldTD, 'padding');
		// 		    newTD.style.margin = getStyle(oldTD, 'margin');
		// 	    }
		//
		// 	    table.appendChild(dragElem);
		//
		//
		// 	    let tPos = target.getBoundingClientRect(),
		// 		    dPos = dragElem.getBoundingClientRect();
		// 	    dragElem.style.bottom = ((dPos.y - tPos.y) - tPos.height) + "px";
		// 	    dragElem.style.left = "-1px";
		//
		// 	    document.dispatchEvent(new MouseEvent('mousemove',
		// 		    { view: window, cancelable: true, bubbles: true }
		// 	    ));
		//     }
		//
		//     function getRows() {
		// 	    return table.querySelectorAll('tbody tr');
		//     }
		//
		//     function getTargetRow(target) {
		// 	    let elemName = target.tagName.toLowerCase();
		//
		// 	    if(elemName == 'tr') return target;
		// 	    if(elemName == 'td') return target.closest('tr');
		//     }
		//
		//     function getMouseCoords(event) {
		// 	    return {
		// 		    x: event.clientX,
		// 		    y: event.clientY
		// 	    };
		//     }
		//
		//     function getStyle(target, styleName) {
		// 	    let compStyle = getComputedStyle(target),
		// 		    style = compStyle[styleName];
		//
		// 	    return style ? style : null;
		//     }
		//
		//     function isIntersecting(min0, max0, min1, max1) {
		// 	    return Math.max(min0, max0) >= Math.min(min1, max1) &&
		// 		    Math.min(min0, max0) <= Math.max(min1, max1);
		//     }
		//
		//
		//
		//     init();
		//
	    // })();
    </script>
@endpush