	<div class="container">

		<!--Inner Navbar-->
		<div class="navbar" id="navibar" style="margin-top: -1%;">
	      <div class="container-fluid">
	      	<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="row">

				<div class="col-lg-4">
					<!-- consumed -->
				</div>

				<div class="col-lg-4">
			        <div class="nav-collapse collapse navbar-responsive-collapse">
			        	<ul class="nav navbar-nav">
							<li class="active">
								<a class="icon-long" href="#"><p class="navText">Slider</p></a>
							</li>
							<li>
								<a class="icon-long" href="#"><p class="navText">News</p></a>
							</li>
							<li>
								<a class="icon-long" href="#"><p class="navText">Events</p></a>
							</li>
							<li>
								<a class="icon-long" href="#"><p class="navText">Infocus</p></a>
							</li>
						</ul>
			        </div>
			      </div>
				</div>

			</div>
	    </div>
		<!-- END inner navbar -->

    	<div class="page-header">
  			<center><h3 Style="color: #6EADAE;">Slider Section</h3></center>
		</div>

		<!-- Slider Form error msg -->
		<div class="row">

			<div class="col-lg-4">
				<!-- Consumed for space -->
			</div>

			<div class="col-lg-4">

				<div class="alert alert-danger alertLook alertSliderHome"><center id="slider_msg"><?php echo $error;?></center></div>

			</div>

		</div>

		<!-- Slider form -->
		<?php echo form_open_multipart('cms/home/slider_upload');?>

			<!-- Sldier title and desc-->
			<div class="row">

				<div class="col-lg-2">

					<!-- Consumed for spacing -->

				</div>

				<div class="col-lg-3">

					<div class="form-group">
						
						<input type="text" class="form-control" id="slider_title" name="slider_title" placeholder="Title on the slider">
					
					</div>

				</div>

				<div class="col-lg-3">

					<div class="form-group">
						
						<input type="text" class="form-control" id="slider_desc" name="slider_desc" placeholder="Text on the slider">
					
					</div>

				</div>

				<div class="col-lg-3">

					<div class="form-group">
						
						<input type="text" class="form-control" id="slider_link" name="slider_link" placeholder="Landing link of the slider">
					
					</div>

	            </div>

			</div>
			<!-- END slider title and desc row -->

			<!-- Slider file choose-->
			<div class="row">

				<div class="col-lg-3">

					<!-- consumed -->

				</div>

	            <div class="col-lg-6">
	            
	            	<div class="fileinput fileinput-new input-group" data-provides="fileinput">
		                <div class="form-control" id="selector1" data-trigger="fileinput">
		                	<i class="glyphicon glyphicon-file fileinput-exists"></i>
		                    <span class="fileinput-filename"></span>
		                </div>
		                <span class="input-group-addon btn btn-success btn-file" id="selector2">
		                    <span class="fileinput-new">Select file</span>
		                    <span class="fileinput-exists">Change</span>
		                    <input type="file" id="slider_img" name="slider_img" size="200">
		                </span>
		                <a class="input-group-addon btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
	              </div>
	            </div>

	            <div class="col-lg-3">
	              
	            </div>

			</div>

			<div class="row">

				<div class="col-lg-5">

					<!-- consumed -->

				</div>

	            <div class="col-lg-3">
	            
	            	<button class="btn btn-success" type="submit" name="slider_submit">Submit</button>

	            </div>

	            <div class="col-lg-4">

	            	<!-- consumed -->
	              
	            </div>

			</div>
			<!-- END of slider file choose row -->

		</form>
		<!-- End of slider form -->

		<br>

		<!-- Table of existing slider with options to select what images to show -->
		<div class="row">

			<div class="col-lg-12">

				<table id="slider_table">

					<thead>

						<tr id="sliderTableHead">
							<th>Sl No</th>
							<th>Title</th>
							<th>Description</th>
							<th>Image</th>
							<th>Landing URL</th>
							<th>Last Used</th>
							<th>Selected</th>
							<th>Remove</th>
						</tr>

					</thead>

					<tbody>

						<!-- Data is populated here -->

					</tbody>

				</table>

			</div>

		</div>

    </div><!-- End of main contaner -->

    <br>
    <br>