 
<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
 

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>





 


      <script>
 
  getLocation();

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  

  alert( position.coords.latitude);
  alert( position.coords.longitude);

 

}






/*

$(document).ready(function () {

  $.get('set_session',function(result){


    alert(result);
  }
  
  );
*/
/*

$.ajax({
  type: "POST",
  url: "/set_session",
  data: "[id:1]",
  dataType: "dataType",
  success: function (response) {

    alert(response);
    
  }
});

*/



 


 $.post('/set_session', {"_token": "{{ csrf_token() }}",x:'7',y:'forsan'},
  function (data) {

    alert(data);
    
  }
 );
  
 



 
</script>
 