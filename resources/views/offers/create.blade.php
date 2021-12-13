@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Offer:') }}</div>

                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                       {{Session::get('success')}}
                    </div>
                    <br>
                    @endif
                    <form method="POST" action="{{ route('offers.store') }}">
                        @csrf
                        {{-- <input name="_token" value="{{csrf_token()}}"/> --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"> Offer Name </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name')  @enderror" name="name" value="{{ old('name') }}" >
                                @error('name')
                                <small class="text-danger " >
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror                                
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right"> Offer Price </label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price')  @enderror" name="price" value="{{ old('price') }}"  >
                                @error('price')
                                <small class="text-danger " >
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="details" class="col-md-4 col-form-label text-md-right"> Offer Details </label>

                            <div class="col-md-6">
                                <input id="details" type="text" class="form-control @error('details')  @enderror" name="details" value="{{ old('details') }}"  >
                                @error('details')
                                <small class="text-danger " >
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center mx-auto">
                                <button type="submit" class="btn btn-primary btn btn-theme">
                                    Create Offer
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
