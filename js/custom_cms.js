//Custom JS codes for the CMS.


$(document).ready(function()
	{
		//Login Page
		$('#loginBtn').click(function(e)
		{
			e.preventDefault();
			$("#sessionExpAlert").slideUp();
			$("#logoutAlert").slideUp();
			$("#idPwdAlert").slideUp();

			var u = $("#userid").val();
			var p = $("#password").val();

			if(u=="")
			{
				console.log("inside");
				$("#userid").addClass("nullError");
				$("#userid").effect("shake", 700);
				$("#userid").attr("placeholder", "User Name is required");
			}
			else if(p=="")
			{
				$("#userid").removeClass("nullError");
				$("#password").addClass("nullError");
				$("#password").effect("shake", 700);
				$("#password").attr("placeholder", "Password is required");
			}
			else
			{
				//user id and password provided by the user. Now we check for validation
				$("#userid").removeClass("nullError");
				$("#password").removeClass("nullError");
				$.post("validate", 
					{
						userid: u,
						password: p
					},
					function(data)
					{
						if(data=="error")
						{
							//user id is incorrect,
							$("#idPwdAlert").slideUp(function(){
								$("#idPwdAlert").html("<center>OOPS! User ID or Password is incorrect</center>");
								$("#idPwdAlert").slideDown();
							});
							
						}
						else
						{
							window.location.href=data;
						}
					}
				);
			}


		});

		//HOME Slider Table
		$("#slider_table").ready(function()
		{
			$.ajax({
			  url: "/vit/cms/home/slider_data"
			}).done(function(data) {
				$('#slider_table tbody').append(data);
			})
			  .fail(function() {
			alert("Bye World");
			  	//incase of any error occured during the ajax call...
			    var e = "<tr><td>1</td><td>Error</td><td>Occured</td></tr>";
				$('#slider_table tbody').append(e);
			  });

			if($("#slider_msg").html()!="")
				$("#slider_msg").slideDown();
		});

	}
);