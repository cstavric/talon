@extends('layouts.master')

@section('content')



<h1>{{ $type->name }} Roster</h1>
<p class="lead">
    <button type="button" id="add_new" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add Player?</button>
   
</p>

<ul class="nav nav-tabs">
	 <li class="active"><a href="/rosters/{{ $type->id }}">All</a></li>
	@foreach($levels as $level)
  <li><a href="/rosters/{{ $type->id }}/filter/{{$level['id']}}">{{$level['name']}}</a></li>
    @endforeach
</ul>


<br>
	<div class="selected_level_id" style="display: none;"  >1</div>
    <div class="selected_sport_id" style="display: none;"  >{{ $type->id }}</div>
        @if (session()->has('success'))
  <div class="alert alert-success">
            {{Session::get('success')}}

    </div>
    <br>
        @endif

          @if ($rosters->isEmpty() )
<div class="bs-callout bs-callout-warning">
  <h4>No Results</h4>
  Nothing to see here please select another level, or create a player 
     <a  data-toggle="modal" data-target="#myModal">Here</a>
</div>

 @else

                        <div class="panel panel-primary">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead  style="background-color:#337AB7; color:white">
                                        <tr>  
                                            <th>  </th>
                                            <th>Jersey</th>                                      
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	@foreach($rosters as $roster)
                                        <tr>
                                        	<td><img src="{{asset('uploads/'.$roster->photo ) }}" alt="{{ $roster->first_name }} &nbsp {{ $roster->last_name}}"  height="42"></td>
                                            <td class="jersey">{{ $roster->jersey }}</td>
                                            <td class="first_name">{{ $roster->first_name }}</td>
                                            <td class="position">{{ $roster->position}}</td>
                                            <td> <button type="button" class="btn btn-primary btn-sm use-address" data-id="{{ $roster->id}}" data-toggle="modal" data-target="#myModal">Edit</button></td>
                                            <td> {!! Form::open([    'method' => 'DELETE','route' => ['rosters.destroy', $roster->id]]) !!}{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}{!! Form::close() !!}</td>
                                            <td class="id" style="display: none;"  />{{ $roster->id}}</td>
                                            <td class="height_feet" style="display: none;"  />{{ $roster->height_feet}}</td>
                                            <td class="height_inches" style="display: none;"  />{{ $roster->height_inches}}</td>
                                            <td class="weight" style="display: none;"  />{{ $roster->weight}}</td>
                                            <td class="hometown" style="display: none;"  />{{ $roster->hometown}}</td>
                                            <td class="verse" style="display: none;"  />{{ $roster->verse}}</td>
                                            <td class="food" style="display: none;"  />{{ $roster->food}}</td>
                                            <td class="years_at_sfc" style="display: none;"  />{{ $roster->years_at_sfc}}</td>
                                            <td class="image_name" style="display: none;"  />{{ $roster->photo}}</td>
                                        </tr>
                                        @endforeach
                               @endif

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

  <!-- Modal -->
  @include('rosters.modals.rosters_form')



@stop

@section('footer')
    <script src="/dist/js/sb-admin-2.js"></script>
          @if ($errors->has())

              <script>
                  //set the image when redirected back with errors
                  $('#photo').attr('src',document.getElementById('invisible_image').value);

                  //open modal when error is made
                  //display errors in modal and hid them with animation slide up in 3 sec
                  $('div.alert').delay(4000).slideUp(300);
                  $('#myModal').modal();
                  $('.myModal').show();

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
