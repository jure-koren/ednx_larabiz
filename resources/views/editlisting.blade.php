@extends('layouts.app');

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing
                    <a href='/dashboard' class='float-right btn btn-secondary btn-xs'>Back</a>
                </div>

                <div class="card-body">

                    {!! Form::open(['action' => ['ListingsController@update', $listing->id],
                                   'method' => 'POST' ]) !!}

                    {!! Form::bsText('name', $listing->name, ['placeholder'=>'Company name']) !!}
                    {!! Form::bsText('email', $listing->email, ['placeholder'=>'Company EMail']) !!}
                    {!! Form::bsText('website', $listing->website, ['placeholder'=>'Company Website']) !!}
                    {!! Form::bsText('phone', $listing->phone, ['placeholder'=>'Company Phone']) !!}
                    {!! Form::bsText('address', $listing->address, ['placeholder'=>'Company Address']) !!}

                    {!! Form::bsTextArea('bio', $listing->bio, ['placeholder'=>'Company Bio']) !!}

                    {!! Form::bsSubmit('submit', 'Submit', ['class'=>'btn btn-primary']) !!}

                    {!! Form::hidden('_method', 'PUT') !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>




@endsection
