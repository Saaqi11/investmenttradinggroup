<header class="header">
    <div class="container">
        @if(isset($loginError))
            <span class="alert alert-danger">{{$loginError}}</span>
        @endif
        <strong class="logo">
            <a href="#" class="btn-logo">ITG</a>
        </strong>
        <div class="btn-holder open-close">
            <a href="#" class="btn opener">Member Login</a>
            <div class="login-area">
                <div class="text-login">
                    <h2>Member login</h2>
                    <p>Subscribe to become a member</p>
                </div>
                <form class="form-area" method="post" action="{{ route("login") }}">
                    @csrf
                    <div class="field">
                        <label>Email *</label>
                        <input type="text" name="email" placeholder="email@address.com">
                    </div>
                    <div class="field">
                        <div class="label-wrap">
                            <label>Password *</label>
                            <span class="text">Reset Password</span>
                        </div>
                        <input type="password" name="password" placeholder="*************">
                    </div>
                </form>
                <div class="button-area">
                    <a href="#" class="btn">cancel</a>
                    <button href="#" type="submit" class="btn">Login</button>
                </div>
            </div>
        </div>
    </div>
</header>