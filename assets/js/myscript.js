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

            url: base_url + '/admin/getGenreId',
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

    $('.createNewGame').on('click', function() {

        $("#formModalGameLabel").html('Tambah Game');
        $(".modal-footer button[type=submit]").html("Tambah Game");

    });

    $('.editGame').on('click', function() {

        $("#imageForEdit").remove();
        $("#formModalGameLabel").html("Ubah Game");
        $(".modal-footer button[type=submit]").html("Simpan Perubahan");
        $(".modal-body form").attr("action", base_url + "/admin/ubahGame");
        $("#tambahGame").attr("onclick","Swal.fire('GENRE', 'Game Berhasil Diubah !', 'success')");



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
                $('#nama').val(data.NAMA_GAME);
                $('#genre').find(":selected").text(data.NAMA_GENRE);
                $('#desc').val(data.DESC_GAME);
                $('#status').val(data.IS_ACTIVE);
            }
        });

    });

    // ------------------- JS FOR TOURNAMENT -------------------------
    $('.createNewTournament').on('click', function() {

        $("#formModalLabelTournament").html('Tambah Tournamenasdasdt');
        $(".modal-footer button[type=submit]").html("Tambah Tournament");

    });

    $('.editModalTournament').on('click', function() {

        $("#formModalLabelTournament").html("Edit Tournament");
        $(".modal-footer button[type=submit]").html("Simpan Perubahan");
        $(".modal-body form").attr("action", base_url + "/admin/ubahTournament");
        $("#tambahTournament").attr("onclick","Swal.fire('GENRE', 'Data Tournament Berhasil Diubah !', 'success')");



        const id = $(this).data('id');
        console.log(id);

        $.ajax({
            url: base_url + '/admin/getTournamentId',
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.ID_TOURNAMENT);
                $('#namaTournament').val(data.NAMA_TOURNAMENT);
                $('#game').find(":selected").text(data.NAMA_GAME);
                $('#tanggalTournament').val(data.TANGGAL_TOURNAMENT);
                $('#maxPeserta').val(data.MAX_PESERTA);
                $('#biayaPendaftaran').val(data.BIAYA_PENDAFTARAN);
                $('#status').val(data.STATUS);
            }
        });

    });
    // ------------------- END JS FOR TOURNAMENT -------------------------

    // ----------------------- JS FOR NEWS -------------------------------

    $('.modalDetailNews').on('click', function() {

        const id = $(this).data('id');
        console.log(id);

        $.ajax({
            url: base_url + '/admin/getNewsId',
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.ID_NEWS);
                $('#detailNews').html(data.ISI_NEWS);
                $('#showImageNews').html("<img src='" + base_url + "/assets/img/news/" + data.FOTO + "'>");
            }
        });

    });
});