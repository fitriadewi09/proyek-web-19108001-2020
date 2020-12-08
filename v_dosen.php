<html>
	<head>
		<title>Menampilkan Data Dosen</title>
		<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	</head>
	<style>
        h2 {
            text-align: center;
        }
        th, tr, td {
            text-align: center;
        }
    </style>
	<body>
		<div class="container">
			<h2>Daftar Dosen</h2>
			
			<table class="table">
                <thead class="thead-light">
					<tr>
						<th>NID</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Email</th>
					</tr>
				</thead>
		 
				<?php foreach ($dt_dosen as $row) { ?>
					<tbody>
						<tr>
							<td><?php echo $row->id_dosen ?></td>
							<td><?php echo $row->nama_dosen ?></td>
							<td><?php echo $row->alamat ?></td>
							<td><?php echo $row->telepon ?></td>
							<td><?php echo $row->email ?></td>
						</tr>
					</tbody>
				<?php } ?>
			</table>
		</div>
	</body>
</html>