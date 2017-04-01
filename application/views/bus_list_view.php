
    <div class="container">			   

		<div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div class="col-lg-6 text-center">
						
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
										echo "<td class='seat ". $UpperLower[$i][$j]."'><input type='checkbox' /><br>".$seatNumber[$i][$j]."</td>";
								}
								echo "</tr>";
							}
						?>
						</table>
					</div>
				
					<div class="col-lg-6 text-center">
						<h3>
						<?PHP echo $toStation."-".$fromStation." to ".$toStation."-".$date; ?></h3>
						From Station
						To Station
						Bus Type
						Date
						Main Passanger Name
						Main Passanger Contact
						Main Passanger Email
						
						
					</div>
				</div>
            </div>
        </div>
    </div>
   
	
	
</script>
