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
    const jalur = "<?= $this->session->userdata('jalur'); ?>"; // ambil dari session

    // Reset semua opsi prodi
    const allOptions = prodiSelect.querySelectorAll('option');
    allOptions.forEach(opt => {
        opt.disabled = false;
        opt.style.display = 'block';
    });

    // ==========================
    // 1️⃣ FILTER BERDASARKAN JALUR
    // ==========================
    switch (jalur) {
        case 'gdr1':
        case 'reguler':
            // semua prodi terbuka
            break;

        case 'gdr2':
        case 'rpl':
            // hanya prodi transportasi (value = 4)
            allOptions.forEach(opt => {
                if (opt.value !== '4' && opt.value !== '') {
                    opt.disabled = true;
                    opt.style.display = 'none';
                }
            });
            break;

        case 'regulers':
        case 'beayb':
            // hanya prodi S1 (value >= 4)
            allOptions.forEach(opt => {
                if (parseInt(opt.value) < 4 && opt.value !== '') {
                    opt.disabled = true;
                    opt.style.display = 'none';
                }
            });
            break;
    }

    // ==========================
    // 2️⃣ FILTER BERDASARKAN JURUSAN
    // ==========================
    // Gunakan logika ‘boleh’
    if (boleh === '0') {
        // Nautika (3) dan Teknika (2) tertutup
        hideOption(prodiSelect, '2');
        hideOption(prodiSelect, '3');
    } else if (boleh === '1') {
        // Nautika tertutup
        hideOption(prodiSelect, '3');
    } else if (boleh === '2') {
        // Teknika tertutup
        hideOption(prodiSelect, '2');
    } else if (boleh === '3') {
        // semua prodi terbuka, tidak ada yang disembunyikan
    }

    // ==========================
    // 3️⃣ KHUSUS JIKA JURUSAN IPS
    // ==========================
    const jurusanText = selectedOption.textContent.toLowerCase();
    if (jurusanText.includes('ips')) {
        hideOption(prodiSelect, '2'); // Teknika
        hideOption(prodiSelect, '3'); // Nautika
    }
}

function hideOption(select, value) {
    const opt = select.querySelector('option[value="' + value + '"]');
    if (opt) {
        opt.disabled = true;
        opt.style.display = 'none';
    }
}

</script>

