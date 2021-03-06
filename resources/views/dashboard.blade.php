@extends('frontend.main_master')

@section('main_content')

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"><br>
                    <img src="{{ !empty($editAdminData->profile_photo_path) ? url('upload/admin_image/' . $editAdminData->profile_photo_path) : url('upload/no_image.jpg') }}"
                        class="card-img-top" style="border-radius: 50%" height="100%" width="100%"><br><br>
                    <ul class="list-group list-group-flush">
                        <a href="" class="btn btn-primary btn-sm btn-block">Home</a>
                        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                        <a href="" class="btn btn-primary btn-sm btn-block">Change Password</a>
                        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                    </ul>
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center"><span
                                class="text-danger">Hii...</span><strong>{{ Auth::user()->name }} </strong>Welcome To
                            Shopping Site</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
