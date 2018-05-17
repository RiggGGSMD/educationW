@extends('layouts.app')
@section('title', '实验室信息')
@section('content')
    <span><b style="font-size: 15px">实验室名称: </b>{{array_column(DB::select('select lab_name from labs'),'lab_name')[0]}}</span>
    <br><br>
    <span><b style="font-size: 15px">实验室位于: </b>{{array_column(DB::select('select lab_located from labs'),'lab_located')[0]}}</span>
    <hr>
    <table style="float: left">
    @foreach ($user as $users)
            <tr><td>{{ $users->name }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

    @endforeach
    </table>
    <table style="float: left">
    @foreach ($appointment as $appointments)
            <tr><td>{{ $appointments->appointment_time }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>{{ $appointments->appointment_end }}</td></tr>
    @endforeach
    </table>
@stop