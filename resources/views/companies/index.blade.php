@extends('layouts.sidebar') 
      @section('sidebare')

   <div class="row">
    <div><a href="{{ route('home.index') }}">home</a></div>
   </div>
<div class="container">
@if (session('succes'))
    <div class="alert alert-success" role="alert">
        {{ session('succes') }}
    </div>
@endif

    <h1>Company </h1>
    <br>
    <br>
    <a href="{{ route('companies.create')}}" > <button class="btn btn-success">Creat Company</button></a>
    <br>
    <br>
    <table border=1  class="table">
        <th scope="col">  s.no  </th>
        <th scope="col">  Company name </th>
        <th scope="col">  Company Email </th>
        <th scope="col">  Address </th>
        <th scope="col">  Edit </th>
        <th scope="col">  Delete </th>
        @foreach($companies as $company)
        <tr>
            <td>{{$company->id}}</td>
            <td>{{$company->name}}</td>
            <td>{{$company->email}}</td>
            <td>{{$company->address}}</td>
           
          
        
           
          <td> <a href={{route('companies.edit', compact('company') )}}> <button class="btn btn-primary">edit</button></a></td>
           
          <form action="{{route('companies.destroy', compact('company') )}}" method="post"> 
          @csrf 
          @method('DELETE')
            <td>  <button type="submit" class="btn btn-danger">delete</button></td>
          </form>
        </tr>
       
        @endforeach

       

       
  


</table>

{!! $companies->links() !!}
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>