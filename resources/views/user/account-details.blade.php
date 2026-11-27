@extends('layouts.app')

@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Account Details</h2>
        <div class="row">
            <div class="col-lg-3">
                @include('user.account-nav')
            </div>
            <div class="col-lg-9">
                <div class="page-content my-account__edit">
                    <div class="my-account__edit-form">

                        {{-- Alert Pesan Sukses --}}
                        @if(Session::has('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form name="account_edit_form" action="{{ route('user.account.update') }}" method="POST" class="needs-validation" novalidate="">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                {{-- Full Name --}}
                                <div class="col-md-6">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               placeholder="Full Name" name="name" id="name"
                                               value="{{ old('name', auth()->user()->name) }}" required="">
                                        <label for="name">Name</label>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Mobile Number --}}
                                <div class="col-md-6">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                                               placeholder="Mobile Number" name="mobile" id="mobile"
                                               value="{{ old('mobile', auth()->user()->mobile) }}" required="">
                                        <label for="mobile">Mobile Number</label>
                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Email Address --}}
                                <div class="col-md-12">
                                    <div class="form-floating my-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Email Address" name="email" id="email"
                                               value="{{ old('email', auth()->user()->email) }}" required="">
                                        <label for="email">Email Address</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Section Password Change --}}
                                <div class="col-md-12">
                                    <div class="my-3">
                                        <h5 class="text-uppercase mb-0">Password Change</h5>
                                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah password</small>
                                    </div>
                                </div>

                                {{-- Old Password --}}
                                <div class="col-md-12">
                                    <div class="form-floating my-3">
                                        <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                               id="old_password" name="old_password" placeholder="Old password">
                                        <label for="old_password">Old password</label>
                                        @error('old_password')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- New Password --}}
                                <div class="col-md-12">
                                    <div class="form-floating my-3">
                                        <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                               id="new_password" name="new_password" placeholder="New password">
                                        <label for="new_password">New password</label>
                                        @error('new_password')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Confirm New Password --}}
                                <div class="col-md-12">
                                    <div class="form-floating my-3">
                                        <input type="password" class="form-control"
                                               id="new_password_confirmation" name="new_password_confirmation"
                                               placeholder="Confirm new password">
                                        <label for="new_password_confirmation">Confirm new password</label>
                                    </div>
                                </div>

                                {{-- Submit Button --}}
                                <div class="col-md-12">
                                    <div class="my-3">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
