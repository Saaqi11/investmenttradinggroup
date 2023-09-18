@extends('public-layout.main')
@section('content')

    <section class="upgrade-subscription-page">
        <div class="container">
            <div class="upgrade-content-holder">
                <div class="upgrade-content-header">
                    <h3>Another thing to do with Bitcoin but user level is too low</h3>
                    <p>Your level is {{ $user->subscription_level }}</p>
                </div>
                <div class="upgrade-it">
                    <h2>You're Missing out!</h2>
                    <h3><i>Upgrade your membership to view this</i></h3>
                    <a href="/subscriptions" class="big-primary-btn">Go to membership options</a>
                </div>
            </div>
        </div>
    </section>

@endsection
