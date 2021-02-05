
  
  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="bootstrap/js/jquery-ui.js"></script>
      
   <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <script src="bootstrap/js/jquery.wm-zoom-1.0.min.js"></script>
    <script src="bootstrap/js/jqzoom.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
     
     <script src="bootstrap/bootbox.min.js"></script>
    
     <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    
 <script>
$("#pro-form").hide();
  $("#add-product-btn").click(function(){
	   $(".tbl").hide(); 
  $("#pro-form").fadeIn(500);
	 
     
        });
        
	 
</script>
   
   

   
<script>
$(document).ready(function(){
$('.delete_employee').click(function(e){
e.preventDefault();
var empid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'empid='+empid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
 
  
       
<script>
$(document).ready(function(){
$('.delete_pie').click(function(e){
e.preventDefault();
var pieid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'pieid='+pieid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
     
     
      
       
<script>
$(document).ready(function(){
$('.delete_dessert').click(function(e){
e.preventDefault();
var dessertid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'dessertid='+dessertid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
     
     
          
<script>
$(document).ready(function(){
$('.delete_cupcake').click(function(e){
e.preventDefault();
var cupcakeid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'cupcakeid='+cupcakeid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
     
     
            
<script>
$(document).ready(function(){
$('.delete_cookies').click(function(e){
e.preventDefault();
var cookiesid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'cookiesid='+cookiesid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
    
     
     
                 
<script>
$(document).ready(function(){
$('.delete_bread').click(function(e){
e.preventDefault();
var breadid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'breadid='+breadid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
  
    
    
               
<script>
$(document).ready(function(){
$('.delete_basic').click(function(e){
e.preventDefault();
var basicid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'basicid='+basicid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
    
     
     
                
<script>
$(document).ready(function(){
$('.delete_cheese').click(function(e){
e.preventDefault();
var cheeseid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'cheeseid='+cheeseid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
    
     <script>
$(document).ready(function(){
$('.delete_dough').click(function(e){
e.preventDefault();
var doughid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'doughid='+doughid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
    
    
    
     <script>
$(document).ready(function(){
$('.delete_french').click(function(e){
e.preventDefault();
var frenchid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'frenchid='+frenchid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
    
    
    <script>
$(document).ready(function(){
$('.delete_pudding').click(function(e){
e.preventDefault();
var puddingid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'puddingid='+puddingid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
    
 
    <script>
$(document).ready(function(){
$('.delete_review').click(function(e){
e.preventDefault();
var reviewid = $(this).attr('data-emp-id');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Delete ?",
title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Delete!",
className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'delete',
data: 'reviewid='+reviewid
})
.done(function(response){
bootbox.alert(response);
parent.fadeOut('slow');
})
.fail(function(){
bootbox.alert('Error....');
})
}
}
}
});
});
});
</script>
  
   
       
 <script>
      $( "li" ).hover(
  function() {
      $(this).find("span").stop().animate({
      width:"100%",
      opacity:"1",
    }, 400, function () {
    })
  }, function() {
      $(this).find("span").stop().animate({
      width:"0%",
      opacity:"0",
    }, 400, function () {
    })
  }
);
</script>
    
    
                               
                              

                                  

<script>
$(document).ready(function(){
	$('.email_button').click(function(){
		$(this).attr('disabled', 'disabled');
		var id  = $(this).attr("id");
		var action = $(this).data("action");
		var email_data = [];
		if(action == 'single')
		{
			email_data.push({
				email: $(this).data("email"),
				name: $(this).data("name")
			});
		}
		else
		{
			$('.single_select').each(function(){
				if($(this).prop("checked") == true)
				{
					email_data.push({
						email: $(this).data("email"),
						name: $(this).data('name')
                        
					});
				} 
			});
		}

		$.ajax({
			url:"send-mail",
			method:"POST",
			data:{email_data:email_data},
			beforeSend:function(){
				$('#'+id).html('Sending...');
				$('#'+id).addClass('btn-danger');
			},
			success:function(data){
				if(data == 'ok')
				{
					$('#'+id).text('Success');
					$('#'+id).removeClass('btn-danger');
					$('#'+id).removeClass('btn-info');
					$('#'+id).addClass('btn-success');
				}
				else
				{
					$('#'+id).text(data);
				}
				$('#'+id).attr('disabled', false);
			}
		})

	});
});
    
   
</script>


     
     
      
      
    </body>
</html>
   
      