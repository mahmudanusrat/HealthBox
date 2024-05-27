@extends('admin.layout')

@section('adminBody')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Edit Profile</h4>
                </div>
            </div>
            <div>
                <div class="card-box">
                    <h3 class="card-title">Basic Informations</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-img-wrap">
                                <img class="inline-block" src="img/user.jpg" alt="user">
                                <div class="fileupload btn">
                                    <span class="btn-text">edit</span>
                                    <input class="upload" type="file">
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <label class="focus-label">First Name</label>
                                            <input type="text" class="form-control floating" value="Enter First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <label class="focus-label">Last Name</label>
                                            <input type="text" class="form-control floating" value="Enter Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <label class="focus-label">Birth Date</label>
                                            <div class="cal-icon">
                                                <input class="form-control floating datetimepicker" type="text" value="Enter the Birthdate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus select-focus">
                                            <label class="focus-label">Gendar</label>
                                            <select class="select form-control floating" >
                                                <option value="male selected">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-box">
                    <h3 class="card-title">Contact Informations</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-focus">
                                <label class="focus-label">Address</label>
                                <input type="text" class="form-control floating" value="Enter The Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-focus">
                                <label class="focus-label">State</label>
                                <input type="text" class="form-control floating" value="Enter the State">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-focus">
                                <label class="focus-label">Country</label>
                                <input type="text" class="form-control floating" value="Enter Country Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-focus">
                                <label class="focus-label">Pin Code</label>
                                <input type="text" class="form-control floating" value="Enter Pin Code">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-focus">
                                <label class="focus-label">Phone Number</label>
                                <input type="text" class="form-control floating" value="Enter Phone Number">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
