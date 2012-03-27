<a id="all_users" href="<?php echo site_url('api/userapi/users'); ?>">read all users</a>
<table id="userlist" cellspacing="0" cellpadding="10" border="1"> 
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td>sum</td>
            <td id="sum"></td>
        </tr>
    </tfoot>
    <tbody>
    </tbody>
</table>
<br><br>

<script type="text/javascript">
    
$(function(){
        //$("#userlist").hide();
	// Bind a click event to the 'ajax' object id
	$("#all_users").click(function(evt){
		// Javascript needs totake over. So stop the browser from redirecting the page
		evt.preventDefault();
		// AJAX request to get the data
                
		$.ajax({
			// URL from the link that was clicked on
			url: $(this).attr("href"),
                        //dataType: "xml",
                        type: "get",
			// Success function. the 'data' parameter is an array of objects that can be looped over
			success: function(data, textStatus, jqXHR){
				//alert('Successful AJAX request!');
                                var i = 0;
                         
                           	$(data).find("item").each(function() {
                                    i++;
                                    $("#userlist").find("tbody").last().append("<tr><td>"+$(this).find("idUser").text()+"</td><td>"+$(this).find("userName").text()+"</td></tr>");
                                });
                                $("#sum").text(i);
                                $("#userlist").show();
			},
			// Failed to load request. This could be caused by any number of problems like server issues, bad links, etc. 
			error: function(jqXHR, textStatus, errorThrown){
				alert('Oh no! A problem with the AJAX request!');
			}
		});
	});
        
});
</script>