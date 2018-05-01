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
                            <strong class="label-align">{{ $user['state'] }}</strong>
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
                    <a href="" class="btn btn-info text-center">Edit Profile</a>
                </form>
            </div>
        </div>
    <!-- user's profile end -->

    <!-- user's post index start -->
        <div>
            <div class="category">
                <div class="category-img">
                    <img src=" " title="image" alt="" />
                </div>
                <div class="category-info">
                    <h4>Product</h4>
                </div>
                <div class="clearfix"></div>
            </div>

            @if (empty($product))
                <div class="product-details">
                    <p>
                        <strong>No product has not posted yet.</strong>
                    </p>
                </div>
            @endif
        </div>
    <!-- user's post index end -->
@endsection