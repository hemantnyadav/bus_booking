
    <div class="container">			   

		<div class="row">
            <div class="box">
			<?PHP
				$attributes = array('name'=>'fromto','id'=>'fromto');
				$hidden 	= array('is_submit'=>1);
				echo form_open("/home/confirmTicket",$attributes, $hidden); 
			?>
                <div class="col-lg-12 text-center">
				
                    <div class="col-lg-4 text-center">
						
						<style>
							.seat
							{
								
								width:20px;
								margin-left:1px;
								padding-left:1px;
							}
							.UpperLower
							{
								border:thin solid #999999;
								float:left;
								padding:10px 10px 10px 10px;
								margin:5px;
							}
							.lowerSeat
							{
								background-color:#FFFF99;
								border: 1px solid #73AD21;
							}
							.upperSeat
							{
								background-color:#99FF33;
								border: 1px solid #73AD21;
							}
						</style>
						<span class="UpperLower upperSeat">U-Upper Seat</span>
						
						<span class="UpperLower lowerSeat">L-Lower Seat</span>
						
                        <table width="300"  height="500">
						<th>
							<td class="seat" colspan="8" >
								<span style="float:left; padding:10px;background-color:#999999;border-radius: 3px; border: 1px solid #73AD21;"> Entry</span>
								<span style="float:right; margin-right:5px;padding:10px; background-color:#FF0000;border-radius: 3px; border: 1px solid #73AD21;">Driver</span>
							</td>
						</th>
                        <?PHP
							$seatNumber =  array(
											array("U-C","U-D","","","L-E","L-F","U-B","U-A"),
											array(1,2,"","",9,10,11,12),
											array(3,4,"","",16,15,14,13),
											array(5,6,"","",17,18,19,20),
											array(7,8,"","",24,23,22,21),
											array("U-32","U-31","L-30","L-29","L-28","L-27","U-26","U-25")
											);
							$UpperLower =  array(
											array("upperSeat","lowerSeat","","","lowerSeat","lowerSeat","upperSeat","upperSeat"),
											array("upperSeat","lowerSeat","","","lowerSeat","lowerSeat","upperSeat","upperSeat"),
											array("upperSeat","lowerSeat","","","lowerSeat","lowerSeat","upperSeat","upperSeat"),
											array("upperSeat","lowerSeat","","","lowerSeat","lowerSeat","upperSeat","upperSeat"),
											array("upperSeat","lowerSeat","","","lowerSeat","lowerSeat","upperSeat","upperSeat"),
											array("upperSeat","upperSeat","lowerSeat","lowerSeat","lowerSeat","lowerSeat","upperSeat","upperSeat")
											);
							$c=0;
							for($i=0;$i<6;$i++)
							{
								echo "<tr>";
								for($j=0;$j<8;$j++)
								{
									if(($j==2 || $j==3) && $i<5)
										echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;".$seatNumber[$i][$j]."</td>";
									else
										echo "<td class='seat ". $UpperLower[$i][$j]."'><input type='checkbox' value='".$seatNumber[$i][$j]."' name='ticketNumbers[]' /><br>".$seatNumber[$i][$j]."</td>";
								}
								echo "</tr>";
							}
						?>
						</table>
						
					</div>
				
					<div class="col-lg-8 text-center">
						
							<div class="clearfix"><br /></div>
							<div class="col-lg-3 text-center">
								 From <input type="text" class="form-control" value="<?PHP echo $fromStation;  ?>" name="fromStation" readonly="readonly" />
							</div>
							<div class="col-lg-3 text-center">
								To <input type="text" class="form-control" value="<?PHP echo $toStation;  ?>" name="toStation"  readonly="readonly">
							</div>
							<div class="col-lg-3 text-center">
								Date <input type="text" class="form-control" value="<?PHP echo $date;  ?>" name="date" readonly="readonly" />
							</div>
							<div class="col-lg-2 text-center">
								Ac/NonAC<input type="text" class="form-control" value="<?PHP echo $busType;  ?>" name="busType" readonly="readonly" />
							</div>
							<div class="clearfix"></div>
							<br /><br />
							
								<div class="row">
									<div class="form-group col-lg-3">
										<label>Passenger Name*</label>
									</div>
									<div class="form-group col-lg-5">
										<input type="text" class="form-control" name="pName" id="pName">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-3">
										<label>Contact Number*</label>
									</div>
									<div class="form-group col-lg-5">
										<input type="text" class="form-control" name="pContact" id="pContact">
									</div>
								</div>
								<div class="row">
										<div class="form-group col-lg-3">
										<label>Email ID</label>
									</div>
									<div class="form-group col-lg-5">
										<input type="text" class="form-control" name="pEmail">
									</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group col-lg-12" >

										<textarea class="form-control" rows="6" disabled="disabled">Note: It is compulsory to carry ID card of Main Passenger.By Submiting this you agree with temrs and conditions of website usage. For cancellation call 02845-223715.
										
										</textarea>
									</div>
									<div class="form-group col-lg-12">
										<input type="hidden" name="save" value="contact">
										<button type="button" class="btn btn-default" id="submit_button">Book Ticket</button>
									</div>
								</div>

					</div>
				</div>
			<?PHP echo form_close(); ?>
            </div>
        </div>
    </div>
   
	
<script>
$(document).ready(function()
	{
	$("#submit_button").click(function()
		{
			if ($('input[type=checkbox]:checked').length == 0)
			{
				alert("Please select Seat");
				return false;
			}
			if ($('#pName').val() == null || $('#pName').val() == "")
			{
				alert("Please enter Passenger Name");
				return false;
			}
			if ($('#pContact').val() == null || $('#pContact').val() == "" || !$('#pContact').val().match('[0-9]{10,10}'))
			{
				alert("Please enter Valid contact number");
				return false;
			}
			
			$('#fromto').submit();
		});
	});
</script>