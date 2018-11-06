@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Record</div>
                <div class="card-body">
                    <div>
                        <p>
                            <strong>ID:</strong>
                            {{$record->id}}
                        </p>
                    </div>
                    <div>
                        <p>
                            <strong>Name:</strong>
                            {{$record->name}}
                        </p>
                    </div>
                    <div>
                        <p>
                            <strong>Image:</strong>
                            <img
                                src="{{Storage::url($record->image)}}"
                                style="max-width:200px">
                        </p>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div> <!-- .col-md-8 -->
    </div>
</div>
@endsection
