@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($jobs as $job)
                <div style="margin-top: 50px" class="card">
                    <div class="card-header"><b>{{ $job->date }}</b></div>
                    <div class="card-body">
                        <h3>{{ $job->assignment->name }}</h3>
                        <div class="col-md-8 offset-md-9">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#detailModal{{ $job->id }}">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="detailModal{{ $job->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $job->assignment->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5><b>Jam Masuk Kerja </b></h5>
                                <h6>{{ $job->entry_hours }}</h6>
                                <hr>
                                <h5><b>Jam Pulang Kerja </b></h5>
                                <h6>{{ $job->home_hours }}</h6>
                                <hr>
                                <h5><b>Dikerjakan Pada </b></h5>
                                <h6>{{ $job->date }}</h6>
                                <hr>
                                <h5><b>Kendala </b></h5>
                                <h6>{{ $job->problem }}</h6>
                                <hr>
                                <h5><b>Durasi Jam Kerja </b></h5>
                                <h6>{{ $job->working_hours }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection