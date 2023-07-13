@extends("public-layout.main")
@section("content")
      <div class="bg-color">
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
            <div class="widget">
              <h3>Favorites</h3>
              <ul class="list">
                <li>
                  <a href="#">
                    <span class="text">Bitcoin (BTC)</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">Apple (AAPL)</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">DXY</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">Gold Futures</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">S&P 500</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="widget">
              <h3>Other</h3>
              <ul class="list">
                <li>
                  <a href="#">
                    <span class="text">Gold Index</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">Gold Spot</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">Silver</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">Platinum Spot</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">Copper Spot</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">VIX Index</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">Palladium</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">Brent Oil</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">US 30 Year</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">US 20 Year</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">US 10 Year</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">US 5 Year</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">US 2 Year</span>
                    <span class="icon-heart">
                      <i class="fas fa-heart"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="text">US 3 Months</span>
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
            <div class="category-block">
              <div class="three-cols">
                <div class="description">
                  <div class="col-wrap">
                    <div class="spot-coin">
                      <div class="field field-coin">
                        <label>Descriotion</label>
                        <input type="text" placeholder="Vitcoin (BTC)">
                      </div>
                      <div class="field field-coin">
                        <label>Associated search terms</label>
                        <input type="text" placeholder="BTC, BTCUSDT, BTCUSDC, BTCBUSD, BLX">
                      </div>
                    </div>
                    <div class="spot-coin">
                      <div class="field">
                        <label>CATEGORY</label>
                        <select>
                          <option value="Crypto">Crypto</option>
                          <option value="Crypto">Crypto</option>
                          <option value="Crypto">Crypto</option>
                        </select>
                      </div>
                      <div class="field">
                        <label>SUB-CATEGORY</label>
                        <select>
                          <option value="POW">POW</option>
                          <option value="POW">POW</option>
                          <option value="POW">POW</option>
                        </select>
                      </div>
                      <div class="field">
                        <label>TICKER</label>
                        <select>
                          <option value="BTCUSDT">BTCUSDT</option>
                          <option value="BTCUSDT">BTCUSDT</option>
                          <option value="BTCUSDT">BTCUSDT</option>
                        </select>
                      </div>
                      <div class="field">
                        <label>EXCHANGE</label>
                        <select>
                          <option value="BINANCE">BINANCE</option>
                          <option value="BINANCE">BINANCE</option>
                          <option value="BINANCE">BINANCE</option>
                        </select>
                      </div>
                    </div>
                  </div>  
                </div>
                <div class="amount-graph">
                  <div class="amount-wrap">
                    <div class="up-down">
                      <span class="heading-text">
                        Up%
                      </span>
                      <span class="amount">
                        100%
                      </span>
                    </div>
                    <div class="up-down">
                      <span class="heading-text">
                        Down%
                      </span>
                      <span class="amount">
                        50%
                      </span>
                    </div>
                  </div>
                  <div class="text-area">
                    <p>Percentage of the last closing price</p>
                  </div>
                </div>
                <div class="visibility-block">
                  <div class="grading-wrap">
                    <span class="text">Visibility L1 .. L4</span>
                    <ul class="visibility-list">
                      <li>L1</li>
                      <li>L2</li>
                      <li>L3</li>
                      <li>L4</li>
                      <li class="hide">Hide</li>
                    </ul>
                  </div>
                  <div class="btn-holder">
                    <a href="#" class="btn">Save / Update</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tabcontent active" style="display: block;" >
              <div class="text-tab crypto">
                <div class="text-holder">
                  <h3>Some content related to Bitcoin  for L1</h3>
                </div>
              </div>
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