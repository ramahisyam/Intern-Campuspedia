@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('job.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group row">
                            <label for="task" class="col-md-4 col-form-label text-md-right">Tugas</label>
    
                            <div class="col-md-6">
                                <select name="assignments_id" class="form-control" required>
                                    <option value="" disabled selected>--Pilih Tugas Yang Dikerjakan--</option>
                                    @foreach ($assignments as $assignment)
                                        <option value="{{ $assignment->id }}">{{ $assignment->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Tanggal</label>
    
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date" required>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="entry_hours" class="col-md-4 col-form-label text-md-right">Jam Masuk (HH:MM)</label>
    
                            <div class="col-md-6">
                                <input id="entryHours" type="text" class="form-control" placeholder="09:00" name="entry_hours" onkeyup="difference()" required>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="home_hours" class="col-md-4 col-form-label text-md-right">Jam Pulang (HH:MM)</label>
    
                            <div class="col-md-6">
                                <input id="homeHours" type="text" class="form-control" placeholder="19:00" name="home_hours" onkeyup="difference()" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="home_hours" class="col-md-4 col-form-label text-md-right">Total Jam Kerja</label>
                            <div class="col-md-6">
                                <input id="workingHours" type="text" class="form-control" name="working_hours" readonly required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="obstacles" class="col-md-4 col-form-label text-md-right">Kendala</label>
    
                            <div class="col-md-6">
                                <textarea name="problem" placeholder="Masukkan keluh kesah anda..." cols="30"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-8">
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

