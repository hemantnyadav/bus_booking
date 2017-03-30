
    <div class="container">

          <div class="row">
            <div class="box">
                <div class="col-lg-12">
                   
				   <div class="form-group col-lg-3">
				   <?PHP 
				   		$attributes = array('name'=>'formAdd','id'=>'formAdd');
						$hidden = array('is_submit'=>1);
				   		echo form_open("/home",'',$attributes, $hidden); 
					?>
				   		<select class="form-control" name="from" id="from">
							<option hidden >From</option>
							
							<?PHP
							foreach($fromStations as $fromStation){
							?>
							<option>
								<?PHP echo strtoupper($fromStation->route_station);?>
							</option>
							<? } ?>
						</select>
                   </div>
				   <div class="form-group col-lg-3">
						<select class="form-control" name="to" id="to">
							<option hidden >To</option>
							<option></option>
						</select>
                   </div>
				   <div class="form-group col-lg-3">
							<div class='input-group date' id='datetimepicker1'>
							<input type='text' class="form-control" name="date" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							
               			</div>
                   </div>
				   <div class="form-group col-lg-3">

                                <input type="submit" class="form-control" value="Book" />
                   </div>
				  <?PHP echo form_close(); ?>
                </div>
            </div>
        </div>

		<div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?PHP echo base_url()."/assets/img"; ?>/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?PHP echo base_url()."/assets/img"; ?>/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?PHP echo base_url()."/assets/img"; ?>/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
	<script>
	$("#from").change(function(){
    
	var fromStation = $(this).find(":selected").text();

	
    $.ajax({
        url: 'home/populateToStations',
        data: ({'fromStation': fromStation}),
        dataType: 'json', 
        type: "post",
        success: function(data)
		{		
				$("#to").empty();
				$.each(data, function () 
				{	
                	$("#to").append($("<option></option>").val(this['id']).html(this['route_station']));
				});
             //alert(data[0].id); 
		}             
    });
	 return false;
    });
</script>
