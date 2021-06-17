$(function() {
    $('.editprofil').on('click', function() {
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/latihan/kabarcovid19/public/home/getubah',
            data: {id:id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                console.log(data.nama);
            }
        });
    });
});