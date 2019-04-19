@extends('layouts.app');

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listing: {{$listing->name}}
                    <a href='/' class='float-right btn btn-secondary btn-xs'>Back</a>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group">
                            Address: {{$listing->address}}
                        </li>
                        <li class="list-group">
                            Website: <a href='{{$listing->website}}' target='_blank'>{{$listing->website}}</a>
                        </li>
                        <li class="list-group">
                            Email: {{$listing->email}}
                        </li>
                        <li class="list-group">
                            Phone: {{$listing->phone}}
                        </li>

                    </ul>
                    <hr>
                    <div class="card">
                        {{$listing->bio}}
                    </div>

                </div>
            </div>
        </div>
    </div>




@endsection
