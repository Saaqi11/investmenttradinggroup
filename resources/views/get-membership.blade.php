@extends("public-layout.main")
@section("content")
@php
$discount = 0;
@endphp
    <section class="information-block">
        <div class="container">
            <div class="text-holder">
                <h2>You're becoming a member!</h2>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color: red">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="two-cols">
                <form class="form" action="{{ route("user-signup", [$subscription]) }}" method="post">
                    @csrf
                    <div class="form-area">
                        <h3>Information</h3>
                        <input type="hidden" name="subscription_level" value="{{strtoupper($subscription)}}">
                        <div class="field-full">
                            <input type="text" placeholder="Your full name" name="name" required>
                        </div>
                        <div class="field-full">
                            <input type="text" placeholder="Your email address" name="email" required>
                        </div>
                        <div class="form-wrap">
                            <div class="field">
                                <input type="password" placeholder="password" name="password" required>
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="field-full field-top">
                            <select style="color: #778A99;;" name="country" required>
                                <option value="United States">United States</option>
                                <option value="UK">UK</option>
                                <option value="Australia">Australia</option>
                                <option value="New Zealand">New Zealand</option>
                            </select>
                        </div>
                        {{--<form class="form">
                            <h3>billing</h3>
                            <div class="form-wrap">
                                <div class="field">
                                    <input type="password" placeholder="password">
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Confirm Password">
                                </div>
                            </div>
                        </form>--}}
                        <br>
                        <div class="form-payment">
                            <h3>Payment</h3>
                            <p>Your payment information is securely handled by PayPal</p>
                        </div>
                        <div class="form-check mb-2 custom-control custom-checkbox">
                            <input type="checkbox" id="checkterms" class="custom-control-input form-check-input mr-2" required="">
                            <label for="checkterms" class="custom-control-label">I agree to the Privacy Policy and the Terms of Service</label>
                        </div>
                        <div class="btn-holder">
                            {{--id="paypal-button-container"--}}
                            <button class="btn" type="submit">Securely Pay</button>
                        </div>
                    </div>
                </form>
                <div class="amount-area">
                    <div class="apply-amount">
                        <div class="prize-area">
                            <div class="monthly-amount">
                                <div class="amount-wrap">
                                    <span class="level">Monthly Membership</span>
                                    <div class="amount"><span class="bold-amount">${{ $subscriptionPrice }}/</span> <span>month</span></div>
                                </div>
                                <div class="payment-area">
                                    <span class="prize">${{ $subscriptionPrice }}</span>
                                    <span class="light">/month</span>
                                </div>
                            </div>
                        </div>
                        <div class="apply">
                            <div class="apply-text col">
                                <input type="text" placeholder="Promo Code">
                            </div>
                            <div class="btn-holder col">
                                <a href="#" class="btn">Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="total-amount">
                        <div class="heading">
                            <h6>UD$ per month</h6>
                        </div>
                        <div class="list-price">
                            <div class="list-border">
                                <div class="list">
                                    <span>List Price</span>
                                    <span>{{ $subscriptionPrice }}</span>
                                </div>
                                <div class="list">
                                    <span>Discount</span>
                                    <span>{{ $discount }}</span>
                                </div>
                            </div>
                            <div class="list-border">
                                <div class="list">
                                    <span>After discount</span>
                                    <span>{{ $subscriptionPrice - $discount }}</span>
                                </div>
                                <div class="list">
                                    <span>Tax @ 10%</span>
                                    <span>{{ ($subscriptionPrice * 0.1) }}</span>
                                </div>
                            </div>
                            <div class="list">
                                <span>Recurring Total</span>
                                <span>{{ ($subscriptionPrice * 0.1) + $subscriptionPrice }}</span>
                            </div>
                        </div>
                        <div class="text">
                            <h6>Renews on monthly anniversary date</h6>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="text-heading">
                <h2>Congratulations!   Welcome to the club.</h2>
            </div>--}}
        </div>
    </section>
@endsection
@push('additional-scripts')
    <script src="https://www.paypal.com/sdk/js?client-id={{ env("PAYPAL_CLIENT_ID") }}&components=buttons"></script>
    <script>
	    paypal.Buttons({
		    style: {
			    layout: 'vertical',
			    color:  'blue',
			    shape:  'rect',
			    label:  'paypal'
		    }
	    }).render('#paypal-button-container');
    </script>
@endpush
