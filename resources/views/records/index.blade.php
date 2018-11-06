@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Records</div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                            <tr>
                                <td><a href='{{"/records/$record->id"}}'>{{$record->id}}</a></td>
                                <td>{{$record->name}}</td>
                                <td>
                                    <img src="{{Storage::url($record->image)}}"
                                        style="max-width:200px">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>

        </div> <!-- .col-md-8 -->
    </div>
</div>
@endsection
