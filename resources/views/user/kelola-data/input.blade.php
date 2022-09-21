@extends('main-layout')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Input Data</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Input Data</li>
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
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="calendar-wrap">
						<div id='calendar'></div>
					</div>
                </div>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
            </div>
        </div>
    </div>

    <!-- calendar modal -->
    <div id="modal-view-event" class="modal modal-top fade calendar-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="h4"><span class="event-icon weight-400 mr-3"></span><span class="event-title"></span></h4>
                    <div class="event-body"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-view-warning" class="modal modal-top fade calendar-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="h4">Perhatian</h4>
                    <p>Tidak dapat input, karena data telah tersedia.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- calendar modal -->
    <div id="modal-view-add" class="modal modal-top fade calendar-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="add-event">
                    <div class="modal-body">
                        <h4 class="text-blue h4 mb-10">Input indikator</h4>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" class="form-control" name="itanggal" id="itanggal" readonly>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Indikator 1</label><br>
                            <label style="margin-bottom: -10px;">Num 1</label>
                            <input type="text" class="form-control mb-10" name="num" id="num">
                            <label style="margin-bottom: -10px;">Den 1</label>
                            <input type="text" class="form-control" name="den" id="den">
                        </div>
                        <hr style="margin-top: -10px">
                        <input type="hidden" id="icolor" name="icolor" value="fc-bg-blue">
                        <input type="hidden" id="iicon" name="iicon" value="calendar">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" >Save</button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('user.kelola-data.components.scripts')
@endsection