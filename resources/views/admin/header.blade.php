<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>


<header class="dash-toolbar">
    <a href="#!" class="menu-toggle">
        <i class="fas fa-bars"></i>
    </a>
   

    <a   class="searchbox-toggle">
        <i class="fas fa-search"></i>
    </a>
  
        <a  class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
        <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
        <input id="search_box" type="text" class="searchbox-input" onkeyup="myFunction()" placeholder="ابحث هنا ">
     <a>


        <button type="button" onclick="ExportToExcel('xlsx')" class="btn btn-primary">تنزيل تقرير </button>
     </a>
    
   
    <div class="tools">
        
        
        <div class="dropdown tools-item">
            <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                 
                


                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ "تسجيل خروج" }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                
            </div>
        </div>
    </div>
</header>

<script>





function ExportToExcel(type, fn, dl) {



    var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
 




            var elt = document.getElementById('mytable');
            var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
            return dl ?
                XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
                XLSX.writeFile(wb, fn || (today+"." + (type || 'xlsx')));
        }












function print() {
  alert("wwe");
}
</script>