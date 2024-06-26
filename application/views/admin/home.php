<div id="aa"></div>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg">
			<div class="alert alert-dismissable alert-default">
				<center>
					<h3>Selamat Datang Di Sistem Informasi Antrian
						<br />
						Primaya</h3>
				</center>
			</div>
		</div>

		<div class="row">
		<div class="alert-warning" role="alert">
				<span>
					<center><?php echo $this->session->flashdata('notif');?></center>
				</span>
			</div>


			<?php foreach($dokter as $data) {  ?>
			<div class="col-lg-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<center>
							<h3 class="panel-title"><i class=""></i>Spesialis <?= $data->spesialis ?> <br> (Loket <?= $data->loket ?>)</h3>
						</center>
					</div>
					<div class="panel-body">
						<ul class="server-stats">
							<li>
								<div class="stat">
									<center>
										<div class="info">No. Antrian</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">
											<h1><?= $data->jumlah_antrian-1; ?></h1>
										</div>
									</center>
								</div>
							</li>
							
						</ul>
					</div>
					<div class="panel-heading">
						<center>
							<a href="<?= base_url() ?>admin/panggilAntrian/<?= $data->loket ?>">
								<h3 class="panel-title panggil">PANGGIL</h3>
							</a>
						</center>
					</div>
				</div>
			</div>
			<?php } ?>
			
			<a href="<?= base_url() ?>admin/resetAntrian" class="btn btn-danger">RESET</a>

		</div>
		<!-- /#wrapper -->

		<div class="row">
			<div class="col-lg-12">
				<div class="alert alert-dismissable alert-info">
					<center>
						<h3>Dr. Sunartojo, Sp.OG Libur s/d tanggal 05 Januari 2024</h3>
					</center>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<center>
							<h3 class="panel-title"><i class=""></i>Praktek</h3>
						</center>
					</div>
					<div class="panel-body">
						<ul class="server-stats">
							<li>
								<div class="stat">
									<center>
										<div class="info">Dr. SUNARTOJO, Sp.OG</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">Spesialis Kandungan</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">Praktek Jam 19.00 - Selesai</div>
									</center>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<center>
							<h3 class="panel-title"><i class=""></i>Praktek</h3>
						</center>
					</div>
					<div class="panel-body">
						<ul class="server-stats">
							<li>
								<div class="stat">
									<center>
										<div class="info">Dr. ANTHONIUS IPSAN, Sp.A</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">Spesialis Anak</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">Praktek Jam 16.30 - Selesai</div>
									</center>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<center>
							<h3 class="panel-title"><i class=""></i>Praktek</h3>
						</center>
					</div>
					<div class="panel-body">
						<ul class="server-stats">
							<li>
								<div class="stat">
									<center>
										<div class="info">Dr. EDY DRIYANTO, Sp.PD</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">Spesialis Penyakit Dalam</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">Praktek Jam 17.30 - Selesai</div>
									</center>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<center>
							<h3 class="panel-title"><i class=""></i>Praktek</h3>
						</center>
					</div>
					<div class="panel-body">
						<ul class="server-stats">
							<li>
								<div class="stat">
									<center>
										<div class="info">Dr. UNGGUL JATMIKO, Sp.B</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">Spesialis Bedah</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">Praktek Jam 19.30 - Selesai</div>
									</center>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<center>
							<h3 class="panel-title"><i class=""></i>Praktek</h3>
						</center>
					</div>
					<div class="panel-body">
						<ul class="server-stats">
							<li>
								<div class="stat">
									<center>
										<div class="info">drg. Rido Simbolon</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">Spesialis Gigi</div>
									</center>
								</div>
							</li>
							<li>
								<div class="stat">
									<center>
										<div class="info">Praktek Jam 18.30 - Selesai</div>
									</center>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>