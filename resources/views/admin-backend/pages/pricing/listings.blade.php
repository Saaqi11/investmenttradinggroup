@extends("admin-backend.layouts.main")
@section("content")
<div class="row mt-4 pricing-listings">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header ">
                    <div class="row">
						<div class="col-12">
							<h4>Monthly Pricing</h4>
                            <p>Existing memberships are not changed by changes in pricing here - this is only for new members</p>
						</div>
					</div>
                    <?php $prices = json_decode($pricings[0]->price, true); ?>
                    <div class="pricings-holder">
                        <form action="{{ route('admin.updatePricings') }}" method="POST" id="pricing-form">
                            @csrf
                            <div class="pricing-row">
                                <div class="pricing pricing-1">
                                    <label for="price1">Level 1</label>
                                    <input type="number" id="price1" name="price1" value="{{ $prices['L1'] }}">
                                </div>
                                <div class="pricing pricing-2">
                                    <label for="price2">Level 2</label>
                                    <input type="number" id="price2" name="price2" value="{{ $prices['L2'] }}">
                                </div>
                                <div class="pricing pricing-3">
                                    <label for="price3">Level 3</label>
                                    <input type="number" id="price3" name="price3" value="{{ $prices['L3'] }}">
                                </div>
                                <div class="pricing pricing-4">
                                    <label for="price4">Level 4</label>
                                    <input type="number" id="price4" name="price4" value="{{ $prices['L4'] }}">
                                </div>

                                <div class="pricing tax">
                                    <label for="tax">Tax</label>
                                    <input type="number" id="tax" name="tax" value="{{ $pricings[0]->tax }}">
                                </div>
                                <div class="pricing-submit-button">
                                    <button type="submit" name="submit" class="admin-primary-btn">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
