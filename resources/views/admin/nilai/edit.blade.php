@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Nilai Santri') }}</h1>
<div class="col">

    <div class="card shadow mb-4">

        <div class="card-body">
            <form method="POST" action="{{ route('santri.update', $id) }}" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col">
                            @foreach ($allNilai as $nilai)
                            <div class="form-group">
                                <label class="form-control-label"
                                    for="{{ $nilai->mata_pelajaran->nama }}">{{ $nilai->mata_pelajaran->nama }}
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="number" min="0" max="100" id="{{ $nilai->mata_pelajaran->nama }}"
                                    class="form-control" name="{{ $nilai->mata_pelajaran->nama }}"
                                    placeholder="{{ $nilai->mata_pelajaran->nama }}" value="{{$nilai->nilai}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection
