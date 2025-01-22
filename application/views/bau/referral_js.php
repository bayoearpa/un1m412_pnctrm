        

<script type="text/javascript">

$(document).ready(function() {

 $('#example4').on('click', '.editseleksigdr1', function() {
        var no = $(this).data('no');
        // Ambil data yang akan diedit dari server dengan AJAX
        $.ajax({
          url: '<?php echo base_url('bau/getdatareferral'); ?>/' + no, // Sesuaikan dengan URL yang sesuai
          type: 'GET',
              success: function(data) {
                // Isi modal dengan data yang diambil
                console.log(data); // Cetak nilai data ke konsol
                var parsedData = JSON.parse(data);
                var tableBody = '';

                // Iterasi data dan isi tabel
                parsedData.forEach(function (item, index) {
                  tableBody += `
                    <tr>
                      <td>${index + 1}</td>
                      <td>${item.no}</td>
                      <td>${item.nama}</td>
                      <td>${item.alamat}</td>
                    </tr>
                  `;
                });

                $('#selectTable tbody').html(tableBody);

                $('#editFormModal').modal('show');
              }
            });
        });
        
        });
</script>