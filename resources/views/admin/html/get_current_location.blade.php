 
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
 </script>

 

 

<script>


/*
window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}

*/




    getLocation();
  
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
      alert("Geolocation is not supported by this browser.");
    }
  }
  
  function showPosition(position) {
    
  
    //alert( position.coords.latitude);
    //alert( position.coords.longitude);
    alert("تم الحصول على موقعك بنجاح ");

    $.post('/set_session', {"_token": "{{ csrf_token() }}",x: position.coords.latitude,y:position.coords.longitude},
  function (data) {

    //alert(data);
    
  }
 );

  }
  </script>
   