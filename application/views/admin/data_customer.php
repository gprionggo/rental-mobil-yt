<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>

        <a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-3">Tambah Customer</a>

        <?php echo $this->session->flashdata('pesan'); ?>

        <table class="table table-striped table-responsive table-bordered">
        	<tr>
        		<th>No</th>
        		<th>Nama</th>
        		<th>Username</th>
        		<th>Alamat</th>
        		<th>Gender</th>
        		<th>No. Telepon</th>
        		<th>No. KTP</th>
        		<th>Password</th>
        		<th>Aksi</th>
        	</tr>
        	
        	<?php
        	$no=1;
        	foreach ($customer as $cs) : ?>
        		<tr>
        			<td><?php echo $no++ ?></td>
        			<td><?php echo $cs->nama ?></td>
        			<td><?php echo $cs->username ?></td>
        			<td><?php echo $cs->alamat ?></td>
        			<td><?php echo $cs->gender ?></td>
        			<td><?php echo $cs->no_telepon ?></td>
        			<td><?php echo $cs->no_ktp ?></td>
        			<td><?php echo $cs->password ?></td>
        			<td>
        				<div class="row">
	        				<a class="btn btn-sm btn-danger mr-2" href="<?php echo base_url('admin/data_customer/delete_customer/').$cs->id_customer ?>"><i class="fas fa-trash"></i></a>
	        				<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_customer/update_customer/').$cs->id_customer ?>"><i class="fas fa-edit"></i></a>
        				</div>
        			</td>
        			
        		</tr>
        	<?php endforeach; ?>
        </table>
    </section>
</div>