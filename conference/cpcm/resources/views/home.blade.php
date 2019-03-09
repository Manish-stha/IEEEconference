@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        @foreach($vomit as $i)

                        <div class="card mt-3">

                            <div class="mycard">

                                <div class="card-body">
                                    <ul>
                                            <li>
                                               id : {{ $i->id }}
                                            </li>
                                            <li>
                                                Name : {{ $i->name }}
                                            </li>
                                            <li>
                                               Email : {{ $i->email }}
                                            </li>
                                            <li>
                                               contact : {{ $i->contact }}
                                            </li>
                                            <li>
                                               ticket catagory : {{ $i->cat_id }}
                                            </li>

                                    </ul>
                                </div>

                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
