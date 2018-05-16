@extends('layouts.app')
@section('title', '实验室预约管理系统')
@section('content')
    <div class="ui three column stackable grid link cards">
        <div class="column">
            <div class="ui fluid card">
                <a><img src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png" width="362px" height="300px" /></a>
                <div class="content">
                    <a class="header">{{array_column(DB::select('select lab_name from labs'),'lab_name')[0]}}</a>
                </div>
                <div class="extra content">
                    <div class="left floated author">
                        <img class="ui avatar image"
                             src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png">Rigg
                    </div>
                    <span class="right floated">
                        <span class="like"><i class="like icon"></i> Like </span>
                        <span class="star"><i class="unhide icon"></i> watch </span>
                        <span class="wait"><i class="wait icon"></i> 2018-5-26 </span>
                    </span>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="ui fluid card">
                <a><img src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png" width="362px" height="300px" /></a>
                <div class="content">
                    <a class="header">{{array_column(DB::select('select lab_name from labs'),'lab_name')[1]}}</a>
                </div>
                <div class="extra content">
                    <div class="left floated author">
                        <img class="ui avatar image"
                             src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png">Rigg
                    </div>
                    <span class="right floated">
                        <span class="like"><i class="like icon"></i> Like </span>
                        <span class="star"><i class="unhide icon"></i> watch </span>
                        <span class="wait"><i class="wait icon"></i> 2018-5-26 </span>
                    </span>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="ui fluid card">
                <a><img src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png" width="362px" height="300px" /></a>
                <div class="content">
                    <a class="header">{{array_column(DB::select('select lab_name from labs'),'lab_name')[2]}}</a>
                </div>
                <div class="extra content">
                    <div class="left floated author">
                        <img class="ui avatar image"
                             src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png">Rigg
                    </div>
                    <span class="right floated">
                        <span class="like"><i class="like icon"></i> Like </span>
                        <span class="star"><i class="unhide icon"></i> watch </span>
                        <span class="wait"><i class="wait icon"></i> 2018-5-26 </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
@stop