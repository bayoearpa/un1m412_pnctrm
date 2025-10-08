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

// === TAMPILKAN SELECT JURUSAN JIKA KATEGORI SEK SMA/SMK/MA ===
function onKategoriChange() {
    const kategori = document.getElementById('kategori_sek').value;
    const jurusanDiv = document.getElementById('jurusan_sma_smk');
    jurusanDiv.style.display = (kategori === 'SMA' || kategori === 'SMK' || kategori === 'MA') ? 'block' : 'none';
    filterProdi(); 
}

// === SAAT GANTI JURUSAN ===
function onJurusanChange() {
    filterProdi();
}

// === FILTER PRODI BERDASARKAN JURUSAN & JALUR ===
function filterProdi() {
    const kategori = document.getElementById('kategori_sek').value;
    const jurusanSelect = document.getElementById('prodi_lama');
    const selectedJurusan = jurusanSelect.options[jurusanSelect.selectedIndex];
    const boleh = selectedJurusan ? selectedJurusan.getAttribute('data-boleh') : null;
    const prodiSelect = document.getElementById('prodi');
    const jalur = '<?= $jalur ?>'; // dari session PHP

    // reset semua opsi
    Array.from(prodiSelect.options).forEach(opt => opt.style.display = 'block');

    // 1️⃣ Filter berdasarkan kolom "boleh" dari tabel jurusan
    if (boleh === '2') {
        hideOption('2'); // sembunyikan D3 Teknika
    } else if (boleh === '1') {
        hideOption('3'); // sembunyikan D3 Nautika
    }

    // 2️⃣ Filter tambahan berdasarkan "jalur"
    switch (jalur) {
        case 'gdr1':
        case 'gdr2':
        case 'reguler':
            // semua prodi tampil
            break;
        case 'regulers':
        case 'beayb':
            // hanya prodi S1
            showOnly(['4','5','6','7','8','10']);
            break;
        case 'rpl':
            // hanya S1 Transportasi (value=4)
            showOnly(['4']);
            break;
    }

    function hideOption(value) {
        const opt = prodiSelect.querySelector(`option[value="${value}"]`);
        if (opt) opt.style.display = 'none';
    }

    function showOnly(values) {
        Array.from(prodiSelect.options).forEach(opt => {
            if (!values.includes(opt.value)) opt.style.display = 'none';
        });
    }
}
</script>

