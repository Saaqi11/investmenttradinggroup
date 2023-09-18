@extends('public-layout.main')
@section('content')

    <section class="subscription-page grading-block" id="payment-block">
        <div class="container">
            <div class="text-holder">
                    <h2>You are not an active member, please upgrade below</h2>
            </div>
            <?php $prices = json_decode($pricings[0]->price, true); ?>
            <div class="four-col">
                <div class="col">
                    <ul class="grades">
                        <li class="heading">Level 1</li>
                        <li><span class=year-wrap><span class="amount">$</span>{{ $prices['L1'] }}</span> per month</li>
                        <li>Abc:Very Limited</li>
                        <li>DEF:Very Limited</li>
                        <li>-</li>
                        <li>-</li>
                        <li>-</li>
                        <li>
                            Asia Cup 2023 will be played from 30 August to 17 September in Pakistan/Sri Lanka


                            Copyright © WebCric 2023
                            <span>-</span>
                            <div class="button">
                                <a href="{{ route("get-membership", ['subscription' => 'l1']) }}" class="btn">Get Started</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="grades">
                        <li class="heading">Level 2</li>
                        <li><span class=year-wrap><span class="amount">$</span>{{ $prices['L2'] }}</span> per month</li>
                        <li>ABC:Very Limited</li>
                        <li>DEF:Very Limited</li>
                        <li>HIG:Less Limited</li>
                        <li>-</li>
                        <li>-</li>
                        <li>
                            <span>-</span>
                            <div class="button">
                                <a href="{{ route("get-membership", ['subscription' => 'l2']) }}" class="btn">Better Value</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="grades">
                        <li class="heading">Level 3</li>
                        <li><span class=year-wrap><span class="amount">$</span>{{ $prices['L3'] }}</span> per month</li>
                        <li>ABC</li>
                        <li>DEF</li>
                        <li>HIG</li>
                        <li>WED</li>
                        <li>POL</li>
                        <li>
                            <span>-</span>
                            <div class="button">
                                <a href="{{ route("get-membership", ['subscription' => 'l3']) }}" class="btn">Even better Value</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="grades">
                        <li class="heading">Level 4</li>
                        <li><span class=year-wrap><span class="amount">$</span>{{ $prices['L4'] }}</span> per month</li>
                        <li>Abc:Unimited*</li>
                        <li>DEF:Unimited*</li>
                        <li>HIG:Unimited*</li>
                        <li>WED:Unimited*</li>
                        <li>POL:Unimited*</li>
                        <li>
                            <span>OTHER:Unimited*</span>
                            <div class="button">
                                <a href="{{ route("get-membership", ['subscription' => 'l4']) }}" class="btn">Most Value</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text">
                <p>***All monthly services auto renew and run to the end og your renewal period. Cancellation means auto-renew will cease from the start of the next period. "Unlimited means you get access to all we have done</p>
            </div>
        </div>
    </section>

@endsection
