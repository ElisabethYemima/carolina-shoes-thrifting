@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Add User</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="{{ route('admin.index') }}">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="{{ route('admin.users') }}">
                        <div class="text-tiny">Users</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Add User</div>
                </li>
            </ul>
        </div>

        <form class="tf-section-2 form-add-product" method="POST" action="{{ route('admin.user.store') }}">
            @csrf
            <div class="wg-box">
                <fieldset class="name">
                    <div class="body-title mb-10">Full Name <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="text" placeholder="Enter full name" name="name" tabindex="0"
                        value="{{ old('name') }}" aria-required="true" required="">
                </fieldset>
                @error('name')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                @enderror

                <fieldset class="name">
                    <div class="body-title mb-10">Email Address <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="email" placeholder="Enter email address" name="email" tabindex="0"
                        value="{{ old('email') }}" aria-required="true" required="">
                </fieldset>
                @error('email')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                @enderror

                <fieldset class="name">
                    <div class="body-title mb-10">Mobile Number <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="text" placeholder="Enter mobile number" name="mobile" tabindex="0"
                        value="{{ old('mobile') }}" aria-required="true" required="">
                </fieldset>
                @error('mobile')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                @enderror
            </div>

            <div class="wg-box">
                <fieldset class="name">
                    <div class="body-title mb-10">Role / User Type <span class="tf-color-1">*</span></div>
                    <div class="select mb-10">
                        <select name="utype" required="">
                            <option value="USR" {{ old('utype') == 'USR' ? 'selected' : '' }}>Customer (USR)</option>
                            <option value="ADM" {{ old('utype') == 'ADM' ? 'selected' : '' }}>Administrator (ADM)</option>
                        </select>
                    </div>
                </fieldset>
                @error('utype')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                @enderror

                <fieldset class="name">
                    <div class="body-title mb-10">Password <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="password" placeholder="Enter password" name="password" tabindex="0"
                        aria-required="true" required="">
                    <div class="text-tiny">Minimum 8 characters.</div>
                </fieldset>
                @error('password')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                @enderror

                <fieldset class="name">
                    <div class="body-title mb-10">Confirm Password <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="password" placeholder="Confirm password" name="password_confirmation" tabindex="0"
                        aria-required="true" required="">
                </fieldset>

                <div class="cols gap10">
                    <button class="tf-button w-full" type="submit">Add User</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
