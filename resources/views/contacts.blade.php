@extends('layouts.app')
@section('title-page')
 Contact
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 rounded shadow p-3">
        <form action="{{ route('contact-form') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Full name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="email" >
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleMessageTheme" class="form-label">Message theme</label>
                <input type="text" class="form-control" id="exampleMessageTheme" name="subject" >
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleMessage">Message text</label>
                <textarea class="form-control" id="exampleMessage" name="message" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
