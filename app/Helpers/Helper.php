<?php

if (!function_exists('formatAngka')) {
    function formatAngka($angka)
    {
        $CI = &get_instance();
        $CI->load->helper('inflector');

        $satuan = ['', 'ribu', 'juta', 'miliar'];
        $puluhan = ['sepuluh', 'sebelas', 'dua belas', 'tiga belas', 'empat belas', 'lima belas', 'enam belas', 'tujuh belas', 'delapan belas', 'sembilan belas'];
        $angkaBulat = floor($angka);
        $angkaDecimal = round(($angka - $angkaBulat) * 100);
        $hasil = '';

        if ($angkaBulat < 10) {
            $hasil = 'nol ' . terbilangSatuan($angkaBulat);
        } elseif ($angkaBulat < 20) {
            $hasil = $puluhan[$angkaBulat - 10];
        } elseif ($angkaBulat < 100) {
            $hasil = terbilangPuluhan($angkaBulat);
        } else {
            $hasil = terbilangRatusan($angkaBulat);
        }

        if ($angkaDecimal > 0) {
            $hasil .= ' koma ' . terbilangSatuan($angkaDecimal);
        }

        return singular($hasil);
    }

    function terbilangSatuan($angka)
    {
        $satuan = ['', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan'];
        return $satuan[$angka];
    }

    function terbilangPuluhan($angka)
    {
        $puluhan = ['sepuluh', 'dua puluh', 'tiga puluh', 'empat puluh', 'lima puluh', 'enam puluh', 'tujuh puluh', 'delapan puluh', 'sembilan puluh'];
        $hasil = $puluhan[floor($angka / 10) - 1] . ' ' . terbilangSatuan($angka % 10);
        return $hasil;
    }

    function terbilangRatusan($angka)
    {
        $ratusan = ['seratus', 'dua ratus', 'tiga ratus', 'empat ratus', 'lima ratus', 'enam ratus', 'tujuh ratus', 'delapan ratus', 'sembilan ratus'];
        $hasil = $ratusan[floor($angka / 100) - 1] . ' ' . terbilangPuluhan($angka % 100);
        return $hasil;
    }
}