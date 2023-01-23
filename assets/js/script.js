const flashdata = document.querySelector(".flash-data");
// ambil isi dari flash-data
const dataflash = flashdata.getAttribute("data-flashdata");

if (dataflash == "di Tambahkan" || dataflash == "di Ubah") {
	Swal.fire({
		icon: "success",
		title: "DATA MAHASISWA",
		text: "Berhasil " + dataflash,
	});
}
if (dataflash == "di Hapus") {
	Swal.fire("Behasil Di Hapus!", "", "success");
}

const tombolHapuss = document.querySelectorAll(".tombol-hapus");
for (const tombolHapus of tombolHapuss) {
	tombolHapus.addEventListener("click", function (e) {
		e.preventDefault();
		const mhs = this.getAttribute("data-mhs");
		const href = this.getAttribute("href");
		console.log(href);

		Swal.fire({
			title: 'Hapus "' + mhs + '" ?',
			text: "Cancel untuk membatalkan",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Hapus Data!",
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = href;
			}
		});
	});
}
