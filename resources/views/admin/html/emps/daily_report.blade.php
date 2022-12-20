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
                    <th  >اسم العميل </th>
                    <th    > الشخص الذي تمت مقابلتة</th>
                    <th  >    نوع النشاط  </th>
                    <th >    نوع الخدمة  </th>
                    <th  > البريد الالكتروني</th>
                   
                  
                    <th> رقم الهاتف</th>
                    <th > العنوان</th>
                   
                    <th scope="col"> المبلغ</th>
                   
                    <th scope="col"> حساب فيسبوك</th>
                    <th scope="col"> حساب تويتر</th>
                    <th scope="col"> حساب انستجرام</th>
                    <th scope="col"> حساب سناب</th>
                    <th scope="col"> حساب تيكتوك</th>
                    <th scope="col">ملاحضات </th>
                    <th> التاريخ</th>
                                                


                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            {{ Session::put('customers',$customers)}}
                                            @if (!empty($customers))
                                            @foreach ($customers as $customer)
                                                <tr>
                                                    <th scope="row">{{ $customer->id }}</th>
                                                   
                                                    <td>{{ $customer->name }}</td>
                                                    <td>{{ $customer->meeted_person_position ?? 'لايوجد' }}</td>
                                                    <td>{{ $customer->business_type }}</td>
                                                    <td>{{ $customer->service_type }}</td>
                                                    <td>{{ $customer->email }}</td>
                                                    <td>{{ $customer->phone_number }}</td>
                                                    <td>{{ $customer->address }}</td>
                                                   
                                                  
                                                    <td>{{ $customer->money ?? 'لايوجد' }}</td>
                        
                                                  
                                                    
                                                    <td><a href="{{ $customer->facebook }}">
                                                        <i class="fab fa-facebook-f"></i>
                                                      </a></td>

                                                      <td><a href="{{ $customer->twiter}}">
                                                        <i class="fab fa-twitter"></i>
                                                      </a></td>

                                                      <td><a href="{{ $customer->instgram }}">
                                                        <i class="fab fa-instagram"></i>
                                                      </a></td>

                                                      <td><a href="{{ $customer->snap }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snapchat" viewBox="0 0 16 16">
                                                            <path d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1.416 1.416 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.387 3.387 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.338.338 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.397 1.397 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.829 1.829 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.294 4.294 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0c-.92 0-1.76.216-2.505.641-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.83 1.83 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.398 1.398 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.38.38 0 0 1 .109.11c.026.053.027.11-.012.217a3.363 3.363 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075.119.125.257.23.409.31a4.43 4.43 0 0 0 1 .4.66.66 0 0 1 .202.09c.118.104.102.26.259.488.079.118.18.22.296.3.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.625.625 0 0 1 .19-.087 4.446 4.446 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047Zm-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082-1.519 0-2.045-.801-2.904-1.084-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a.93.93 0 0 1 .197.022c.396.086.78.285 1.002.338.027.007.054.01.082.011.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.35.35 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a.912.912 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464Z"/>
                                                          </svg>
                                                      </a></td>

                                                      <td><a href="{{ $customer->ticktok }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                                                          </svg>
                                                      </a></td>



                                                  



                                                    <td>{{ $customer->note }}</td>
                                                    <td>{{ $customer->created_at }}</td>
                                                    
                                                    <td>  
                                                        
                                                        <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary a-btn-slide-text">
                                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                            <span><strong>تعديل</strong></span>            
                                                        </a>
                                                    
                                                    </td>



                                                    <td>
                                                        <form method="post" onclick="return confirm('هل تريد الحذف ؟')"  action="{{route('customers.destroy',$customer->id)}}">
                                                            @method('delete')
                                                           
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                                                        </form>
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