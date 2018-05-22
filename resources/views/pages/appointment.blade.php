@extends('layouts.app')
@section('title', '实验室预约')
@section('content')
    <div class="container" style="margin-bottom: 290px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">现在预约</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('appointment') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        预约 <i class="glyphicon glyphicon-arrow-right"></i>
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