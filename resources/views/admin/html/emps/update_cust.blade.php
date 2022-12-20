<!doctype html>
<html lang="en">

    
@include('admin.html.import')
<body>
    <div class="dash">

        @include('admin.sidebar_admin')
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
                                   

                                    
                                    <div class="easion-card-title"> تعديل تقرير </div>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body  p-2">
                                        


                                        <form method="POST" action="{{ route('customers.update',$customer->id) }}">
                                            <div class="row pr-5">
                                                @method('PATCH') 
                                                @csrf

                                                
                                
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">*اسم العميل</label>
                                                    <input type="text" class="form-control" name='name' id="inputEmail4" required value="{{ $customer->name }}">
                                                </div>
                                
                                
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label"> *نوع النشاط </label>
                                                    <input type="text" class="form-control" name='business_type' id=" " required value="{{ $customer->business_type }}">
                                                </div>
                                
                                
                                
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label"> *نوع الخدمة </label>
                                                    <input type="text" class="form-control" name='service_type' id="service_type" required value="{{ $customer->service_type }}">
                                                </div>
                                
                                

                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label"> * المبلغ </label>
                                                    <input type="text" class="form-control" name='mony' id="mony"  value="{{ $customer->money }}">
                                                </div>
                                
                                           
                                
                                
                                                <div class="col-md-6">
                                                    <label for="inputPassword4" class="form-label">*رقم الهاتف   </label>
                                                    <input type="number" class="form-control" name="phone" id="inputPassword4" required value="{{ $customer->phone_number }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">البريد الالكتروني</label>
                                                    <input type="email" name="email" class="form-control" id="inputEmail4" value="{{ $customer->email}}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputusername" class="form-label"> *العنوان</label>
                                                    <input type="text" name="address" class="form-control" id="inputusername" required value="{{ $customer->address }}">
                                                </div>
                                
                                                @if (!empty($report) && $report == 'بيع')
                                                    <div class="col-md-6">
                                                        <label for="money" class="form-label"> *المبلغ</label>
                                                        <input type="number" name="money" class="form-control" id="money" required value="{{ $customer->mony }}">
                                                    </div>
                                                @endif
                                
                                                @if (!empty($report) && $report == 'زيارة')
                                                  
                                                @endif
                                
                                                <div class="col-md-6">
                                                    <label for="money" class="form-label"> *الشخص الذي تمت مقابلتة</label>
                                                    <input type="text" name="meeting" class="form-control" id="meeted_person" required value="{{ $customer->meeted_person_position }}">
                                                </div>
                                
                                                <div class="col-md-6">
                                                    <label for="inputfacebook" class="form-label"> حساب فيسبوك</label>
                                                    <input type="text" name="facebook" class="form-control" id="inputfacebook" value="{{ $customer->facebook }}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputtwiter" class="form-label"> حساب تويتر</label>
                                                    <input type="text" name="twiter" class="form-control" id="inputtwiter" value="{{ $customer->twiter }}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputinstagram" class="form-label"> حساب انستجرام</label>
                                                    <input type="text" name="insta" class="form-control" id="inputinstagram" value="{{ $customer->instgram }}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputsnap" class="form-label"> حساب سناب</label>
                                                    <input type="text" name="snap" class="form-control" id="inputsnap" value="{{ $customer->snap }}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputticktok" class="form-label"> حساب تيكتوك</label>
                                                    <input type="text" name="ticktok" class="form-control" id="inputticktok" value="{{ $customer->ticktok }}">
                                                </div>
                                                {{-- <div class="col-12">
                                                        <label for="inputticktok" class="form-label"> التاريخ</label>
                                                        <input type="date" name="date" class="form-control" id="inputticktok">
                                                    </div> --}}
                                                <div class="col-md-12">
                                                    <label for="exampleFormControlTextarea1" class="form-label">ملاحضات </label>
                                                    <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3"  >{{ $customer->note }}</textarea>
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
     
</body>

</html>