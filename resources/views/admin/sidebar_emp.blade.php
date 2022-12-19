
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




<div class="dash-nav dash-nav-dark">
    <header>
        <a href="#!" class="menu-toggle">
            <i class="fas fa-bars"></i>
        </a>
        <a   class="easion-logo"><i class="fas fa-sun"></i> <span>شركة النافذة</span></a>
    </header>

    <nav class="dash-nav-list">
        <a  class="dash-nav-item">
            <i class="fas fa-home"></i> لوحة التحكم </a>

        <div class="dash-nav-dropdown">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-chart-bar"></i>    انشاء تقرير </a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{route('customers.create')}}" class="dash-nav-dropdown-item">زيارة </a>
                <a href="{{route('customer_add_with_mony')}}" class="dash-nav-dropdown-item">بيع </a>
                <a href="{{route('emp_report_no_edit',auth()->user()->id ) }}" class="dash-nav-dropdown-item">تقريري اليومي </a>
            </div>
        </div>


        

      
        <div class="dash-nav-dropdown">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-info"></i> عن شركة النافذة </a>
            <div class="dash-nav-dropdown-menu">
                <a href="https://wmc-ksa.com" target="_blank" class="dash-nav-dropdown-item">موقعنا الالكتروني </a>
          
            </div>
        </div>
    </nav>
</div>