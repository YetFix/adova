@extends('layouts.app')

@push('css')

@endpush

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Production Department</h2>
                <img src="{{asset('0.jpg')}}" alt="">
                <img src="{{asset('1.jpg')}}" alt="">
                <h2>Engineering Department
                </h2>
                <img src="{{asset('2.jpg')}}" alt="">
            </div>
        </div>
    </div>
@endsection
@push('js')
 
@endpush