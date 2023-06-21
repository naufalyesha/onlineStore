@extends('layouts.app') 
@section('title', $viewData["title"])
@sec ton('subtitle', $viewData["sbtitle"]) 
@section('content')
<div class="card">
    <div class="card-header"> 
        Purchase Completed
    </div>
    <div class="card-body">
        <div class="alert alert-success" role="alert">
        Congratulations, purchase completed. Order number is <b>#{{ $viewData["order"]->getId() }}</b>
        </div>
    </div>
</div> 
@endsection
            
            