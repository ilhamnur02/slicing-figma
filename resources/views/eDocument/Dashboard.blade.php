@extends('layouts.app')

@section('content')
<div class="welcome">
    <h3>Welcome To eDocument</h3>
    <p>Please download User Manual for detail information</p>
</div>

<div class="cards">
    <div class="card blue">
        <h4>0</h4>
        <p>On Progress</p>
    </div>

    <div class="card green">
        <h4>458</h4>
        <p>Completed</p>
    </div>

    <div class="card orange">
        <h4>1</h4>
        <p>Revised</p>
    </div>

    <div class="card red">
        <h4>26</h4>
        <p>Rejected</p>
    </div>

    <div class="card cyan">
        <h4>0</h4>
        <p>Need Approval</p>
    </div>

    <div class="card darkgreen">
        <h4>82</h4>
        <p>New Received</p>
    </div>
</div>
@endsection

