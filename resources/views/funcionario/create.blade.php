@extends('layouts.dash')

                             @section('content')

                                <div class='container container-page'>

                                    <ol class='breadcrumb'>

                                        <li><i class='fa fa-dashboard'></i>  <a href='route('home')'><i class='fa fa-home'></i></a></li>

                                        <li class='active'><i class='fa fa-table'></i> @@@</li>

                                    </ol>

                                    <div class='panel panel-default'>

                                        <div class='panel-heading'><i class='fa fa-list'></i> @@@</div>

                                        <div class='panel-body'>

                                            <form method='POST' action='{{ route('@@@') }}'>

                                            </form>    
                                        </div>

                                    </div>

                                </div>

                             @endsection