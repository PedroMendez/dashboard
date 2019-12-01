@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="sidebar">
        @include ('layouts.sidebar')
          <div class="main-panel">
            <div class="content">
              <form method="POST" action="/profiles">
                @csrf
                <div class="row">
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="title">Create Profile</h5>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-5 pr-md-1">
                            <div class="form-group">
                              <label>Company (disabled)</label>
                              <input type="text" class="form-control" disabled="" placeholder="Company" value="">
                              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            </div>
                          </div>
                          <div class="col-md-3 px-md-1">
                            <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control" placeholder="Username" value="{{ Auth::user()->name }}">
                            </div>
                          </div>
                          <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" placeholder="Email"  value="{{ Auth::user()->email }}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 pr-md-1">
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" name="first_name" class="form-control" placeholder="First Name" value="">
                            </div>
                          </div>
                          <div class="col-md-6 pl-md-1">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Address</label>
                              <input type="text" name="address" class="form-control" placeholder="Home Address" value="">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 pr-md-1">
                            <div class="form-group">
                              <label>City</label>
                              <input type="text" name="city" class="form-control" placeholder="City" value="">
                            </div>
                          </div>
                          <div class="col-md-4 px-md-1">
                            <div class="form-group">
                              <label>Country</label>
                              <input type="text" name="country" class="form-control" placeholder="Country" value="">
                            </div>
                          </div>
                          <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                              <label>Postal Code</label>
                              <input type="number" name="zip_code" class="form-control" placeholder="ZIP Code">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>About Me</label>
                              <textarea rows="4" cols="80" name="about_me" class="form-control" placeholder="Here you can write information about you" value=""></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">Create</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card card-user">
                      <div class="card-body">
                        <p class="card-text">
                          <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="javascript:void(0)">
                              <img class="avatar" src="/img/profile.png" alt="...">
                              <h5 class="title"></h5>
                            </a>
                            <p class="description">

                            </p>
                          </div>
                        </p>
                        <div class="card-description">
                          <textarea rows="4" cols="80" class="form-control" name="description" placeholder="Here you can write your description"></textarea>
                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="button-container">
                          <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                          </button>
                          <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                          </button>
                          <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        @include ('components.footer')
    </div>
</div>
@include ('components.fixed')
@include ('components.change_theme_js')
@endsection
