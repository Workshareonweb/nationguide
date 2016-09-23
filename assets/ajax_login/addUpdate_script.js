// JavaScript Document

$('document').ready(function()
{ 
    //Department
     /* validation */
	 $("#form_dept").validate({
		 rules:
		 {
			 deptname: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 deptname: "Please enter Department name"
		 },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#form_dept").serialize();
				
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/information/addDept',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-dept").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-dept").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; រក្សាទុក ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-dept").html('រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "dept";', 4000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-dept").html(' រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
	   /* form submit */
    
    //edit form 
     /* validation */
	 $("#form_deptEdit").validate({
		 rules:
		 {
			 deptname: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 deptname: "Please enter Department name"
		 },
	   submitHandler: submitFormDept	
       });
	   /* validation */
	   /* form submit */
	   function submitFormDept()
	   {		
				var data = $("#form_deptEdit").serialize();
				
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/information/addDept',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-dept").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-dept").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; កំពុងកែប្រែ ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-dept").html('កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "../dept";', 4000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-dept").html(' កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
	   /* form edit */
    //end Department
    //Start Position
    /* validation */
	 $("#form_jobpos").validate({
		 rules:
		 {
			 posname: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 posname: "Please enter Position!"
		 },
	   submitHandler: submitFormJobPos	
       });
	   /* validation */
	   /* form submit */
	   function submitFormJobPos()
	   {		
				
                var data = $("#form_jobpos").serialize();
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/information/addEditPosition',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-pos").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-pos").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; កំពុងរក្សាទុក ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-pos").html('រក្សា &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "jobposition";', 4000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-pos").html(' រក្សា &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
    
    //edit position
    /* validation */
	 $("#form_jobposEdit").validate({
		 rules:
		 {
			 posname: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 posname: "Please enter Position!"
		 },
	   submitHandler: submitFormJobPosEdit	
       });
	   /* validation */
	   /* form submit */
	   function submitFormJobPosEdit()
	   {		
				var data = $("#form_jobposEdit").serialize();
				
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/information/addEditPosition',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-pos").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-pos").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; កំពុងកែប្រែ ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-pos").html('កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "jobposition";', 4000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-pos").html(' កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
    /* End Position */
    
    /* Start Timework*/
    /* validation */
	 $("#form_tw").validate({
		 rules:
		 {
			 txttw: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 txttw: "Please enter Time Working!"
		 },
	   submitHandler: submitFormTW	
       });
	   /* validation */
	   /* form submit */
	   function submitFormTW()
	   {		
				var data = $("#form_tw").serialize();
				
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/information/addEditTimework',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-tw").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-tw").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; កំពុងរក្សាទុក ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-tw").html(' រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "timework";', 4000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-tw").html(' រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
    /* Edition */
    /* validation */
	 $("#form_twEdit").validate({
		 rules:
		 {
			 txttw: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 txttw: "Please enter Time Working!"
		 },
	   submitHandler: submitFormTWEdit	
       });
	   /* validation */
	   /* form submit */
	   function submitFormTWEdit()
	   {		
				var data = $("#form_twEdit").serialize();
				
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/information/addEditTimework',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-tw").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-tw").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; កំពុងកែប្រែ ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-tw").html(' កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "../../information/timework";', 4000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-tw").html(' កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
    /* End timework */
    /* job type */
    /* validation */
	 $("#form_jb").validate({
		 rules:
		 {
			 jobname: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 jobname: "Please enter job type!"
		 },
	   submitHandler: submitFormjb	
       });
	   /* validation */
	   /* form submit */
	   function submitFormjb()
	   {		
				var data = $("#form_jb").serialize();
				
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/information/addEditjb',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-jb").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-jb").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; កំពុងរក្សាទុក ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-jb").html(' រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "../../information/jobtype";', 4000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-jb").html(' រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
    
     /* validation */
	 $("#form_jbEdit").validate({
		 rules:
		 {
			 jobname: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 jobname: "Please enter job type!"
		 },
	   submitHandler: submitFormjbEdit	
       });
	   /* validation */
	   /* form submit */
	   function submitFormjbEdit()
	   {		
				var data = $("#form_jbEdit").serialize();
				
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/information/addEditjb',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-jb").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-jb").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; កំពុងកែប្រែ ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-jb").html(' កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "../../information/jobtype";', 4000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-jb").html(' កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
    /* end jobtype */
    /* start dayofwork */
    /* validation */
	 $("#form_dow").validate({
		 rules:
		 {
			 txtdow: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 txtdow: "Please enter day of work!"
		 },
	   submitHandler: submitFormdow	
       });
	   /* validation */
	   /* form submit */
	   function submitFormdow()
	   {		
				var data = $("#form_dow").serialize();
				
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/information/addEditdow',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-dow").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-dow").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; កំពុងរក្សាទុក ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-dow").html(' រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "../../information/dayofwork";', 3000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-dow").html(' រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
    /* validation */
	 $("#form_dowEdit").validate({
		 rules:
		 {
			 txtdow: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 txtdow: "Please enter day of work!"
		 },
	   submitHandler: submitFormdowEdit
       });
	   /* validation */
	   /* form submit */
	   function submitFormdowEdit()
	   {		
				var data = $("#form_dowEdit").serialize();
				
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/information/addEditdow',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-dow").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-dow").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; កំពុងកែប្រែ ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-dow").html(' កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "../../information/dayofwork";', 3000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-dow").html(' កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
    /* end dayofwork */
	/* start add guide */
	
	/* validation */
	 $("#form_addng").validate({
		 rules:
		 {
			 txtdow: {
				 required: true,
				 minlength: 3
			 },
		 },
		 messages:
		 {
			 txtdow: "Please enter day of work!"
		 },
	   submitHandler: submitFormAddguide
       });
	   /* validation */
	   /* form submit */
	   function submitFormAddguide()
	   {		
				var data = $("#form_addng").serialize();
				
				$.ajax({
				
				type : 'POST',
                url  : 'http://'+document.domain+'/profiles/addEditguide',
				data : data,
				beforeSend: function()
				{	
					$(".error").fadeOut();
					$("#btn-addguide").html('<i class="fa fa-retweet"></i> &nbsp; កំពុងផ្ទុក ...');
				},
				success :  function(response)
						   {
							   //console.log(response);
							   var response = JSON.parse(response);
								if(response.result)
								{
									
									$("#btn-addguide").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; កំពុងរក្សាទុក ...');
                                    
                                    $(".error").fadeIn(4000, function(){
											
										$(".error").html('<div class="alert alert-success"> <i class="fa fa-info-circle"></i> '+response.message+' </div>');
												
										$("#btn-addguide").html(' រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>');
                                        
                                        setTimeout( 'window.location.href = "../";', 3000);
										
									});
								}else if(!response.result){
                                    $(".error").fadeIn(1000, function(){
											
						              $(".error").html('<div class="alert alert-danger"> <i class="fa fa-info-circle"></i> '+response.message+'</div>');
											
									   $("#btn-addguide").html(' រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>');
										
									});
                                }
						   }
				});
				return false;
		}
		/* end add guide */
    
});
