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
                let html = '';
                for(let i = 0; i < data.length; i++){
                    html += '<option value="'+data[i].id_wil+'">'+data[i].nm_wil+'</option>';
                }
                $('.ktkb').html(html);
            }
        });
    });

    // Jalankan filter prodi langsung berdasarkan jalur
    filterByJalur();
});


// === VALIDASI NOMOR ===
function validateNumber(input) {
    input.value = input.value.replace(/\D/g, '');
}

// === TAMPILKAN INPUT "LAINNYA" ===
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

// === KATEGORI SEKOLAH ===
function onKategoriChange() {
    const kategori = document.getElementById('kategori_sek').value;
    const jurusanDiv = document.getElementById('jurusan_sma_smk');
    jurusanDiv.style.display = (kategori === 'SMA' || kategori === 'SMK' || kategori === 'MA') ? 'block' : 'none';
}


// === FILTER BERDASARKAN JALUR ===
function filterByJalur() {
    const prodiSelect = document.getElementById('prodi');
    const jalur = "<?= $this->session->userdata('jalur'); ?>"; // dari session
    const allOptions = prodiSelect.querySelectorAll('option');

    // reset semua dulu
    allOptions.forEach(opt => {
        opt.disabled = false;
        opt.style.display = 'block';
    });

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
}


// === FILTER BERDASARKAN JURUSAN (dipanggil setelah pilih jurusan) ===
function onJurusanChange() {
    const jurusanSelect = document.getElementById('prodi_lama');
    const prodiSelect = document.getElementById('prodi');
    const selectedOption = jurusanSelect.options[jurusanSelect.selectedIndex];
    const boleh = selectedOption.getAttribute('data-boleh');
    const jalur = "<?= $this->session->userdata('jalur'); ?>";

    // Jalankan filter dasar dulu
    filterByJalur();

    // Filter tambahan berdasarkan "boleh"
    if (boleh === '0') {
        hideOption(prodiSelect, '2'); // Teknika
        hideOption(prodiSelect, '3'); // Nautika
    } else if (boleh === '1') {
        hideOption(prodiSelect, '3'); // Nautika
    } else if (boleh === '2') {
        hideOption(prodiSelect, '2'); // Teknika
    }

    // Khusus jika jurusan IPS
    const jurusanText = selectedOption.textContent.toLowerCase();
    if (jurusanText.includes('ips')) {
        hideOption(prodiSelect, '2');
        hideOption(prodiSelect, '3');
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
