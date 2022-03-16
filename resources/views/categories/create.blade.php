@extends('layouts.sidebar') 
      @section('sidebare')

      <div class="container">
<h1>Create Category</h1>
    <br>
    <br>
    <form action="{{route('categories.store')}}" method="post">
        @csrf 

    <table class="table table-hover">
        <tr>
            <td><label for="">Title</label> </td>
          
            <td> <input class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" name="title"></td>
        
            @error ('title') 
            <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
         @enderror 
        
    </tr>
    <tr>
        <td><div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="1">
  <label class="form-check-label" for="flexRadioDefault1">
    active
  </label>
</div>
</td>
        <td><div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" checked value="0">
  <label class="form-check-label" for="flexRadioDefault2">
    desactive
  </label>
</div></td>
    </tr>
    <tr>
        <td> <button type="submit" class="btn btn-success">create</button></td>
    </tr>
</table> 
</form>
     
     
     
     
      @endsection
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>