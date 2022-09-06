<script>
    function deleteItem(e) {

        let id = e.getAttribute('data-id');

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: true
        });

        swalWithBootstrapButtons.fire({
            title: 'Apakah Kamu Yakin ?',
            text: "Mata Pelajaran akan terhapus permanent !!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batalkan',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                if (result.isConfirmed) {

                    $.ajax({
                        type: 'POST',
                        url: "lessons/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE",
                        },
                        success: function(data) {
                            console.log(data);
                            if (data.success) {
                                swalWithBootstrapButtons.fire(
                                    data.title,
                                    data.message,
                                    "success"
                                ).then((result) => {
                                    // Reload the Page
                                    location.reload();
                                })
                                $("#" + id + "").remove(); // you can add name div to remove
                            } else {
                                swalWithBootstrapButtons.fire(
                                    data.title,
                                    data.message,
                                    "warning"
                                ).then((result) => {
                                    // Reload the Page
                                    location.reload();
                                })
                                $("#" + id + "").remove(); // you can add name div to remove
                            }
                        }
                    });

                }

            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Batal',
                    'Mata Pelajaran tetap aman :)',
                    'error'
                );
            }
        });

    }
</script>
