@extends("public-layout.main")
@section("content")
    <section class="information-block">
        <div class="container">
            <div class="text-holder">
                <h2>You're becoming a member!</h2>
            </div>
            <div class="two-cols">
                <div class="form-area">
                    <form class="form">
                        <h3>Information</h3>
                        <div class="field-full">
                            <input type="text" placeholder="Your email address">
                        </div>
                        <div class="form-wrap">
                            <div class="field">
                                <input type="password" placeholder="password">
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Confirm Password">
                            </div>
                        </div>
                    </form>
                    <form class="form">
                        <h3>billing</h3>
                        <div class="form-wrap">
                            <div class="field">
                                <input type="password" placeholder="password">
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="field-full field-top">
                            <select style="color: #778A99;;">
                                <option value="United States">United States</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                    </form>
                    <div class="form-payment">
                        <h3>Payment</h3>
                        <p>Your payment information is securely handled by PayPal</p>
                    </div>
                    <div class="form-check mb-2 custom-control custom-checkbox">
                        <input type="checkbox" id="checkterms" class="custom-control-input form-check-input mr-2" required="">
                        <label for="checkterms" class="custom-control-label">I agree to the Privacy Policy and the Terms of Service</label>
                    </div>
                    <div class="btn-holder">
                        <a href="#" class="btn">Securely Pay</a>
                    </div>
                </div>
                <div class="amount-area">
                    <div class="apply-amount">
                        <div class="prize-area">
                            <div class="monthly-amount">
                                <div class="amount-wrap">
                                    <span class="level">Monthly Membership - Level 4</span>
                                    <div class="amount">$9.99 <span class="bold-amount">$4.99</span> <span>month</span></div>
                                </div>
                                <div class="payment-area">
                                    <span class="prize">$9.99</span>
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
                                    <span>9.99</span>
                                </div>
                                <div class="list">
                                    <span>Discount</span>
                                    <span>5.00</span>
                                </div>
                            </div>
                            <div class="list-border">
                                <div class="list">
                                    <span>After discount</span>
                                    <span>4.99</span>
                                </div>
                                <div class="list">
                                    <span>Tax @ 10%</span>
                                    <span>0.50</span>
                                </div>
                            </div>
                            <div class="list">
                                <span>Recurring Total</span>
                                <span>5.49</span>
                            </div>
                        </div>
                        <div class="text">
                            <h6>Renews on monthly anniversary date</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-heading">
                <h2>Congratulations!   Welcome to the club.</h2>
            </div>
        </div>
    </section>
@endsection