@extends('layouts.app')

@section('content')
<div class="container">
    <div class="table-responsive card p-4 justify-content-center">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('messages.offerName')}}</th>
                <th scope="col">{{__('messages.offerPrice')}}</th>
                <th scope="col">{{__('messages.offerDetails')}}</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                <tr>
                    <th scope="row">{{$offer->id}}</th>
                    <td>{{$offer->name}}</td>
                    <td>{{$offer->price}}</td>
                    <td>{{$offer->details}}</td>
                  </tr>
                @endforeach
              
              
             
            </tbody>
          </table>
    </div>
</div>
@endsection
