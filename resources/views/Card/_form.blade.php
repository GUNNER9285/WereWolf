{{ Form::label('name', 'Name')}}
{{ Form::text('name') }}
<br>
{{Form::label('effect', 'Effect')}}
{{Form::textarea('effect')}}
<br>
{{Form::label('image', 'Image')}}
{{Form::text('image')}}
<br>
{{Form::label('point', 'Point')}}
{{Form::text('point')}}
<br>
{{Form::submit($submitBtn)}}