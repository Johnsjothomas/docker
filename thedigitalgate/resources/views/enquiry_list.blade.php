<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body >

       <div class="container">
  <h2>Enquiry</h2>      
  <table class="table">
    <thead>
      <tr>
        <th>Sl</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
      @forelse($enquiries as $key=>$val)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$val->name}}</td>
        <td>{{$val->email}}</td>
        <td>{{$val->mobile}}</td>
        <td>{{$val->message}}</td>
      @empty
      <tr><td>No records dound</td></tr>
      @endforelse
     
    </tbody>
  </table>
</div>
      
    </body>



</html>
