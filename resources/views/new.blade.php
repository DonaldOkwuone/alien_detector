@extends('master')

@section('content')

 


<h3>Report New Alien</h3>

<div>
  <form action="{{url('/info')}}" method="POST">
  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="country">Country</label>
    <input type="text" id="country" name="country">

    <label for="city">City</label>
    <input type="text" id="city" name="city">

    <label for="date">Date</label>
    <input type="text" id="date" name="date">

    <label for="no_of_aliens">No of Aliens</label>
    <input type="text" id="no_of_aliens" name="no_of_aliens">



    <label for="color">Color of Alien</label>
    <select id="color" name="color_of_aliens">
      <option value="red">Red</option>
      <option value="blue">Blue</option>
      <option value="green">Green</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>


@endsection