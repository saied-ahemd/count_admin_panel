@extends('admin.layouts.master')

@section('page')
    Dashboard
@endsection

@section('content')

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-eye"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>عدد الدخول الكلي</p>
                        {{$entersCount}}
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr/>
                    <div class="stats">
                        <i class="ti-panel"></i> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="ti-archive"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>عدد الخروخ الكلي</p>
                            {{$outsCount}}
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr/>
                    <div class="stats">
                       <a class="ti-panel" style="cursor: pointer" href="{{route('products.index')}}"> Details</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection