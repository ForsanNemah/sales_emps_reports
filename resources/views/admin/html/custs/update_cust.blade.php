<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('/css/easion.css')}} "                        >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src= "{{URL::asset('/js/chart-js-config.js')}} "     ></script>
    <title>Easion - Bootstrap Dashboard Template</title>
</head>

<body>
    <div class="dash">

        @include('admin.sidebar_admin')
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form>
                <div class="tools">
                    <a href="https://github.com/subet/easion" target="_blank" class="tools-item">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#!" class="tools-item">
                        <i class="fas fa-bell"></i>
                        <i class="tools-item-count">4</i>
                    </a>
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">Profile</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
 


                                   
            <main class="dash-content">
                <div class="container-fluid">
                    <h1 class="dash-title"></h1>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                   

                                    
                                    <div class="easion-card-title"> تعديل موضف </div>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body  p-2">
                                        <form class="row g-3" method="post" action="{{ route('emp_destroy.update', $user->id) }}"> 
                                            <div class="row pr-5">
                                                @method('PATCH') 
                                                @csrf
                                                <div class="col-md-12">
                                                    <label for="inputEmail4" class="form-label">اسم الموظف</label>
                                                    <input required type="text" class="form-control" name='name' id="inputEmail4" value="{{ $user->name }}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputPassword4" class="form-label">كلمة السر</label>
                                                    <input required type="text" class="form-control" name="password" id="inputPassword4" value="{{Crypt::decryptString($user->password)  }}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputusername" class="form-label">الايميل  </label>
                                                    <input required  type="text" name="mail" class="form-control" id="inputusername" value="{{ $user->email }}">
                                                </div>
                                                 
                               
                                                <div class="col-md-12">
                                                
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">حفظ</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                       
                    </div>
                   
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src= "{{URL::asset('/js/easion.js')}} "           ></script>
</body>

</html>