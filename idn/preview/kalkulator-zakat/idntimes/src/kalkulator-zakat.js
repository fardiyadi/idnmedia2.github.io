/* Fungsi formatRupiah */
var formatRupiah = function (angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split           = number_string.split(','),
    sisa            = split[0].length % 3,
    rupiah          = split[0].substr(0, sisa),
    ribuan          = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    // return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
};

/* Fungsi hitungZakatProfesi */
var hitungZakatProfesi = function () {
    var zakatprofesi = 0.0;
    if ($('#zakatprofesi').val() != ''){
        zakatprofesi = parseFloat($('#zakatprofesi').val().replace(/\./g, ""));
    }

    var zakatlainprofesi = 0.0;
    if ($('#zakatlainprofesi').val() != ''){
        zakatlainprofesi = parseFloat($('#zakatlainprofesi').val().replace(/\./g, ""));
    }

    var total = (zakatprofesi+zakatlainprofesi)*(0.025);
    if (isNaN(total)){
        total = 0;
    }

    total = total.toLocaleString('id-ID', {minimumFractionDigits: 2, maximumFractionDigits: 2});
    $('#hasilprofesi').html(total);
};

$(document).ready(function() {
    $( ".zakat-input input" ).focus(function() {
        $(this).parent().addClass( "onFocus" );
    }).blur(function(){
        $(this).parent().removeClass( "onFocus" );
    });

    $(".zakat-input input").on("change", function(){
        var value = $(this).val();

        if(value.length > 0){
            $(".zakat-input-group").addClass( "hasValue" );
        } else {
            $(".zakat-input-group").removeClass( "hasValue" );
        }
    });

    $('.currency').on('keyup', function(e){
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        $(this).val(formatRupiah($(this).val(), ''));
        hitungZakatProfesi();
    });
});

/* popup */
function wkzPopup() {
    var x = document.getElementById("wkzPopup");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}