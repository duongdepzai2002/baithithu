<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<style>
    tr{
        text-align: center;
        
    }
    td, th{
        vertical-align: middle;
    }
    th{
        background-color: black !important;
        color: white;
    }
    .container{
        max-width: 1290px;
        max-width: auto;
    }
    table{
        border: 1px black solid;
    }
    #btn-add{
        padding: 7px 50px;
    }
    .btn:hover{ 
        cursor: pointer;
        background-color: blueviolet;
    }
    h1{ 
        text-align: center;
    }
  </style>
</head>
<body>
    <h1>STUDENT MANAGE</h1>
    <div class="container">

    <table style="" class="table">
        <thead>
          <tr class="colll">
            <th  scope="col">STT</th>
            <th  scope="col">ID</th>
            <th  scope="col">Fullname</th>
            <th  scope="col">Birthday</th>
            <th  scope="col">Address</th>
            <th  scope="col">Edit</th>
            <th  scope="col">Delete</th>

          </tr>
          
        </thead>
        <tbody>
            <?php $index=1 ?>
            @forelse($students as $student)
            <tr>
                
                <td scope="row">{{ $index++ }}</td>
                <td>{{ $student['id'] }}</td>
                <td class="pr-5 text-right">{{ $student['fullname'] }}</td>
                <td>{{ $student['birthday'] }}</td>
                <td>{{ $student['address'] }}</td>
                <td><a href="student/{{ $student->id }}/edit"
                    class="btn btn-outline-primary">Edit</a></td>
                <td><a href="student/{{ $student->id }}"
                    onclick="return confirm(&quot;Confirm delete?&quot;)"
                    class="btn btn-outline-primary">Delete</a>
                   
                </form>
                </td>
               
            </tr>
            @empty
            <tr>
                <td colspan="3">No products found</td>
            </tr>
            @endforelse
            
        </tbody>
        
      </table>
      <div style="width: 100%;text-align: center;">
        <a href="student/create"
        class="btn btn-outline-primary" id="btn-add">ADD</a>
      </div>
      
      
    </div>
</body>
</html>