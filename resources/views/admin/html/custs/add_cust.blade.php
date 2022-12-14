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
    <h>  {{Session::get('x')}}</h>
    <div class="dash">

        @include('admin.sidebar_emp')
        <div class="dash-app">
         @include('admin.header')

            @if (Session::has('done'))
                                    @include('msgs.done')
                                  
                                   
                                    @endif

                                    @if (Session::has('error'))
                                    @include('msgs.error')
                                  
                                   
                                    @endif


                                   
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
                                   

                                    
                                    <div class="easion-card-title"> اضافة تقرير </div>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body  p-2">
                                        


                                        <form method="POST" action="{{ route('customers.store') }}">
                                            <div class="row pr-5">
                                                @csrf
                                
                                
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">*اسم العميل</label>
                                                    <input type="text" class="form-control" name='name' id="inputEmail4" required>
                                                </div>
                                
                                
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label"> *نوع النشاط </label>
                                                    <input type="text" class="form-control" name='business_type' id=" " required>
                                                </div>
                                
                                
                                
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label"> *نوع الخدمة </label>
                                                    <input type="text" class="form-control" name='service_type' id="service_type" required>
                                                </div>
                                
                                
                                           
                                
                                
                                                <div class="col-md-6">
                                                    <label for="inputPassword4" class="form-label">*رقم الهاتف   </label>
                                                    <input type="number" class="form-control" name="phone" id="inputPassword4" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">البريد الالكتروني</label>
                                                    <input type="email" name="email" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputusername" class="form-label"> *العنوان</label>
                                                    <input type="text" name="address" class="form-control" id="inputusername" required>
                                                </div>
                                
                                                @if (!empty($report) && $report == 'بيع')
                                                    <div class="col-md-6">
                                                        <label for="money" class="form-label"> *المبلغ</label>
                                                        <input type="number" name="money" class="form-control" id="money" required>
                                                    </div>
                                                @endif
                                
                                                @if (!empty($report) && $report == 'زيارة')
                                                  
                                                @endif
                                
                                                <div class="col-md-6">
                                                    <label for="money" class="form-label"> *الشخص الذي تمت مقابلتة</label>
                                                    <input type="text" name="meeting" class="form-control" id="meeted_person" required>
                                                </div>
                                
                                                <div class="col-md-6">
                                                    <label for="inputfacebook" class="form-label"> حساب فيسبوك</label>
                                                    <input type="text" name="facebook" class="form-control" id="inputfacebook">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputtwiter" class="form-label"> حساب تويتر</label>
                                                    <input type="text" name="twiter" class="form-control" id="inputtwiter">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputinstagram" class="form-label"> حساب انستجرام</label>
                                                    <input type="text" name="insta" class="form-control" id="inputinstagram">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputsnap" class="form-label"> حساب سناب</label>
                                                    <input type="text" name="snap" class="form-control" id="inputsnap">
                                                </div>


                                                <div class="col-md-12">
                                                    <label for="inputticktok" class="form-label"> حساب تيكتوك</label>
                                                    <input type="text" name="ticktok" class="form-control" id="inputticktok">
                                                </div>


                                                <div class="col-md-12">
                                                    <label for="inputticktok" class="form-label"> خط الطول </label>
                                                    <input readonly   type="text" name="x" class="form-control" id="inputticktok" value=" {{Session::get('x')}}">
                                                </div>


                                                <div class="col-md-12">
                                                    <label for="inputticktok" class="form-label">   خط العرض </label>
                                                    <input readonly   type="text" name="y" class="form-control" id="inputticktok" value=" {{Session::get('y')}}">
                                                </div>
                                                {{-- <div class="col-12">
                                                        <label for="inputticktok" class="form-label"> التاريخ</label>
                                                        <input type="date" name="date" class="form-control" id="inputticktok">
                                                    </div> --}}
                                                <div class="col-md-12">
                                                    <label for="exampleFormControlTextarea1" class="form-label">ملاحضات </label>
                                                    <textarea class="form-control" name="note" id="exampleFormControlTextarea1"  rows="3"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">انشاء</button>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></scrip>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/easion.js"></script>
</body>

</html>