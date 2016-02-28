@inject('countries', 'App\Http\Utilities\Country')

<!-- Street Form Input -->
<div class="form-group">
    {{ Form::label('street', 'Street:') }}
    {{ Form::text('street', old('street'), ['class' => 'form-control']) }}
</div>

<!-- City Form Input -->
<div class="form-group">
    {{ Form::label('city', 'City:') }}
    {{ Form::text('city', old('city'), ['class' => 'form-control']) }}
</div>

<!--  Form Input -->
<div class="form-group">
    {{ Form::label('zip', 'Zip Code:') }}
    {{ Form::text('zip', old('zip'), ['class' => 'form-control']) }}
</div>

<!-- Country Form Input -->
<div class="form-group">
    {{ Form::label('country', 'Country:') }}
    {{ Form::select('country', $countries::all(), old('country'), ['class' => 'form-control', 'placeholder' => '-- Select country --']) }}
</div>

<!-- State Form Input -->
<div class="form-group">
    {{ Form::label('state', 'State:') }}
    {{ Form::text('state', old('state'), ['class' => 'form-control']) }}
</div>

<!-- Price Form Input -->
<div class="form-group">
    {{ Form::label('price', 'Price:') }}
    {{ Form::text('price', old('price'), ['class' => 'form-control']) }}
</div>

<!-- Description Form Input -->
<div class="form-group">
    {{ Form::label('description', 'Description:') }}
    {{ Form::textarea('description', old('description'), ['class' => 'form-control']) }}
</div>

<hr>

<!-- Photos Form Input -->
<div class="form-group">
    {{ Form::label('photos', 'Photos:') }}
    {{ Form::file('photos', ['class' => 'form-control']) }}
</div>

{{ Form::submit('Create Flyer', ['class' => 'btn btn-primary']) }}