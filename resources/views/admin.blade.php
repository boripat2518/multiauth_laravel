@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-end">
        <div class="col-md-3 d-box flex-column">
          <div class="p-2 d-box bg-light text-dark active border border-light">
            <a href="#">{{ __('Dashboard') }}</a>
          </div>
          <div class="p-2 d-box bg-info text-dark border border-light">
            <a class="btn" href="#">{{ __('Master') }}</a>
            <div class="flex-column d-box bg-light">
              <div class="p-2 d-box">
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#">{{ __('Business') }}</a>
              </div>
              <div class="p-2 d-box">
                &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#">{{ __('Category') }}</a>
              </div>
              <div class="p-2 d-box">
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#">{{ __('Zone') }}</a>
              </div>
            </div>
          </div>
          <div class="p-2 d-box bg-info text-dark border border-light">
            <a class="btn" href="#">{{ __('Admins') }}</a>
          </div>
          <div class="p-2 d-box bg-info text-dark border border-light">
            <a class="btn" href="#">{{ __('Owners') }}</a>
          </div>
          <div class="p-2 d-box bg-info text-dark border border-light">
            <a class="btn" href="#">{{ __('Shops') }}</a>
            <div class="flex-column d-box bg-light">
              <div class="p-2 d-box">
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#">{{ __('Information') }}</a>
              </div>
              <div class="p-2 d-box">
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#">{{ __('Promotion') }}</a>
              </div>
              <div class="p-2 d-box">
                &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#">{{ __('Menu') }}</a>
              </div>
              <div class="p-2 d-box">
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#">{{ __('Reservation') }}</a>
              </div>
            </div>
          </div>
          <div class="p-2 d-box bg-info text-dark border border-light">
            <a class="btn" href="#">{{ __('Friends') }}</a>
            <div class="flex-column d-box bg-light">
              <div class="p-2 d-box">
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#">{{ __('Information') }}</a>
              </div>
              <div class="p-2 d-box">
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#">{{ __('Schedule') }}</a>
              </div>
              <div class="p-2 d-box">
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#">{{ __('Dating') }}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.who')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
