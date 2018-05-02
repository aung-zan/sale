@extends('layouts.user')

@section('content')
    <!-- user's profile start -->
        <div>
            <div class="category">
                <div class="category-info">
                    <h4>Profile</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="post-ad-form">
                <form>
                    <div class="product-details">
                        <p>
                            <strong>Name : </strong>
                            <strong class="label-align">{{ $user['name'] }}</strong>
                        </p>
                    </div>
                    <div class="clearfix"></div>

                    <div class="product-details">
                        <p>
                            <strong>Email : </strong>
                            <strong class="label-align">{{ $user['email'] }}</strong>
                        </p>
                    </div>
                    <div class="clearfix"></div>

                    <div class="product-details">
                        <p>
                            <strong>Phone No : </strong>
                            <strong class="label-align">{{ $user['phone_number'] }}</strong>
                        </p>
                    </div>
                    <div class="clearfix"></div>

                    <div class="product-details">
                        <p>
                            <strong>Premium : </strong>
                            <strong class="label-align">{{ $user['premium'] }}</strong>
                        </p>
                    </div>
                    <div class="clearfix"></div>

                    <div class="product-details">
                        <p>
                            <strong>State : </strong>
                            <strong class="label-align">{{ empty($user['state'])? '': $states[$user['state']] }}</strong>
                        </p>
                    </div>
                    <div class="clearfix"></div>

                    <div class="product-details">
                        <p>
                            <strong>Township : </strong>
                            <strong class="label-align">{{ $user['township'] }}</strong>
                        </p>
                    </div>
                    <div class="clearfix"></div>

                    <br>
                    <a href="{{ route('users.edit', Auth::id()) }}" class="btn btn-info text-center">Edit Profile</a>
                </form>
            </div>
        </div>
    <!-- user's profile end -->

    <!-- user's post index start -->
        <div>
            <div class="category">
                <!-- <div class="category-img">
                    <img src=" " title="image" alt="" />
                </div> -->
                <div class="category-info">
                    <h4>Product</h4>
                </div>
                <div class="clearfix"></div>
            </div>

            @if (empty($products))

                <div class="product-details">
                    <p>
                        <strong>No product has not posted yet.</strong>
                    </p>
                </div>

            @else

                <div class="ads-display col-md-12 product-phone">
                    <div class="wrapper">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

                            <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                        <span class="text">All Ads</span>
                                    </a>
                                </li>
                            </ul>

                            <div id="myTabContent" class="tab-content">

                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    <div>
                                        <div id="container">
                                            <div class="view-controls-list" id="viewcontrols">
                                                <label>view :</label>
                                                <a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
                                                <a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
                                            </div>
                                            <div class="sort">
                                                <div class="sort-by">
                                                    <label>Sort By : </label>
                                                    <select>
                                                        <option value="">Most recent</option>
                                                        <option value="">Price: Rs Low to High</option>
                                                        <option value="">Price: Rs High to Low</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <ul class="list">
                                                <a href="single.html">
                                                    <li>
                                                        <img src="" title="" alt="" />

                                                        <section class="list-left">
                                                            <h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
                                                            <span class="adprice">$1090</span>
                                                            <p class="catpath">Mobile Phones » Brand</p>
                                                        </section>

                                                        <section class="list-right">
                                                            <span class="date">Today, 17:03</span>
                                                            <h4>
                                                                <a href="" class="label label-info">Edit</a>
                                                                <a href="" class="label label-danger">Delete</a>
                                                            </h4>
                                                        </section>

                                                        <div class="clearfix"></div>
                                                    </li>
                                                </a>

                                                <a href="single.html">
                                                    <li>
                                                        <img src="" title="" alt="" />
                                                        <section class="list-left">
                                                            <h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
                                                            <span class="adprice">$1090</span>
                                                            <p class="catpath">Mobile Phones » Brand</p>
                                                        </section>
                                                        <section class="list-right">
                                                            <span class="date">Today, 17:03</span>
                                                            <h4>
                                                                <a href="" class="label label-info">Edit</a>
                                                                <a href="" class="label label-danger">Delete</a>
                                                            </h4>
                                                        </section>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                </a>

                                                <a href="single.html">
                                                    <li>
                                                        <img src="" title="" alt="" />
                                                        <section class="list-left">
                                                            <h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
                                                            <span class="adprice">$1090</span>
                                                            <p class="catpath">Mobile Phones » Brand</p>
                                                        </section>
                                                        <section class="list-right">
                                                            <span class="date">Today, 17:03</span>
                                                            <h4>
                                                                <a href="" class="label label-info">Edit</a>
                                                                <a href="" class="label label-danger">Delete</a>
                                                            </h4>
                                                        </section>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <ul class="pagination pagination-sm">
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            @endif
        </div>
    <!-- user's post index end -->
@endsection