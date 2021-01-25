var base_url = window.location.origin + "/GarasiGames";
$(function() {
    // ------------------- JS FOR GENRE -------------------------
    $('.createNew').on('click', function() {

        $("#formModalLabel").html('Tambah Genre');
        $(".modal-footer button[type=submit]").html("Tambah Genre");

    });

    $('.editModal').on('click', function() {

        $("#formModalLabel").html("Edit Genre");
        $(".modal-footer button[type=submit]").html("Simpan Perubahan");
        $(".modal-body form").attr("action", base_url + "/admin/ubahGenre");
        $("#tambahGenre").attr("onclick","Swal.fire('GENRE', 'Genre Berhasil Diubah !', 'success')");



        const id = $(this).data('id');
        console.log(id);

        $.ajax({
            url: base_url + '/admin/getUbah',
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.ID_GENRE);
                $('#nama').val(data.NAMA_GENRE);
                $('#status').val(data.IS_ACTIVE);
            }
        });

    });
    // ------------------- END JS FOR GENRE -------------------------


    // ------------------- JS FOR GAME -------------------------
    $('.modalDetail').on('click', function() {

        const id = $(this).data('id');
        console.log(id);

        $.ajax({
            url: base_url + '/admin/getGameId',
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.ID_GAME);
                $('#detailGame').html(data.DESC_GAME);
                $('#showImage').html("<img src='" + base_url + "/assets/img/game/" + data.IMAGE_GAME + "'>");
            }
        });

    });

});