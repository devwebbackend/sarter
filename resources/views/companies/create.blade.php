@extends('layouts.sidebar') 
      @section('sidebare')
<div class="container">
<h1>Create</h1>
    <br>
    <br>
    <form action="{{route('companies.store')}}" method="post">
        @csrf 

    <table class="table table-hover">
        <tr>
            <td><label for="">Name</label> </td>
          
            <td> <input class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" name="name"></td>
        
            @error ('name') 
            <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
         @enderror 
        
    </tr>
    <tr>
            
    <td><label for="">Email</label></td>

    <td> <input class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" name="email"></td>
    @error ('email') 
    <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
            <div></div>
         @enderror 
    </tr>
    <tr>
         
            <td><label for="">Address</label></td>
         
            <td><input class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" name="address"></td>
            @error ('address') 
            <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
         @enderror 
        
    </tr>
    </table>
    <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>