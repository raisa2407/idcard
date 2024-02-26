
@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Generate ID Card') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('generate.idcard') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="identification_number" class="col-md-4 col-form-label text-md-right">{{ __('Identification Number') }}</label>

                                <div class="col-md-6">
                                    <input id="identification_number" type="text" class="form-control" name="identification_number" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Generate ID Card') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @isset($idCardUrl)
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Your ID Card') }}</div>

                        <div class="card-body">
                            <img src="{{ $idCardUrl }}" alt="ID Card">
                        </div>
                    </div>
                </div>
            </div>
        @endisset
    </div>
@endsection
