

const flashData = $('.flash-data').data('flashdata');
const modul = $('.modul').data('modul');

if (flashData){
	Swal.fire(
		'Data ' + modul,
		'Berhasil ' + flashData,
		'success'
	)
}

$('.tombol-hapus').on('click', function(e){
	e.preventDefault();

	const href = $(this).attr('href');

	Swal.fire({
  title: 'Apakah anda yakin ?',
  text: "Data akan dihapus",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Hapus Data',
  cancelButtonText: 'Batal'
}).then((result) => {
  if (result.value) {
   	document.location.href = href;
  }
});

});

