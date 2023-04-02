@extends("admin-backend.layouts.main")
@section("content")
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card m-6">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-11">
                            <p class="text-sm">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3" style="margin: 0px 60px 0px 60px">
                    <div class="row">
                        <div class="col-lg-11">
                            <h4>Edit Section</h4>
                        </div>
                        <div class="col-lg-1">
                            <button class="btn btn-primary" id="update-form"> Update </button>
                        </div>
                    </div>
                    <div class="row container">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="heading" id="heading" value="{{ $section->heading }}">
                            </div>
                            <div class="form-group">
                                <label>Sub Heading</label>
                                <input type="text" class="form-control" name="sub_heading" id="sub_heading" value="{{ $section->sub_heading }}">
                            </div>
                        </div>
                    </div>
                    @php
                        $html = explode("\n ", $section->html);
                    @endphp
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toolbar">
                                <span class="sr-only">Toggle toolbar</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Web Builder</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="toolbar">
                            <ul class="nav navbar-nav">
                                <li id="btnRun"><a><span class="glyphicon glyphicon-play" aria-hidden="true"></span> Run</a></li>
                                <li id="btnTidyUp"><a><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> TidyUp</a></li>
                                <li id="btnTogether"><a><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> Collaborate</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>

                    <!-- Sidebar -->
                    <div id="sidebar" style="left: 75px">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- Frameworks & Extensions -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Frameworks & Extensions
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="dropdown">
                                            <div class="btn-group">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    No-Library (pure JS)
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu scrollable-menu" id="dropdownMenu1" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation" class="dropdown-header">jQuery</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jQuery Compat (edge)</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jQuery (edge)</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jQuery 2.1.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jQuery 2.0.2</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jQuery 1.11.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jQuery 1.10.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jQuery 1.9.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jQuery 1.8.3</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jQuery 1.7.2</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jQuery 1.6.4</a></li>

                                                    <li role="presentation" class="dropdown-header">Prototype</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Prototype 1.7.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Prototype 1.6.1.0</a></li>

                                                    <li role="presentation" class="dropdown-header">YUI</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >YUI 3.17.2</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >YUI 3.16.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >YUI 3.14.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >YUI 3.10.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >YUI 3.8.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >YUI 3.7.3</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >YUI 3.6.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >YUI 3.5.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >YUI 2.8.0r4</a></li>

                                                    <li role="presentation" class="dropdown-header">No-Library</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >No-Library (pure JS)</a></li>

                                                    <li role="presentation" class="dropdown-header">Dojo</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Dojo (nightly)</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Dojo 1.10.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Dojo 1.9.4</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Dojo 1.8.7</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Dojo 1.7.6</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Dojo 1.6.2</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Dojo 1.5.3</a></li>

                                                    <li role="presentation" class="dropdown-header">Processing</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Processing.js 1.4.7</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Processing.js 1.4.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Processing.js 1.3.6</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Processing.js 1.2.3</a></li>

                                                    <li role="presentation" class="dropdown-header">ExtJS</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >ExtJS 4.2.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >ExtJS 4.1.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >ExtJS 4.1.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >ExtJS 3.4.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >ExtJS 3.1.0</a></li>

                                                    <li role="presentation" class="dropdown-header">Raphael</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Raphael 2.1.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Raphael 1.5.2 (min)</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Raphael 1.4</a></li>

                                                    <li role="presentation" class="dropdown-header">RightJS</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >RightJS 2.3.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >RightJS 2.1.1</a></li>

                                                    <li role="presentation" class="dropdown-header">Three.js</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Three.js r54</a></li>

                                                    <li role="presentation" class="dropdown-header">Zepto</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Zepto 1.0rc1</a></li>

                                                    <li role="presentation" class="dropdown-header">Enyo</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Enyo (nightly)</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Enyo 2.5.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Enyo 2.4.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Enyo 2.2.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Enyo 2.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Enyo 2.0.1</a></li>

                                                    <li role="presentation" class="dropdown-header">Shipyard</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Shipyard (nightly)</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Shipyard 0.2</a></li>

                                                    <li role="presentation" class="dropdown-header">Knockout.js</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Knockout.js 3.0.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Knockout.js 2.3.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Knockout.js 2.2.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Knockout.js 2.1.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Knockout.js 2.0.0</a></li>

                                                    <li role="presentation" class="dropdown-header">The X Toolkit</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >The X Toolkit edge</a></li>

                                                    <li role="presentation" class="dropdown-header">AngularJS</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >AngularJS 1.2.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >AngularJS 1.1.1</a></li>

                                                    <li role="presentation" class="dropdown-header">Ember</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Ember 1.3.1</a></li>

                                                    <li role="presentation" class="dropdown-header">Underscore</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Underscore 1.4.4</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Underscore 1.4.3</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Underscore 1.3.3</a></li>

                                                    <li role="presentation" class="dropdown-header">Bonsai</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Bonsai 0.4.1</a></li>

                                                    <li role="presentation" class="dropdown-header">KineticJS</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >KineticJS 4.3.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >KineticJS 4.0.5</a></li>

                                                    <li role="presentation" class="dropdown-header">FabricJS</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >FabricJS 1.4.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >FabricJS 1.2.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >FabricJS 0.9</a></li>

                                                    <li role="presentation" class="dropdown-header">qooxdoo</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >qooxdoo 2.1</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >qooxdoo 2.0.3</a></li>

                                                    <li role="presentation" class="dropdown-header">D3</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >D3 3.0.4</a></li>

                                                    <li role="presentation" class="dropdown-header">CreateJS</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >CreateJS 2013.09.25</a></li>

                                                    <li role="presentation" class="dropdown-header">WebApp Install</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >WebApp Install 0.1</a></li>

                                                    <li role="presentation" class="dropdown-header">Thorax</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Thorax 2.0.0rc6</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Thorax 2.0.0rc3</a></li>

                                                    <li role="presentation" class="dropdown-header">Paper.js</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Paper.js 0.22</a></li>

                                                    <li role="presentation" class="dropdown-header">React</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >React 0.9.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >React 0.8.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >React 0.4.0</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >React 0.3.2</a></li>

                                                    <li role="presentation" class="dropdown-header">svg.js</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >svg.js 0.x (latest)</a></li>

                                                    <li role="presentation" class="dropdown-header">Minified</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Minified 1.0 beta1</a></li>

                                                    <li role="presentation" class="dropdown-header">jTypes</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >jTypes 2.1.0</a></li>

                                                    <li role="presentation" class="dropdown-header">Lo-Dash</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Lo-Dash 2.2.1</a></li>

                                                    <li role="presentation" class="dropdown-header">Brick</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Brick edge</a></li>

                                                    <li role="presentation" class="dropdown-header">RactiveJS</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >RactiveJS Latest</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >RactiveJS Edge</a></li>

                                                    <li role="presentation" class="dropdown-header">Vue</li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Vue (edge)</a></li>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Vue 0.11.0</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="dropdown">
                                            <div class="btn-group">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
                                                    onLoad
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu scrollable-menu" id="dropdownMenu2" role="menu" aria-labelledby="dropdownMenu2">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >onLoad</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >onDomReady</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >No wrap - in head</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >No wrap - in body</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tinker Options -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Tinker Options
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <input type="text" placeholder="Name your Tinker">
                                        <textarea placeholder="Description"></textarea>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"></input><span class="chk_lbl">Normalize css</span>
                                            </label>
                                        </div>
                                        <p>Body tag</p>
                                        <input type="text">
                                        <p>DTD</p>
                                        <div class="dropdown">
                                            <div class="btn-group">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">
                                                    HTML 5
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu scrollable-menu" id="dropdownMenu3" role="menu" aria-labelledby="dropdownMenu3">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >XHTML 1.0 Strict</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >XHTML 1.0 Transitional</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >HTML 5</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >HTML 4.01 Strict</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >HTML 4.01 Transitional</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >HTML 4.01 Frameset</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Framework script attribute</p>
                                        <input type="text" placeholder="ie. data-type=''">
                                    </div>
                                </div>
                            </div>
                            <!-- External Resources -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            External Resources
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <input type="text" class="ext_res" placeholder="JavaScript/CSS URI">
                                        <button type="button" class="btn btn-default add">
                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Languages -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Languages
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <div class="dropdown langcontainer">
                                            <div class="btn-group">
                                                <button class="btn btn-default dropdown-toggle langbutton" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-expanded="true">
                                                    HTML
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu scrollable-menu" id="dropdownMenu4" role="menu" aria-labelledby="dropdownMenu4">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >HTML</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown langcontainer langright">
                                            <div class="btn-group">
                                                <button class="btn btn-default dropdown-toggle langbutton" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-expanded="true">
                                                    CSS
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu scrollable-menu" id="dropdownMenu5" role="menu" aria-labelledby="dropdownMenu5">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >CSS</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >SCSS</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown langcontainer">
                                            <div class="btn-group">
                                                <button class="btn btn-default dropdown-toggle langbutton" type="button" id="dropdownMenu6" data-toggle="dropdown" aria-expanded="true">
                                                    JavaScript
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu scrollable-menu" id="dropdownMenu6" role="menu" aria-labelledby="dropdownMenu6">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >JavaScript</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >CoffeeScript</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >JavaScript 1.7</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown langcontainer langright">
                                            <div class="btn-group">
                                                <button class="btn btn-default langbutton" type="button" id="dropdownMenu7" data-toggle="dropdown" aria-expanded="true">
                                                    Results
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ajax Requests
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            Ajax Requests
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        Stuff
                                    </div>
                                </div>
                            </div> -->
                            <!-- Legal, Credits and Links -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                            Legal, Credits and Links
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <p>Created and maintained by <a title="John's homepage" href="http://johncipponeri.github.io/">John Cipponeri</a>.</p>
                                        <p>CSS Design by <a title="Gianni's Twitter" href="https://twitter.com/Hazulu">@Hazulu</a></p>
                                        <p>Hosted by <a href="https://pages.github.com/">GitHub Pages</a>.</p>
                                        <p>Special thanks to <a href="http://jsfiddle.net" target="_new">JSFiddle</a> as this is an open source clone of it.</p>
                                        <p><strong>License</strong></p>
                                        <p>All code belongs to the poster and no license is enforced.</p>
                                        <p>JSTinker or its author are not responsible or liable for any loss or damage of any kind during the usage of provided code.</p>
                                        <p><strong>Links</strong></p>
                                        For updates please follow my
                                        <a href="http://twitter.com/johncipponeri/" target="_new">tweets</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /sidebar -->

                    <div class="editors">
                        <div class="top">
                            <!-- HTML Editor -->
                            <div class="editorContainer">
                                <div class="editor" id="html-editor"></div>
                            </div>
                            <!-- CSS EDitor -->
                            <div class="editorContainer">
                                <div class="editor" id="css-editor"></div>
                            </div>
                        </div>
                        <div class="bottom">
                            <!-- JS Editor -->
                            <div class="editorContainer">
                                <div class="editor" id="js-editor"></div>
                            </div>
                            <!-- Preview -->
                            <div class="editorContainer">
                                <iframe class="editor" id="preview" name="result" sandbox="allow-forms allow-popups allow-scripts allow-same-origin" frameborder="0">
                                    #document
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="section-id" value="{{ $section->id }}">

@endsection
@push("additional-scripts")
    <script>
        let html = htmlDecode(`{{ json_decode($section->html) }}`)
        let css = htmlDecode(`{{ json_decode($section->css) }}`)
        let js = htmlDecode(`{{ json_decode($section->js) }}`)
	    ace.edit("html-editor").setValue(html)
	    ace.edit("css-editor").setValue(css)
	    ace.edit("js-editor").setValue(js)
		$("#update-form").on("click", () => {
			let heading = $("#heading").val()
			let subHeading = $("#sub_heading").val();

			let data = {
				heading: heading,
				sub_heading: subHeading,
				css: ace.edit("css-editor").getSession().getValue(),
				js: ace.edit("js-editor").getSession().getValue(),
				html: ace.edit("html-editor").getSession().getValue(),
			}

			$.ajax({
				url: "{{ route('admin.homepage.updateSection', $section->id) }}",
				type: "PUT",
				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
				data: data,
				success: function(response){
					if(response) {
						window.location.href = '{{ route("admin.homepage.sections") }}';
					}
				}
			});
		});
        function htmlDecode(input){
	        let e = document.createElement('div');
	        e.innerHTML = input;
	        return e.childNodes[0].nodeValue;
        }
    </script>
@endpush