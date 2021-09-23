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


                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.profile.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="info-title">Name <span>*</span></label>
                                    <input type="text" class="form-control unicase-form-control text-input" name="name"
                                        value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
                                    <input type="email" class="form-control unicase-form-control text-input" name="email"
                                        value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Profile <span>*</span></label>
                                    <input type="file" class="form-control unicase-form-control text-input" name="email">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
