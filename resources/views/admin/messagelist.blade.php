@extends('layouts.admin')
@section('messages')
{{$nMessages}}
@endsection
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row d-flex justify-content-center mb-3">

    <h2 class="text-gray-600">Message list</h1>

  </div>

  <!-- Message list -->
  @if(isset($messages))
  @foreach($messages as $message)
  <div class="row d-flex justify-content-center">

    <div class="col-lg-8">

      <!-- Collapsable Card Example -->
      <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCard{{$message->id}}" class="d-block card-header py-3 collapsed" data-toggle="collapse"
          role="button" aria-expanded="false" aria-controls="collapseCardExample">
          <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
          <span class="m-0 font-weight-bold text-primary">{{$message->subject}} - {{$message->name}}</span>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapseCard{{$message->id}}">
          <div class="card-body">
            <b class="text-primary">Name:</b> &nbsp {{$message->name}}
            <br>
            <b class="text-primary">Email:</b> &nbsp {{$message->email}}
            <br>
            <b class="text-primary">Subject:</b> &nbsp {{$message->subject}}
            <br>
            <b class="text-primary">Message:</b><br>
            {{$message->message}}
          </div>
          <div class="card-footer">
            <div class="row justify-content-center">
              <a href="{{route('messageShow', $message->id)}}" class="btn btn-info btn-icon-split mx-2">
                <span class="icon text-white-50">
                  <i class="fas fa-info-circle"></i>
                </span>
                <span class="text">More info</span>
              </a>
              <a href="{{route('/deleteMessage', $message->id)}}" class="btn btn-danger btn-icon-split mx-2">
                <span class="icon text-white-50">
                  <i class="fas fa-trash"></i>
                </span>
                <span class="text">Delete</span>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  @endforeach
  @endif
</div>
<!-- /.container-fluid -->

@endsection