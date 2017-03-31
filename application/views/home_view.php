
    <div class="container">

		<div class="row">
            <div class="box">
                <div class="col-lg-12">
					<center><h5 style="color:#FF0000">AC Bus - Sleeper - [(Rajula-Badhada) To Ahemedabad : Rs. 320] &amp; [(Savarkundla-Dhasa)   To Ahemedabad : Rs. 270]</h5></center>
					<center><h5 style="color:#006633">NonAC Bus - Sleeper - [(Vijapadi-Badhada) To Ahemedabad : Rs. 270] &amp; [(Savarkundla-Dhasa)   To Ahemedabad : Rs. 250]</h5></center>
				</div>
			</div>
		</div>
		<?PHP
			$attributes = array('name'=>'fromto','id'=>'fromto');
			$hidden 	= array('is_submit'=>1);
			echo form_open("home/getListOfBus/",$attributes, $hidden); 
		?>
          <div class="row">
            <div class="box">
                <div class="col-lg-12">
                   
				   
				   <div class="form-group col-lg-3">
				   		
				   		<select class="form-control" name="fromStation" id="fromStation" >
							<option hidden >From</option>
							
							<?PHP
							foreach($fromStations as $fromStation){
							?>
							<option <?PHP if(isset($fromStationSelected)
												&& 
												strtoupper($fromStation->route_station)==$fromStationSelected) echo 'selected="selected"'; ?>>
								<?PHP echo strtoupper($fromStation->route_station);?>
							</option>
							<? } ?>
						</select>
                   </div>
				   <div class="form-group col-lg-3">
						<select class="form-control" name="toStation" id="toStation">
							<?PHP if(!isset($toStations))
							{
							?>								
							<option hidden >To</option>
							<?
							}else
							{
								foreach($toStations as $row)
								{
								?>
									<option><?PHP echo $row["route_station"];?></option>
								<?PHP
								}
							}
							?>
						</select>
					</div>
				   <div class="form-group col-lg-2">
							<div class='input-group date' id='datetimepicker1'>
							<input type='text' class="form-control" name="date" id="date" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							
               			</div>
                   </div>
				   <div class="form-group col-lg-2">
					   <select class="form-control" name="busType" id="busType" >
					   		<option>
								AC
							</option>
							<option>
								Non-AC
							</option>
					   </select>
					</div>
				   <div class="form-group col-lg-2">
                       <input type="button" class="form-control" value="Search Bus" id="submit_button" />
                   </div>
				  
                </div>
            </div>
        </div>
		<?PHP echo form_close(); ?>
		
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
	var base_url = '<?php echo base_url(); ?>';
	$(document).ready(function()
	{
		
		
		$("#fromStation").change(function()
		{
			$("#fromto").submit();
		});
		
		$("#submit_button").click(function()
		{
			if ($('#date').val() == null  || $('#date').val() == "")
			{
				alert($('#date').val()+ "Please select date");
				return false;
			}
			if ($('#toStation').val() == null)
			{
				alert("No next station!");
				return false;
			}
			if($('#toStation').val() == "To")
			{
				alert("Please select destintion station!");
				return false;
			}
			
			/*
			$('#fromto').on('submit', function(e)
			{
			    //prevent the default submithandling
				e.preventDefault();
				//send the data of 'this' (the matched form) to yourURL
				$.post('home/getListOfBus',$(this).serialize());
			});*/
			$('#fromto').submit();
		});
	});
	
	/*
	$(document).ready(function()
	{
	$("#fromStation").change(function(){
    
	var fromStation = $(this).find(":selected").text();

    $.ajax({
        url: 'home/populateToStations',
        data: ({'fromStation': fromStation}),
        dataType: 'json', 
        type: "post",
        success: function(data)
		{		
				$("#toStation").empty();
				$.each(data, function () 
				{	
                	$("#toStation").append($("<option></option>").val(this['id']).html(this['route_station']));
					
				});
		}             
    });
	 return false;
    });
	});*/	
</script>
