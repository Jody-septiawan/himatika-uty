const flashdata = $('.flash-data').data('flashdata');
const flashdata2 = $('.flash-data2').data('flashdata');
const flashdata3 = $('.flash-data3').data('flashdata');

if (flashdata) {
    Swal.fire({
        title: flashdata,
        icon: 'error',
        showConfirmButton: false,
        timer: 2000,
    });
}

if (flashdata2) {
    Swal.fire({
        icon: 'error',
        title: flashdata2,
        showConfirmButton: false,
        timer: 8000,
        html:
            '<span class="text-primary">Jika terdapat kendala, Hubungi <b>Scientific Division</b></span>'
    })
}

if (flashdata3) {
    Swal.fire({
        icon: 'success',
        title: flashdata3,
        showConfirmButton: false,
        timer: 2000
    })
}

$('.logout').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Anda ingin LOGOUT ?',
        // text: "peserta tersebut hadir?",
        icon: 'question',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});

$('.hapus-calon').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Anda ingin HAPUS calon ?',
        // text: "peserta tersebut hadir?",
        icon: 'question',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});

$('.reset-pw').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Anda ingin RESET PASSWORD PEMILIH ?',
        // text: "peserta tersebut hadir?",
        icon: 'question',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});

$('.tombol-pilih').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Sudah yakin dengan pilihan anda ?',
        // text: "peserta tersebut hadir?",
        icon: 'question',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});