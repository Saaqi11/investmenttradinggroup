@extends("public-layout.main")
@section("content")
      <div class="dashboard settings bg-color">
        <header class="header crypto-header">
            <div class="container">
              <strong class="logo">
                <a href="#" class="btn-logo">ITG</a>
              </strong>
              <a href="#" class="nav-opener"></a>
          </div>
        </header>
        <div class="two-blocks">
          <sidebar class="sidebar">
            <strong class="logo">
              <a href="#" class="btn-logo">ITG</a>
            </strong>
            <div class="text-area">
              <span class="icon"></span>
              <h1>Other</h1>
            </div>
            <div class="field">
              <input type="text" placeholder="Search [Enter]">
            </div>
            <div class="fav-list widget">
              <h3>Favorites</h3>
              <ul class="list">
                <li>
                  <a href="#">
                    <span class="text" data-text="Bitcoin">Bitcoin (BTC)</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="Apple">Apple (AAPL)</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="DXY">DXY</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="Gold Futures">Gold Futures</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="S&P 500">S&P 500</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="other-list widget">
              <h3>Other</h3>
              <ul class="list">
                <li>
                  <a href="#">
                    <span class="text" data-text="Gold Index">Gold Index</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="Gold Spot">Gold Spot</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="Silver">Silver</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="Platinum Spot">Platinum Spot</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="Copper Spot">Copper Spot</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="VIX Index">VIX Index</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="Palladium">Palladium</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="Brent Oil">Brent Oil</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="US 30 Year">US 30 Year</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="US 20 Year">US 20 Year</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="US 10 Year">US 10 Year</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="US 5 Year">US 5 Year</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="US 2 Year">US 2 Year</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text" data-text="US 3 Months">US 3 Months</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </sidebar>
          <section class="tab-block tab-crypto">
            <div class="tab-heading crpto-heading">
              <ul class="tabset">
                <li class="tab active">Crypto</li>
                <li class="tab">Futures</li>
                <li class="tab">Indices</li>
                <li class="tab">Stocks</li>
                <li class="tab">Forex</li>
                <li class="tab">Other</li>
              </ul>
              <ul>
                <li class="tab"><a href="{{ route('logout') }}">LOGOUT</a></li>
              </ul>
            </div>
            <div class="tabcontent active" style="display: block;" >
              <div class="text-tab crypto">
                <div class="text-holder">
                  <h3>Some content related to Bitcoin  for L1</h3>
                </div>
              </div>
            </div>

              <div class="show-data-holder">
                  <div class="cat-content-holder"></div>
                  <style class="cat-content-style"></style>
                  <script class="cat-content-js"></script>
              </div>

            <div class="tabcontent" style="display: none;">
              <div class="text-tab">
                <div class="text-holder">
                  <h3>Gold Futures Analysis</h3>
                </div>
              </div>
            </div>
            <div class="tabcontent" style="display: none;">
              <div class="text-tab">
                <div class="text-holder">
                  <h3>S&P500 Content</h3>
                </div>
              </div>
            </div>
            <div class="tabcontent" style="display: none;">
              <div class="text-tab">
                <div class="text-holder">
                  <h3>Some relevent text for Apple</h3>
                </div>
              </div>
            </div>
            <div class="tabcontent" style="display: none;">
              <div class="text-tab">
                <div class="text-holder">
                  <h3>This is a header for DXY</h3>
                </div>
              </div>
            </div>
            <div class="tabcontent" style="display: none;">
              <div class="text-tab">
                <div class="text-holder">
                  <h3>ABC Content has a long description that can extend across to here</h3>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
@endsection
@push('additional-scripts')

    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script>
        $(document).ready(function () {
                var selectedTab = '';
                var selectedFavTab = '';
                var selectedOtherTab = '';

                $('.tabset li.tab').click(function (e) {
                    e.preventDefault();
                    selectedTab = $(this).text();
                    sendAjaxRequest();
                });

                $('.fav-list a').click(function (e) {
                    e.preventDefault();
                    selectedFavTab = $(this).find('span').attr('data-text');
                    sendAjaxRequest();
                });

                $('.other-list a').click(function (e) {
                    e.preventDefault();
                    selectedOtherTab = $(this).find('span').attr('data-text');
                    sendAjaxRequest();
                });

                function sendAjaxRequest() {
                    $.ajax({
                        url: '/user/fetch-data',
                        method: 'GET',
                        data: {
                            selectedTab: selectedTab,
                            selectedFavTab: selectedFavTab,
                            selectedOtherTab: selectedOtherTab
                        },
                        success: function (data) {
                            if (selectedTab && selectedFavTab && selectedOtherTab && data === "Category not found") {
                                window.location.href = '/upgrade-subscription'; // Redirect to the "/upgrade-subscription" route
                            } else if (selectedTab && selectedFavTab && selectedOtherTab && data === "Inactive user") {
                                window.location.href = '/subscriptions';
                            }
                            var htmlData = data.html_data;
                            var cssData = data.css_data;
                            var jsData = data.js_data;
                            $('.cat-content-holder').html(htmlData);
                            $('.cat-content-style').html(cssData);
                            $('.cat-content-js').html(jsData);
                        },
                        error: function (xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
        });
    </script>
@endpush
