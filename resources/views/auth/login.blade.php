
@extends('admin.layouts.app')
@section('main')
<div class="container-xl mt-3">
  <div class="row row-cards">
    <div class="card card-md">
    <div class="card-body">
        <div class="page page-center">
            <div class="container container-tight py-4">
                <h2 class="h2 text-center mb-4">login</h2>
      <form action="{{ route('login') }}" method="POST" autocomplete="off" novalidate>
        @csrf
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" placeholder="your@email.com" autocomplete="off">
        </div>
        <div class="mb-2">
          <label class="form-label">
            Password
          </label>
          <div class="input-group input-group-flat">
            <input type="password" name="password" class="form-control"  placeholder="Your password"  autocomplete="off">
            <span class="input-group-text">
              <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
              </a>
            </span>
          </div>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </div>
      </form>
    
            </div>
    </div>
      
    </div>
    
  </div>
  </div>
@endsection
