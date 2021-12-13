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
                            <label for="name_ar" class="col-md-4 col-form-label text-md-right">  {{__('messages.offerName_ar')}} </label>

                            <div class="col-md-6">
                                <input id="name_ar" type="text" class="form-control @error('name_ar')  @enderror" name="name_ar" value="{{ old('name_ar') }}" >
                                @error('name_ar')
                                <small class="text-danger " >
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_en" class="col-md-4 col-form-label text-md-right">  {{__('messages.offerName_en')}} </label>

                            <div class="col-md-6">
                                <input id="name_en" type="text" class="form-control @error('name_en')  @enderror" name="name_en" value="{{ old('name_en') }}" >
                                @error('name_en')
                                <small class="text-danger " >
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror                                
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right"> {{__('messages.offerPrice')}} </label>

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
                            <label for="details_ar" class="col-md-4 col-form-label text-md-right"> {{__('messages.offerDetails_ar')}} </label>

                            <div class="col-md-6">
                                <input id="details_ar" type="text" class="form-control @error('details_ar')  @enderror" name="details_ar" value="{{ old('details_ar') }}"  >
                                @error('details_ar')
                                <small class="text-danger " >
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="details_en" class="col-md-4 col-form-label text-md-right"> {{__('messages.offerDetails_en')}} </label>

                            <div class="col-md-6">
                                <input id="details_en" type="text" class="form-control @error('details_en')  @enderror" name="details_en" value="{{ old('details_en') }}"  >
                                @error('details_en')
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
