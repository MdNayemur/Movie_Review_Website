@extends('layouts.adminlayout')
@section('body')
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> MOV <span class="tx-info">REVIEW</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">A movie Review Site</div>
              <!-- Session Status -->
              <x-auth-session-status class="mb-4" :status="session('status')" />

      <form method="POST" action="{{ route('login') }}">
       @csrf

    <!-- Email Address -->
    <div class="form-group">


        <x-text-input id="email" placeholder="enter email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />

        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4 form-group">

        <x-text-input id="password" placeholder="enter password" class="form-control"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>



    <div class="flex items-center justify-end mt-4">

        <button type="submit" class="btn btn-info btn-block">Sign In</button>

        <!-- <x-primary-button class="ml-3">
            {{ __('Log in') }}
        </x-primary-button> -->
     </div>
    </form>

        <div class="mg-t-50 tx-center">Not yet a member? <a href="{{ Route('uregister') }}" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

@endsection