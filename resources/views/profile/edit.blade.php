@extends('layouts.main')

@section('content')
    <div class="submit-ad main-grid-border">
        <div class="container">
            <h2 class="head">Post an Ad</h2>
            <div class="post-ad-form">

                <form method="POST" action="{{ route('users.update', $user['id']) }}">

                    @csrf
                    <input type="hidden" name="_method" value="PATCH">

                    <label>Name <span>*</span></label>
                    <input type="text" class="phone input-design" name="name" value="{{ (old('name') == null)? $user['name'] : old('name') }}" required>
                    <div class="clearfix"></div>

                    <label>Email <span>*</span></label>
                    <input type="email" class="phone input-design" name="email" value="{{ (old('email') == null)? $user['email'] : old('email') }}" required>
                    <div class="clearfix"></div>

                    <label>Phone No <span>*</span></label>
                    <input type="text" class="phone input-design" name="phone_number" value="{{ (old('phone_number') == null)? $user['phone_number'] : old('phone_number') }}" required>
                    <div class="clearfix"></div>

                    <label>Premium</label>
                    <input type="text" class="phone input-design" name="premium" value="{{ (old('premium') == null)? $user['premium'] : old('premium') }}">
                    <div class="clearfix"></div>

                    <label>State </label>
                    <select name="state">
                        <option {{ empty($user['state'])? 'selected':'' }}></option>

                        @foreach ($states as $key => $val)
                            <option value="{{ $key }}" {{ (!empty($user['state']) && $user['state'] == $key)? 'selected':'' }}>{{ $val }}</option>
                        @endforeach

                    </select>
                    <div class="clearfix"></div>

                    <label>Township </label>
                    <input type="text" class="input-design" name="township" value="{{ (old('township') == null)? $user['township'] : old('township') }}">
                    <div class="clearfix"></div>

                    <label>Password </label>
                    <input type="password" class="phone input-design" name="password">
                    <div class="clearfix"></div>

                    <a href="{{ route('users.show', Auth::id()) }}" class="btn btn-default phone-design">Back</a>
                    <button type="submit" class="btn btn-success">Update</button>

                </form>
            </div>
        </div>
    </div>
@endsection