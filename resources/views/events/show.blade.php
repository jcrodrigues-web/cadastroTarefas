@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-1- offset-md-1">
    <div class="row">
        <div id="info-container" class="col-md-6">
           <h1>{{ $event->title }}</h1>
           <p class="event-date">{{ $event->date }} </p>
           <p class="event-owner">{{ $event->owner }} </p>
           <p class="event-description">{{ $event->description }} </p>
           <p class="event-status">{{ $event->status }} </p>
           <a href="#" class="bnt btn-primary" id="event-submit">Confirmar presença</a>
        </div>
    </div>
</div>

@endsection