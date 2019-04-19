@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard
                <span class="float-right">
                    <a class="btn btn-success btn-xs" href="/listings/create">Create listing</a>
                </span>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h3>Your listings</h3>

                @if(count($listings)>0)
                    <table class="table table-striped">

                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>

                        @foreach($listings as $listing)

                            <tr>
                                <td>{{$listing->name}} </td>
                                <td>
                                    <a href='/listings/{{$listing->id}}/edit' class='float-right btn btn-secondary btn-xs'>Edit</a>
                                </td>
                                <td>

                                        {!! Form::open(['action' => ['ListingsController@destroy', $listing->id],
                                                       'method' => 'POST',
                                                       'class'=>'float-right',
                                                       'onsubmit'=> 'return confirm("Are you sure?")'
                                                        ]) !!}
                                        {!! Form::bsSubmit('delete', 'Delete', ['class'=>'btn btn-danger']) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        {!! Form::close() !!}

                                </td>
                            </tr>

                        @endforeach

                    </table>
                @else
                    <p>No listings.</p>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
