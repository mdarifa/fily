@extends('layouts.admin')

@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Users</h4>
            </div>
            <div class="col-xs-8 text-right m-b-20">
                <a href="{{ route('user.create') }}" class="btn btn-primary rounded pull-right"><i class="fa fa-plus"></i> Add User</a>
            </div>
        </div>
        <div class="row staff-grid-row">
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html"><img class="avatar" src="assets/img/user.jpg" alt=""></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">John Doe</a></h4>
                    <div class="small text-muted">Web Designer</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">R</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Richard Miles</a></h4>
                    <div class="small text-muted">Web Developer</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">J</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">John Smith</a></h4>
                    <div class="small text-muted">Android Developer</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">M</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Mike Litorus</a></h4>
                    <div class="small text-muted">IOS Developer</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">W</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Wilmer Deluna</a></h4>
                    <div class="small text-muted">Team Leader</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">J</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Jeffrey Warden</a></h4>
                    <div class="small text-muted">Web Developer</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">B</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Bernardo Galaviz</a></h4>
                    <div class="small text-muted">Web Developer</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">L</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Lesley Grauer</a></h4>
                    <div class="small text-muted">Team Leader</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">J</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Jeffery Lalor</a></h4>
                    <div class="small text-muted">Team Leader</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">L</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Loren Gatlin</a></h4>
                    <div class="small text-muted">Android Developer</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">T</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Tarah Shropshire</a></h4>
                    <div class="small text-muted">Android Developer</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="profile.html" class="avatar">C</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Catherine Manseau</a></h4>
                    <div class="small text-muted">Android Developer</div>
                </div>
            </div>
        </div>
    </div>
@endsection
