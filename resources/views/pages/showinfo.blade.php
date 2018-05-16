@extends('layouts.app')
@section('title', '实验室信息')
@section('content')
    <span><b style="font-size: 15px">实验室名称: </b>{{array_column(DB::select('select lab_name from labs'),'lab_name')[0]}}</span>
    <br><br>
    <span><b style="font-size: 15px">实验室位于: </b>{{array_column(DB::select('select lab_located from labs'),'lab_located')[0]}}</span>
    <hr>
    {{array_column(DB::select('select * from appointments,users where appointments.user_id = users.id and lab_id = 1'),'name')[0]}}
@stop