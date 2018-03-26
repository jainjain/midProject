@extends('layouts.app')

@section('content')
    <h1>contact</h1>

    <form role="form" id="contact-form" class="contact-form" method="POST" action="{{route('contact.store')}}">
        {{ csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control textarea" rows="3" name="message" id="Message" placeholder="Message"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn main-btn pull-right">Send a message</button>
            </div>
        </div>
    </form>

@endsection