
    <div class="container">

          <div class="row">
            <div class="box">
                <div class="col-lg-12">
                   
				   <div class="form-group col-lg-3">
						<select class="form-control" name="from">
							<option hidden >From</option>
							
							<?PHP
								print_r($data['fromStations']);
								foreach($fromStations->route_name as $fromStation){
							?>
							<option><?PHP echo $fromStation; ?></option>
							<? } ?>
						</select>
                   </div>
				   <div class="form-group col-lg-3">
						<select class="form-control" name="to">
							<option hidden >To</option>
							<option>1</option>
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