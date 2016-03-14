@extends('layouts.master')

@section('content')
    <h1>{{ $type->name }} News</h1>
    <p class="lead">
        <button type="button" id="add_news" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newsModal">Add News?</button>

    </p>

    <br>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}

        </div>
        <br>
    @endif




@stop

@section('footer')
    @if ($errors->has())

        <script>
            //open modal when error is made
            //display errors in modal and hid them with animation slide up in 3 sec
            $('div.alert').delay(4000).slideUp(300);
            $('#locationModal').modal();
            $('.locationModal').show();

            {{ $errors = null }}
        </script>

    @endif

    @if (session()->has('success'))
        <script>
            //display success message in the top when successfully updated roster
            $('div.alert').delay(4000).slideUp(300);
        </script>
    @endif
@stop
