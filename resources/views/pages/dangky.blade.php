@extends('layouts.index')

@section('content')
    <!-- Begin Main Content Area -->
      <main class="main-content">
        <div
          class="breadcrumb-area breadcrumb-height"
          data-bg-image="assets/images/breadcrumb/bg/1-1-1920x373.jpg"
        >
          <div class="container h-100">
            <div class="row h-100">
              <div class="col-lg-12">
                <div class="breadcrumb-item">
                  <h2 class="breadcrumb-heading">Product Related</h2>
                  <ul>
                    <li>
                      <a href="index.html"
                        >Home <i class="pe-7s-angle-right"></i
                      ></a>
                    </li>
                    <li>Login | Register</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="login-register-area section-space-y-axis-100">
          <div class="container">
            <div class="row flex-login">
              <div class="col-lg-8">
                 <form action="#">
                  <div class="login-form">
                    <h4 class="login-title">Đăng ký</h4>
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" />
                      </div>
                      <div class="col-md-6 col-12">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" />
                      </div>
                      <div class="col-md-12">
                        <label>Email Address*</label>
                        <input type="email" placeholder="Email Address" />
                      </div>
                      <div class="col-md-6">
                        <label>Password</label>
                        <input type="password" placeholder="Password" />
                      </div>
                      <div class="col-md-6">
                        <label>Confirm Password</label>
                        <input type="password" placeholder="Confirm Password" />
                      </div>
                      <div class="col-12">
                        <button
                          class="btn btn-custom-size lg-size btn-secondary btn-primary-hover rounded-0"
                        >
                          Register
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- Main Content Area End Here -->
@endsection