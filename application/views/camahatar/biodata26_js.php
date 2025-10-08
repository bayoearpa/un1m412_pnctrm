<script type="text/javascript">
$(document).ready(function() {

    // === Ajax Provinsi - Kabupaten ===
    $('#provinsi').change(function(){
        var id = $(this).val();
        $.ajax({
            url : "<?php echo base_url();?>getkabkota",
            method : "POST",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(data){
                var html = '';
                for(let i = 0; i < data.length; i++){
                    html += '<option value="'+data[i].id_wil+'">'+data[i].nm_wil+'</option>';
                }
                $('.ktkb').html(html);
            }
        });
    });

});

// === VALIDASI NOMOR ===
function validateNumber(input) {
    input.value = input.value.replace(/\D/g, '');
}

// === JIKA PILIH "LAINNYA" ===
function toggleOtherInput() {
    const select = document.getElementById('prodi_lama');
    const otherInputContainer = document.getElementById('otherInputContainer');

    if (select.value === 'other') {
        otherInputContainer.style.display = 'block';
    } else {
        otherInputContainer.style.display = 'none';
        document.getElementById('prodi_lama_lainnya').value = '';
    }
}

function onKategoriChange() {
    const kategori = document.getElementById('kategori_sek').value;
    const jurusanDiv = document.getElementById('jurusan_sma_smk');

    // Tampilkan dropdown jurusan hanya jika SMA/SMK/MA dipilih
    if (kategori === 'SMA' || kategori === 'SMK' || kategori === 'MA') {
        jurusanDiv.style.display = 'block';
    } else {
        jurusanDiv.style.display = 'none';
    }
}

function toggleOtherInput() {
    const selectJurusan = document.getElementById('prodi_lama');
    const otherContainer = document.getElementById('otherInputContainer');
    if (selectJurusan.value === 'other') {
        otherContainer.style.display = 'block';
    } else {
        otherContainer.style.display = 'none';
    }
}

function onJurusanChange() {
    const jurusanSelect = document.getElementById('prodi_lama');
    const prodiSelect = document.getElementById('prodi');
    const selectedOption = jurusanSelect.options[jurusanSelect.selectedIndex];
    const boleh = selectedOption.getAttribute('data-boleh');
    const jalur = "<?= $this->session->userdata('jalur'); ?>"; // contoh: gdr1, reguler, rpl, dll

    // Ambil semua option di dropdown Prodi
    const allOptions = prodiSelect.querySelectorAll('option');

    allOptions.forEach(opt => {
        // default: tampilkan semua
        opt.disabled = false;
        opt.style.display = 'block';
    });

    // Filter prodi berdasarkan kolom 'boleh'
    if (boleh === '2') {
        // prodi D3 Teknika (value=2) tidak terbuka
        const opt = prodiSelect.querySelector('option[value="2"]');
        if (opt) {
            opt.disabled = true;
            opt.style.display = 'none';
        }
    } else if (boleh === '1') {
        // prodi D3 Nautika (value=3) tidak terbuka
        const opt = prodiSelect.querySelector('option[value="3"]');
        if (opt) {
            opt.disabled = true;
            opt.style.display = 'none';
        }
    }

    // Filter tambahan berdasarkan JALUR
    // Contoh logika sederhana, bisa disesuaikan:
    if (jalur === 'rpl') {
        // Misal jalur RPL tidak boleh memilih prodi D3 Teknika (value=2)
        const opt = prodiSelect.querySelector('option[value="2"]');
        if (opt) {
            opt.disabled = true;
            opt.style.display = 'none';
        }
    } else if (jalur === 'gdr1') {
        // Misal jalur GDR1 hanya untuk D3 Nautika dan D3 Teknika
        allOptions.forEach(opt => {
            if (opt.value !== '2' && opt.value !== '3' && opt.value !== '') {
                opt.disabled = true;
                opt.style.display = 'none';
            }
        });
    }
}

</script>

