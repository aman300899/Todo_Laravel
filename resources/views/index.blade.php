<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo_List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <div class="row mt-5">
    <div class="col-md-3 m-auto">
        <h3>Todo App</h3>
        <form action="/add">
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter The Task" name="item">
            </div>
            <input type="submit" value="Add Todo" class="btn btn-primary" name="add">
        </form>
    </div>
   </div><hr>
   <div class="row">
    <div class="col-md-4 m-auto">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tasks</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
        
            @foreach($tasks as $task)
        
              <tr>
                <td>{{$task['id']}}</td>
                <td>{{$task['Task']}}</td>
                <td>
                    @if($task->Completed)
                    Completed
                    @else
                    Not-Completed
                    @endif
                </td>
                <td>
                    
                    <a href={{"/delete/".$task['id']}} class="btn btn-success"><i class="fa-solid fa-check"></i></a>
                    <a href={{"/delete/".$task['id']}} class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a>
                </td>
              </tr>
            @endforeach
        </table>

    </div>

   </div>
</body>
</html>