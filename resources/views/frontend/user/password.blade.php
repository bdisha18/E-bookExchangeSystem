@extends('frontend.layout.master')
@section('content')
<!-- Page content -->
<div class="content sidebar-content">
  <div class="upload-title">
    <h1>Change Password</h1>
  <form class="publish-form" method="post" action="{{route('password.update', Auth::guard('member')->user()->user_id)}} " enctype="multipart/form-data">
        @csrf
                      <div class="row">
                                <div class="form-group col-md-6 publish-input-field">
                                  <label>Current Password</label>
                                    <input type="password" name="old_password" class=" publish-input" placeholder="Enter Current Password" required>
                                    <div class="text-danger">{{ $errors->first('old_password') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                   <div class="form-group col-md-6 publish-input-field">
                                    <label>New Password</label>
                                    <input type="password" name="password" class=" publish-input" placeholder="Enter New Password" required>
                                    <div class="text-danger">{{ $errors->first('password') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                   <div class="form-group col-md-6 publish-input-field">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm_password" class=" publish-input" placeholder="Enter Confirm Password" required>
                                    <div class="text-danger">{{ $errors->first('confirm_password') }}</div>
                                </div>
                            </div>
                          <div class="form-group">
                            <button type="submit" class="publish-submit-btn"><b>Update</b></button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
              @stop