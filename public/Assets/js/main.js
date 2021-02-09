$(function() {

    // Sidebar Responsive
    $('#sidebar-toggle').on('click', function() {
        $('.sidebar').toggleClass('toggled');
    });

    // Save User Admin
    $('.btn-tambah-user-admin').on('click', function() {
        $('.modal-title').html('Tambah Data Admin');
        $('.modal-footer').css({
            "display": "flex"
        })
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('form').attr('action', 'Admin/UserAdmin/save');
        $('form').attr('method', 'post')

        // remove data in modal field
        $('#nama').val('');
        $('#username').val('');
        $('#password').val('');

        const id = $(this).data('id');

        $.ajax({
            url: 'Admin/UserAdmin/getId',
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#id_admin').val(data);
            }
        });
    });


    // Detail User Admin berdasarkan id
    $('.btn-detail').on('click', function() {
        $('.modal-title').html('Detail Data Admin');
        $('.modal-footer').css({
            "display": "none"
        })

        const id = $(this).data('id');

        $.ajax({
            url: "Admin/UserAdmin/detail",
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            cache: false,
            success: function(data) {
                $('#id_admin').val(data.id_admin);
                $('#nama').val(data.nama);
                $('#username').val(data.username);
                $('#password').val(data.password);
            }
        });
    });

    //Update User Admin berdasarkan id
    $('.btn-edit').on('click', function() {
        const id = $(this).data('id');

        $('.modal-title').html('Ubah Data Admin');
        $('.modal-footer').css({
            "display": "flex"
        })
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('form').attr('action', 'Admin/UserAdmin/update/' + id);
        $('form').attr('method', 'post')

        $.ajax({
            url: "Admin/UserAdmin/detail",
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#id_admin').val(data.id_admin);
                $('#nama').val(data.nama);
                $('#username').val(data.username);
                $('#password').val(data.password);
            }
        });
    });

    //Detail Postingan berdasarkan id
    $('.btn-detail-postingan').on('click', function() {

        $('.modal-title').html('Detail Data Admin');
        
        const id = $(this).data('id');
        
        $.ajax({
            url: "Admin/postingan/detail",
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#id_postingan').val(data.id_post);
                $('#judul').val(data.judul);
                $('#pertanyaan').val(data.pertanyaan);
                $('#id_kategori').val(data.id_kategori);
                $('#id_pengguna').val(data.id_pengguna);
                $('#created_at').val(data.created_at);
                $('#updated_at').val(data.updated_at);
            
            }
        });
    });

    // Save Kategori
    $('.btn-tambah-kategori').on('click', function() {

        $('.modal-title').html('Tambah Data Kategori');
        
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('form').attr('action', 'Admin/Kategori/save');
        $('form').attr('method', 'post');
        
        const id = $(this).data('id');
    
        $.ajax({
            url: "Admin/Kategori/getId",
            data: {
            id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
            $('#id_kategori').val(data);
            
            }
        });
    });

    //Update Kategori berdasarkan id
    $('.btn-edit-kategori').on('click', function() {
        
        const id = $(this).data('id');
        
        $('.modal-title').html('Ubah Data Kategori');
        
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('form').attr('action', 'Admin/Kategori/update/' + id);
        $('form').attr('method', 'post');
    
        $.ajax({
            url: "Admin/Kategori/detail",
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#id_kategori').val(data.id_kategori);
                $('#kategori').val(data.nama_kategori);
            }
        });
    });

    //Detail komentar berdasarkan id
    $('.btn-detail-komentar').on('click', function() {
        $('.modal-title').html('Detail Komentar');

        const id = $(this).data('id');

        $.ajax({
            url: "Admin/Komentar/detail",
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#id_komentar').val(data.id_komentar);
                $('#komentar').val(data.komentar);
                $('#id_pengguna').val(data.id_pengguna);
                $('#id_post').val(data.id_post);
                $('#created_at').val(data.created_at);
                $('#updated_at').val(data.updated_at);
            }
        });
    });

    // Detail Pengguna berdasarkan id
    $('.btn-detail-pengguna').on('click', function() {
        $('.modal-title').html('Detail Pengguna');

        const id = $(this).data('id');

        $.ajax({
            url: "Admin/Pengguna/detail",
            data: {
                id: id
            },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#id_pengguna').val(data.id_pengguna);
                $('#nama').val(data.nama);
                $('#email').val(data.email);
                $('#password').val(data.password);
            }
        });
    });

});
