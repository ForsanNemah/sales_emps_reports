<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/easion.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>Easion - Bootstrap Dashboard Template</title>
</head>

<body>
    <div class="dash">
@include('admin.header')


     @include('admin.sidebar_admin')
  


    


     
        <div class="dash-app">

            @if (Session::has('done'))
            @include('msgs.done')
          
           
            @endif
       
            @if (Session::has('error'))
            @include('msgs.error')
          
           
            @endif
          
            <main class="dash-content">
                <div class="container-fluid">
                    <h1 class="dash-title"></h1>
                  
                       
                          
                                <div class="card-header">
                                    
                                    <div class="easion-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="easion-card-title"> </div>
                                </div>

                                


                                <div class="card-body ">
                                    <table class="table table-in-card" id="mytable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">الاسم</th>
                                                <th scope="col">الايميل</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                


                                            </tr>
                                        </thead>
                                        <tbody>
                                            

                                            @if (!empty($users))
                                            @foreach ($users as $users)
                                                <tr>
                                                    <th>{{ $users->id }}</th>
                                                    <td>{{ $users->name }}</td>
                                                    <td>{{ $users->email }}</td>
                                                    
                                                    <td>  
                                                        
                                                        <a href="{{route('emp_destroy.edit',$users->id)}}" class="btn btn-primary a-btn-slide-text">
                                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                            <span><strong>تعديل</strong></span>            
                                                        </a>
                                                    
                                                    </td>



                                                    <td>
                                                        <form method="post" onclick="return confirm('هل تريد الحذف ؟')"  action="{{route('emp_destroy.destroy',$users->id)}}">
                                                            @method('delete')
                                                            @csrf
                                                           
                                                            <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                                                        </form>
                                                    </td>


                                                    <td>  
                                                        
                                                        <a href="{{route('emp_report',$users->id)}}" class="btn btn-primary a-btn-slide-text">
                                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                          
                                                            <span><strong>تقرير يومي </strong></span>            
                                                        </a>
                                                    
                                                    </td>


                                                    <td>  
                                                        
                                                        <a href="{{route('emp_report_full',$users->id)}}" class="btn btn-primary a-btn-slide-text">
                                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                            
                                                            <span><strong>تقرير شامل</strong></span>            
                                                        </a>
                                                    
                                                    </td>


                                                 


                                                </tr>
                                            @endforeach
                                        @endif







                                            
                                        </tbody>
                                    </table>

                                   
                                    

                                </div>
                            
                     


                        
                 


                   
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/easion.js"></script>
</body>

</html>


@include('admin.filter')