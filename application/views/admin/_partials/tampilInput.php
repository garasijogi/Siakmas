<!-- DataTables -->
<!-- initials -->
<?php $x=1;?>
<!-- end initials -->
					<div class="card mb-3" style="overflow-y: scroll;margin-top: 50px;margin-left: 50px;max-height: 320px; width:100%;background-color: white">
						<div class="card-body" style="background-color: white;text-align: center">
					
							<div class="table-responsive">
								<table class="table table-hover table-fixed" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Pemberi</th>
											<th>Jenis</th>
											<th>Keterangan</th>
											<th>Nominal</th>
										</tr>
									</thead>
									<tbody>
										
										<?php foreach ($data as $transaction){ ?>
										<tr>
											<?php foreach ($data2 as $transaction2){
												if($transaction2['id_infotr'] == $transaction['id_infotr'] && $transaction['id_tr']%2 !=0)
												{
													echo "<td width='150'>";
													echo $x;
													echo "</td>";
													echo "<td>";
													echo $transaction2['tanggal'];
													echo "</td>";
													echo "<td>";
													echo $transaction2['pemberi'];
													echo "</td>";
													echo "<td>";
													echo $transaction2['jenis'];
													echo "</td>";
													echo "<td>";
													echo $transaction2['keterangan'];
													echo "</td>";
													echo "<td>";
													echo $transaction['debit'];
													echo "</td>";
													$x++;
												}
											}?>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>