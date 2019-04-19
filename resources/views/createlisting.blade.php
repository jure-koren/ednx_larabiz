@extends('layouts.app');

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing
                    <a href='/dashboard' class='float-right btn btn-secondary btn-xs'>Back</a>
                </div>

                <div class="card-body">

                    {!! Form::open(['action' => 'ListingsController@store',
                                   'method' => 'POST' ]) !!}

                    {!! Form::bsText('name', '', ['placeholder'=>'Company name']) !!}
                    {!! Form::bsText('email', '', ['placeholder'=>'Company EMail']) !!}
                    {!! Form::bsText('website', '', ['placeholder'=>'Company Website']) !!}
                    {!! Form::bsText('phone', '', ['placeholder'=>'Company Phone']) !!}
                    {!! Form::bsText('address', '', ['placeholder'=>'Company Address']) !!}

                    {!! Form::bsTextArea('bio', '', ['placeholder'=>'Company Bio']) !!}

                    {!! Form::bsSubmit('submit', 'Submit', ['class'=>'btn btn-primary']) !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>




@endsection
