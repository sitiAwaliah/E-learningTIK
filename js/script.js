//event pada saat link di klik

$('.page-scroll').on('click', function(e){

	//ambil isi href
	var tujuan = $(this).attr('href');
	//tangkap elemen ybs
	var elemenTujuan= $ (Tujuan);
	//pindahkan scroll
	$('body').animate({
		scrollTop: elemenTujuan.offset().top.top-50;

	});

	e.preventDefault();
}); 