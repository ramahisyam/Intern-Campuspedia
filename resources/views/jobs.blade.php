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
                            <button type="submit" class="btn btn-primary">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection