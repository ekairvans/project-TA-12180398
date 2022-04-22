<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<div class="container-fluid h-100">
		<div class="row justify-content-center h-100">
			<div class="col-md-4 col-xl-4 chat">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header text-white" style="background-color: #0b486b;">
						Tersambung (<?= $this->ModelKelas->getsudahabsen($this->uri->segment(3))->num_rows(); ?> / 10)
					</div>
					<div class="card-body contacts_body bg-white">
						<ui class="contacts">
							<?php
							foreach ($allabsen as $key) :
							?>

								<div class="d-flex bd-highlight ml-3">
									<div class="img_cont">
										<img src="<?= base_url('assets/img/profile/' . $key->image); ?>" class="rounded-circle user_img">
									</div>
									<div class="user_info ml-2">
										<span class="text-dark"><?= $key->name; ?></span>
									</div>
								</div>
								<hr>
							<?php
							endforeach;
							?>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			<div class="col-md-8 col-xl-8 chat">
				<div class="card">
					<div class="card-header msg_head" style="background-color: #0b486b;">
						<div class="d-flex bd-highlight text-white">
							<b><?= $kelas['judul_kelas']; ?></b>
						</div>
					</div>
					<div class="card-body msg_card_body bg-white" id="msg">
						<ui class="contacts">
							<?php
							foreach ($chat as $key) :
							?>

								<?php if ($key->id_user == $user['id']) : ?>
									<div class="d-flex justify-content-end mb-4">
										<div class="msg_cotainer_send bg-success text-white">
											<span><small class=" pr-3"><?= $key->name ?> :</small></span>
											<?= $key->pesan ?>
											<span class="msg_time_send text-dark"><?= date('d F Y H:i', strtotime($key->date_create)); ?></span>
										</div>
										<div class="img_cont_msg">
											<img src="<?= base_url('assets/img/profile/' . $key->photo); ?>" class="rounded-circle user_img_msg">
										</div>
									</div>

								<?php else : ?>
									<div class="d-flex justify-content-start mb-4">
										<div class="img_cont_msg">
											<img src="<?= base_url('assets/img/profile/' . $key->photo); ?>" class="rounded-circle user_img_msg">
										</div>
										<div class="msg_cotainer bg-primary text-white">
											<span><small class=" pr-3"><?= $key->name ?> :</small></span>
											<?= $key->pesan ?>
											<span class=" msg_time text-dark"><?= date('d F Y H:i', strtotime($key->date_create)); ?></span>
										</div>
									</div>
								<?php endif; ?>

							<?php
							endforeach;
							?>
						</ui>
					</div>
					<div class="card-footer">
						<?php if ($user['role_id'] == 3) : ?>
							<form method="post" action="<?= base_url('siswa/kirim_pesan'); ?>" id="frm-chat">
								<input type="text" name="id_kelas" value="<?= $kelas['id_kelas'] ?>" style="display: none;">
								<div class="input-group">
									<textarea name="pesan" class="form-control type_msg" placeholder="Type your message..." id="chat-text" required=""></textarea>
									<div class="input-group-append">
										<button type="submit" class="input-group-text send_btn" onclick="setscroll()"><i class="fas fa-location-arrow"></i></button>
									</div>
								</div>
							</form>
						<?php else : ?>
							<form method="post" action="<?= base_url('pengajar/kirim_pesan'); ?>" id="frm-chat">
								<input type="text" name="id_kelas" value="<?= $kelas['id_kelas'] ?>" style="display: none;">
								<div class="input-group">
									<textarea name="pesan" class="form-control type_msg" placeholder="Type your message..." id="chat-text" required oninvalid="this.setCustomValidity('Tuliskan pesan anda ..')" oninput="setCustomValidity('')"></textarea>
									<div class="input-group-append">
										<button type="submit" class="input-group-text send_btn" onclick="setscroll()"><i class="fas fa-location-arrow"></i></button>
									</div>
								</div>
							</form>

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->