<script type="text/javascript">
	$(document).ready(function(){
        $('#provinsi').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>getkabkota",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_wil+'>'+data[i].nm_wil+'</option>';
                    }
                    $('.ktkb').html(html);
                     
                }
            });
        });
    });
     function validateNumber(input) {
            // Menghapus karakter selain angka
            input.value = input.value.replace(/\D/g, '');
        }

        function toggleOtherInput() {
            const select = document.getElementById('prodi_lama');
            const otherInputContainer = document.getElementById('otherInputContainer');

            if (select.value === 'other') {
                otherInputContainer.style.display = 'block';
            } else {
                otherInputContainer.style.display = 'none';
                document.getElementById('prodi_lama_lainnya').value = ''; // Clear other input
            }
        }

        function onKategoriChange() {
    const kategori = document.getElementById('kategori_sek').value;
    const jurusanDiv = document.getElementById('jurusan_sma_smk');
    jurusanDiv.style.display = (kategori === 'SMA' || kategori === 'SMK' || kategori === 'MA') ? 'block' : 'none';
    filterProdi(); // panggil juga filter awal
}

function onJurusanChange() {
    filterProdi();
}

function filterProdi() {
    const kategori = document.getElementById('kategori_sek').value;
    const jurusanSelect = document.getElementById('prodi_lama');
    const selectedJurusan = jurusanSelect.options[jurusanSelect.selectedIndex];
    const boleh = selectedJurusan ? selectedJurusan.getAttribute('data-boleh') : null;
    const prodiSelect = document.getElementById('prodi');
    const jalur = '<?= $jalur ?>'; // ambil dari session PHP

    // reset
    Array.from(prodiSelect.options).forEach(opt => opt.style.display = 'block');

    // 1️⃣ Filter berdasarkan "boleh"
    if (boleh === '2') {
        // prodi D3 Teknika (value=2) disembunyikan
        hideOption('2');
    } else if (boleh === '1') {
        // prodi D3 Nautika (value=3) disembunyikan
        hideOption('3');
    }

    // 2️⃣ Filter berdasarkan "jalur"
    switch (jalur) {
        case 'gdr1':
        case 'gdr2':
        case 'reguler':
            // semua prodi tampil (no filter)
            break;
        case 'regulers':
            // hanya S1 (value >=4)
            showOnly(['4','5','6','7','8','10']);
            break;
        case 'rpl':
            // hanya S1 Transportasi (value=4)
            showOnly(['4']);
            break;
        case 'beayb':
            // hanya S1 juga (value >=4)
            showOnly(['4','5','6','7','8','10']);
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

