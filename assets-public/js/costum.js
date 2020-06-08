$(document).ready(function () {
	$(document).on('click', '#details', function () {
		// let fotoProject = $(this).attr('data-foto');
		let namaProject = $(this).attr('data-nama');
		let jumlahUnit = $(this).attr('data-jmlunit');
		let unitIsi = $(this).attr('data-unitIsi');
		let unitKosong = $(this).attr('data-unitKosong');
		let alamat = $(this).attr('data-alamat');
		let deskripsi = $(this).attr('data-deskripsi');

		// $('#img').attr("src", "<?= base_url('assets/images/project/')?>" + fotoProject);
		$('#nama').text(namaProject);
		$('#jmlUnit').text(jumlahUnit);
		$('#unitIsi').text(unitIsi);
		$('#unitKosong').text(unitKosong);
		$('#alamat').text(alamat);
		$('#deskripsi').text(deskripsi);
	});
});
