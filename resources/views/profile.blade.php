@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row profile">
            <div class="col-md-12">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="profile-usertitle-email">
                            {{ Auth::user()->email }}
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <a href="/ATC/public/edit/profile" class="btn btn-success btn-sm">Edit Details</a>
                        {{-- <button type="button" class="btn btn-danger btn-sm">Message</button> --}}
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    {{-- <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                            </li>
                        </ul>
                    </div> --}}
                    <!-- END MENU -->
                </div>
            </div>
            {{-- <div class="col-md-9">
                <div class="profile-content">
                    <h1>{{ Auth::user()->name }}</h1>
                    <p>{{ Auth::user()->id }}</p>
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

