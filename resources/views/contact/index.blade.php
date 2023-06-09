@extends('layouts.main-layout')

@section('page-title', 'Contacto')

@section ('content-area')

  <div class="breadcrumb-container">

    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class="container-fluid mb-3">
    <div class="card card-style1">
      <div class="card-body">
        <!-- <div class="row"> -->
        <div class="d-grid grid-template-col-md-2 grid-gap-5">

          <!-- Map -->
          <div class="embed-responsive embed-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.9264094650316!2d-73.97488578459351!3d40.763643279326224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258f00eb25f59%3A0x75ddbee78904e799!2s767+5th+Ave%2C+New+York%2C+NY+10153%2C+USA!5e0!3m2!1sen!2sid!4v1532319134271" width="600" height="450" style="border:0" allowfullscreen></iframe>
          </div>

          <!-- Contact Us Form -->
          <div>
            <h3>Contact Us</h3>
            <form class="mt-3 form-style-1">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <div class="media">
                    <span><i class="fa fa-map-marker fa-fw text-info"></i></span>
                    <div class="media-body ml-1">
                      <div>767 Fifth Avenue</div>
                      <div>New York</div>
                      <div>NY 10153</div>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="media mb-3 mb-md-0">
                    <span><i class="fa fa-phone fa-fw text-info"></i></span>
                    <div class="media-body ml-1">212 123 456 789</div>
                  </div>
                  <div class="media">
                    <span><i class="fa fa-envelope fa-fw text-info"></i></span>
                    <div class="media-body ml-1">support@mimity.com</div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <span class="input-icon">
                  <i class="material-icons">person</i>
                  <input type="text" class="form-control" placeholder="Your Name">
                </span>
              </div>
              <div class="form-group">
                <span class="input-icon">
                  <i class="material-icons">mail_outline</i>
                  <input type="email" class="form-control" placeholder="Email">
                </span>
              </div>
              <div class="form-group">
                <span class="input-icon">
                  <i class="material-icons">comment</i>
                  <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                </span>
              </div>
              <button type="button" class="btn btn-primary">Send</button>
            </form>
          </div>
          <!-- /Contact Us Form -->

        </div>
      </div>
    </div>
  </div>

  @endsection


