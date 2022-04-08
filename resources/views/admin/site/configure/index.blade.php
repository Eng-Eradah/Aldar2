@extends('admin.layouts.master')
@section('content')

    <div class="side-app mt-5">

        <div class="page-header">

        </div>
        <!-- /Page Header-->

        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabs style</h3>
                    </div>
                    <div class="card-body p-6">
                        <div class="panel panel-primary">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class=""><a href="#tab1" class="active"
                                                data-toggle="tab">{{ __('system.Abouts') }}</a></li>
                                        <li><a href="#tab2" data-toggle="tab">{{ __('system.Brifes') }}</a></li>
                                        <li><a href="#tab3" data-toggle="tab">{{ __('system.Visions') }}</a></li>
                                        <li><a href="#tab4" data-toggle="tab">{{ __('system.Missions') }}</a></li>
                                        <li><a href="#tab5" data-toggle="tab">{{ __('system.Scopes') }}</a></li>
                                        <li><a href="#tab6" data-toggle="tab">{{ __('system.Strategys') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content ">
                                    <div class="tab-pane active " id="tab1">
                                        <button type="button" class="btn btn-primary" style="float:left;"><a
                                                href="{{ route('addconfigure', 'AboutUs') }}" class="text-white"><i
                                                    class="fe fe-plus mr-2"></i>{{ __('system.add') }}</a></button>
                                        <br>
                                        <br>

                                        <div class="contect mt-5 d-block">
                                            <table class="table table-bordered border-top mb-0 table-responsive">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <th> {{ __('system.descripe') }}</th>
                                                        <th> {{ __('system.lang') }}</th>
                                                        <th>{{ __('system.status') }}</th>

                                                        <th>{{ __('system.operation') }}</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($about as $data)

                                                        <tr>
                                                            <td>{{ $data->id }}</td>
                                                            <th>{{ $data->description }}</th>
                                                            <th>{{ $data->lang }}</th>

                                                            <th>
                                                                @if ($data->is_active == 1)
                                                                    <span
                                                                        class='badge badge-success'>{{ __('system.active') }}</span>
                                                                @else
                                                                    <span
                                                                        class='badge badge-danger'>{{ __('system.notactive') }}</span>

                                                                @endif


                                                            </th>


                                                            <th>

                                                                <div class="btn-group">
                                                                    <a href="{{ route('addconfigure', ['AboutUs', $data->id]) }}"
                                                                        class="btn btn-info"><i class="fa fa-edit"></i></a>

                                                                    @if ($data->is_active == 1)
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-danger"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    @else
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-success"><i
                                                                                class="fa fa-check"></i></a>
                                                                    @endif


                                                                </div>
                                                            </th>

                                                        </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane  " id="tab2">
                                        <button type="button" class="btn btn-primary" style="float:left;"><a
                                                href="{{ route('addconfigure', 'Brife') }}" class="text-white"><i
                                                    class="fe fe-plus mr-2"></i>{{ __('system.add') }}
                                            </a></button>
                                        <br>
                                        <br>

                                        <div class="contect mt-5 d-block">
                                            <table class="table table-bordered border-top mb-0 table-responsive">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <th> {{ __('system.descripe') }}</th>
                                                        <th> {{ __('system.lang') }}</th>
                                                        <th>{{ __('system.status') }}</th>

                                                        <th>{{ __('system.operation') }}</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Brife as $data)

                                                        <tr>
                                                            <td>{{ $data->id }}</td>
                                                            <th>{{ $data->description }}</th>
                                                            <th>{{ $data->lang }}</th>

                                                            <th>
                                                                @if ($data->is_active == 1)
                                                                    <span
                                                                        class='badge badge-success'>{{ __('system.active') }}</span>
                                                                @else
                                                                    <span
                                                                        class='badge badge-danger'>{{ __('system.notactive') }}</span>

                                                                @endif


                                                            </th>


                                                            <th>

                                                                <div class="btn-group">
                                                                    <a href="{{ route('addconfigure', ['Brife', $data->id]) }}"
                                                                        class="btn btn-info"><i class="fa fa-edit"></i></a>

                                                                    @if ($data->is_active == 1)
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-danger"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    @else
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-success"><i
                                                                                class="fa fa-check"></i></a>
                                                                    @endif


                                                                </div>
                                                            </th>

                                                        </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="tab3">
                                        <button type="button" class="btn btn-primary" style="float:left;"><a
                                                href="{{ route('addconfigure', 'Vision') }}" class="text-white"><i
                                                    class="fe fe-plus mr-2"></i>
                                                {{ __('system.add') }}
                                            </a></button>
                                        <br>
                                        <br>

                                        <div class="contect mt-5 d-block">
                                            <table class="table table-bordered border-top mb-0 table-responsive">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <th> {{ __('system.descripe') }}</th>
                                                        <th> {{ __('system.lang') }}</th>
                                                        <th>{{ __('system.status') }}</th>

                                                        <th>{{ __('system.operation') }}</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Vision as $data)

                                                        <tr>
                                                            <td>{{ $data->id }}</td>
                                                            <th>{{ $data->description }}</th>
                                                            <th>{{ $data->lang }}</th>

                                                            <th>
                                                                @if ($data->is_active == 1)
                                                                    <span
                                                                        class='badge badge-success'>{{ __('system.active') }}</span>
                                                                @else
                                                                    <span
                                                                        class='badge badge-danger'>{{ __('system.notactive') }}</span>

                                                                @endif


                                                            </th>


                                                            <th>

                                                                <div class="btn-group">
                                                                    <a href="{{ route('addconfigure', ['Vision', $data->id]) }}"
                                                                        class="btn btn-info"><i class="fa fa-edit"></i></a>

                                                                    @if ($data->is_active == 1)
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-danger"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    @else
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-success"><i
                                                                                class="fa fa-check"></i></a>
                                                                    @endif


                                                                </div>
                                                            </th>

                                                        </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane  " id="tab4">
                                        <button type="button" class="btn btn-primary" style="float:left;"><a
                                                href="{{ route('addconfigure', 'Mission') }}" class="text-white"><i
                                                    class="fe fe-plus mr-2"></i>
                                                {{ __('system.add') }}
                                            </a></button>
                                        <br>
                                        <br>

                                        <div class="contect mt-5 d-block">
                                            <table class="table table-bordered border-top mb-0 table-responsive">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <th> {{ __('system.descripe') }}</th>
                                                        <th> {{ __('system.lang') }}</th>
                                                        <th>{{ __('system.status') }}</th>

                                                        <th>{{ __('system.operation') }}</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Mission as $data)

                                                        <tr>
                                                            <td>{{ $data->id }}</td>
                                                            <th>{{ $data->description }}</th>
                                                            <th>{{ $data->lang }}</th>

                                                            <th>
                                                                @if ($data->is_active == 1)
                                                                    <span
                                                                        class='badge badge-success'>{{ __('system.active') }}</span>
                                                                @else
                                                                    <span
                                                                        class='badge badge-danger'>{{ __('system.notactive') }}</span>

                                                                @endif


                                                            </th>


                                                            <th>

                                                                <div class="btn-group">
                                                                    <a href="{{ route('addconfigure', ['Miision', $data->id]) }}"
                                                                        class="btn btn-info"><i class="fa fa-edit"></i></a>

                                                                    @if ($data->is_active == 1)
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-danger"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    @else
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-success"><i
                                                                                class="fa fa-check"></i></a>
                                                                    @endif


                                                                </div>
                                                            </th>

                                                        </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane  " id="tab5">
                                        <button type="button" class="btn btn-primary" style="float:left;"><a
                                                href="{{ route('addconfigure', 'Scope') }}" class="text-white"><i
                                                    class="fe fe-plus mr-2"></i>
                                               {{ __('system.add') }}
                                            </a></button>
                                        <br>
                                        <br>

                                        <div class="contect mt-5 d-block">
                                            <table class="table table-bordered border-top mb-0 table-responsive">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <th> {{ __('system.descripe') }}</th>
                                                        <th> {{ __('system.lang') }}</th>
                                                        <th>{{ __('system.status') }}</th>

                                                        <th>{{ __('system.operation') }}</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Scope as $data)

                                                        <tr>
                                                            <td>{{ $data->id }}</td>
                                                            <th>{{ $data->description }}</th>
                                                            <th>{{ $data->lang }}</th>

                                                            <th>
                                                                @if ($data->is_active == 1)
                                                                    <span
                                                                        class='badge badge-success'>{{ __('system.active') }}</span>
                                                                @else
                                                                    <span
                                                                        class='badge badge-danger'>{{ __('system.notactive') }}</span>

                                                                @endif


                                                            </th>


                                                            <th>

                                                                <div class="btn-group">
                                                                    <a href="{{ route('addconfigure', ['Scope', $data->id]) }}"
                                                                        class="btn btn-info"><i class="fa fa-edit"></i></a>

                                                                    @if ($data->is_active == 1)
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-danger"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    @else
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-success"><i
                                                                                class="fa fa-check"></i></a>
                                                                    @endif


                                                                </div>
                                                            </th>

                                                        </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane  " id="tab6">
                                        <button type="button" class="btn btn-primary" style="float:left;"><a
                                                href="{{ route('addconfigure', 'Strategy') }}" class="text-white"><i
                                                    class="fe fe-plus mr-2"></i>
                                               {{ __('system.add') }}
                                            </a></button>
                                        <br>
                                        <br>

                                        <div class="contect mt-5 d-block">
                                            <table class="table table-bordered border-top mb-0 table-responsive">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <th> {{ __('system.descripe') }}</th>
                                                        <th> {{ __('system.lang') }}</th>
                                                        <th>{{ __('system.status') }}</th>

                                                        <th>{{ __('system.operation') }}</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Strategy as $data)

                                                        <tr>
                                                            <td>{{ $data->id }}</td>
                                                            <th>{{ $data->description }}</th>
                                                            <th>{{ $data->lang }}</th>

                                                            <th>
                                                                @if ($data->is_active == 1)
                                                                    <span
                                                                        class='badge badge-success'>{{ __('system.active') }}</span>
                                                                @else
                                                                    <span
                                                                        class='badge badge-danger'>{{ __('system.notactive') }}</span>

                                                                @endif


                                                            </th>


                                                            <th>

                                                                <div class="btn-group">
                                                                    <a href="{{ route('addconfigure', ['Strategy', $data->id]) }}"
                                                                        class="btn btn-info"><i class="fa fa-edit"></i></a>

                                                                    @if ($data->is_active == 1)
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-danger"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    @else
                                                                        <a href="{{ route('toggle_configure', $data->id) }}"
                                                                            class="btn btn-success"><i
                                                                                class="fa fa-check"></i></a>
                                                                    @endif


                                                                </div>
                                                            </th>

                                                        </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
