@extends('layouts.adminlayout')
@section('body')

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> MOV <span class="tx-info">REVIEW</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">A Movie Review Site</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group form-group">

                <x-text-input id="name" placeholder="Enter Your Name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4 form-group">

                <x-text-input id="email" placeholder="Enter Your Email" class="form-control" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <x-text-input id="role" class="form-control" placeholder="Enter role" type="hidden" name="role" :value="2" required />

            <!-- Password -->
            <div class="mt-4 form-group">

                <x-text-input id="password" placeholder="Enter Password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 form-group">

                <x-text-input id="password_confirmation" placeholder="Confirm Password" class="form-control"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <button type="submit" class="btn btn-info btn-block">Sign Up</button>


        </form>

   

        <div class="mg-t-40 tx-center">Already a member? <a href="{{ route('ulogin') }}" class="tx-info">Log In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

@endsection