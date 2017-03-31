
    <div class="container">			   

		<div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
						
						<style>
							.seat
							{
								border:medium solid #999999;
								width:20px;
								margin-left:1px;
								padding-left:1px;
								
							}
						</style>
						<h3><?PHP echo $toStation."-".$fromStation." to ".$toStation."-".$date; ?></h3>
                        <table width="300"  height="500">
						<th>
							<td class="seat" colspan="8" >
								<span style="float:left"> Entry</span>
								<span style="float:right">Driver</span>
							</td>
						</th>
                        <?PHP
							$seatNumber =  array(
											array("U-C","U-D","","","D-E","D-F","U-B","U-A"),
											array(1,2,"","",9,10,11,12),
											array(3,4,"","",16,15,14,13),
											array(5,6,"","",17,18,19,20),
											array(7,8,"","",24,23,22,21),
											array("U-32","U-31","D-30","D-29","D-28","D-27","U-26","U-25")
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
									echo "<td class='seat'><input type='checkbox' /><br>".$seatNumber[$i][$j]."</td>";
								}
								echo "</tr>";
							}
						?>
						</table>
					</div>
                    
					
                </div>
            </div>
        </div>
    </div>
   
	
	
</script>
