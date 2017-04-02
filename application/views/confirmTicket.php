<style>
	.labeltxt
	{
		padding:5px;
		text-align:center;
		font-size:18px;
		font-weight:bold;
		
	}
	.valuetxt
	{
		padding:5px;
		text-align:center;
		font-size:16px;
		
	}
</style>

<div class="container">			   
	<div class="row">
		<div class="box">
			<div class="col-lg-12 text-center">
				<center>
				<table width="600" border="1"  style="margin:10px; background-color:#FFFFFF;">
					<tr>
						<td colspan="4" align="center" style="margin:10px;padding:10px; background-color:#009966; color:#FFFFFF">
							Booking Status: <?PHP echo $status; ?>
						</td>
					<tr>
						<td class="labeltxt">
							From
						</td>
						<td class="valuetxt">
							<?PHP 
							$Time="";
								foreach($busRoute as $row)
								{
									if(strcasecmp($fromStationVal, $row['route_station']) == 0)
										$Time	=	$row['route_station_time'];
								}
							echo $fromStationVal."=".$Time;	
							?>	
						</td>
						<td class="labeltxt">
							To
						</td>
						<td class="valuetxt">
							<?PHP
							foreach($busRoute as $row)
								{
									if(strcasecmp($fromStationVal, $row['route_station']) == 0)
										$Time	=	$row['route_station_time'];
								} 
							echo $toStationVal."=".$Time;	
							?>	
						</td>
					</tr>
					<tr>
						<td colspan="3" class="labeltxt">
							Passenger Name: <br /><?PHP echo $pName; ?>
						</td>
						<td  class="labeltxt">
							Date: <br /><?PHP echo $dateVal; ?>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" class="labeltxt">
							Seat no: <br />
							<?PHP 
								echo implode(",",$ticketNumbers);
							 ?>
						</td>
						<td class="labeltxt">
							AC/Non-AC: <br />
							<?PHP echo $busTypeVal; ?> 
						</td>
						<td  class="labeltxt">
							Bus No: <br />
							<?PHP 
								echo $busNo[0]['bus_number'];
							 ?>
						</td>
					</tr>
					<tr>
						<td colspan="4" align="center" style="margin:10px;padding:10px; background-color:#009966">
						
							<input type="button"  value="Print" />
						
						</td>
					</tr>
				</table>
				</center>
			</div>
		</div>
	</div>
</div>
	