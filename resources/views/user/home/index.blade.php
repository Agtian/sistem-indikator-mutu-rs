@extends('main-layout')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Home</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    January 2018
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo">
                                <img src="{{ asset('assets/vendors/images/photo1.jpg') }}" alt="" class="avatar-photo">
                            </div>
                            <h5 class="text-center h5 mb-0">{{ auth()->user()->id_ruang }}</h5>
                            <p class="text-center text-muted font-14">Sistem Indikator Mutu</p>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Informasi Profil</h5>
                                <ul>
                                    <li>
                                        <span>Email Address:</span>
                                        FerdinandMChilds@test.com
                                    </li>
                                    <li>
                                        <span>Phone Number PIC:</span>
                                        619-229-0054
                                    </li>
                                    <li>
                                        <span>Ruang:</span>
                                        {{ auth()->user()->id_ruang }}
                                    </li>
                                </ul>
                            </div>
                            <div class="profile-skills">
                                <h5 class="mb-20 h5 text-blue">Realisasi Pengisian Data</h5>
                                <h6 class="mb-5 font-14">Januari</h6>
                                <div class="progress mb-20" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="mb-5 font-14">Februari</h6>
                                <div class="progress mb-20" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="mb-5 font-14">Maret</h6>
                                <div class="progress mb-20" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="mb-5 font-14">April</h6>
                                <div class="progress mb-20" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">
                            <div class="profile-tab height-100-p">
                                <div class="tab height-100-p">
                                    <ul class="nav nav-tabs customtab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Settings</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <!-- Timeline Tab start -->
                                        <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                            <div class="pd-20">
                                                <div class="profile-timeline">
                                                    <div class="timeline-month">
                                                        <h5>August, 2020</h5>
                                                    </div>
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            <li>
                                                                <div class="date">12 Aug</div>
                                                                <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 Aug</div>
                                                                <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 Aug</div>
                                                                <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 Aug</div>
                                                                <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="timeline-month">
                                                        <h5>July, 2020</h5>
                                                    </div>
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            <li>
                                                                <div class="date">12 July</div>
                                                                <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 July</div>
                                                                <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="timeline-month">
                                                        <h5>June, 2020</h5>
                                                    </div>
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            <li>
                                                                <div class="date">12 June</div>
                                                                <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 June</div>
                                                                <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                            <li>
                                                                <div class="date">10 June</div>
                                                                <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                <div class="task-time">09:30 am</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Timeline Tab End -->
                                        <!-- Setting Tab start -->
                                        <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                            <div class="profile-setting">
                                                <form>
                                                    <ul class="profile-edit-list row">
                                                        <li class="weight-500 col-md-12">
                                                            <h4 class="text-blue h5 mb-20">Ubah PIC Pengisian Data</h4>
                                                            <div class="form-group">
                                                                <label>Full Name</label>
                                                                <input class="form-control form-control-lg" type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Ruang</label>
                                                                <input class="form-control form-control-lg" type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email Ruangan</label>
                                                                <input class="form-control form-control-lg" type="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                                <input class="form-control form-control-lg" type="text">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <input type="submit" class="btn btn-primary" value="Update Informasi">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Setting Tab End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
            </div>
        </div>
    </div>
@endsection