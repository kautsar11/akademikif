$(function() {
  // guru
    $("form[name='formTambahGuru']").validate({
      rules: {
        guruNip: "required",
        guruNama: "required",
      },
      messages: {
        guruNip: "NIP tidak boleh kosong",
        guruNama: "Nama tidak boleh kosong",
      },
      submitHandler: function(form) {
        form.submit();
      }
    });

    $("form[name='formUbahGuru']").validate({
      rules: {
        guruNip: "required",
        guruNama: "required",
      },
      messages: {
        guruNip: "NIP tidak boleh kosong",
        guruNama: "Nama tidak boleh kosong",
      },
      submitHandler: function(form) {
        form.submit();
      }
    });

    // kelas
    $("form[name='formUbahKelas']").validate({
      rules: {
        kelasNamaWakel: "required",
      },
      messages: {
        kelasNamaWakel: "Wali kelas tidak boleh kosong",
      },
      submitHandler: function(form) {
        form.submit();
      }
    });

    // tahun ajar
    $("form[name='formTambahTahunAjar']").validate({
      rules: {
        tahunAjar: "required",
      },
      messages: {
        tahunAjar: "Tahun ajar tidak boleh kosong",
      },
      submitHandler: function(form) {
        form.submit();
      }
    });

    // siswa
    $("form[name='formTambahSiswa']").validate({
      rules: {
        siswaNisn: "required",
        siswaNama: "required",
      },
      messages: {
        siswaNisn: "NISN tidak boleh kosong",
        siswaNama: "Nama tidak boleh kosong",
      },
      submitHandler: function(form) {
        form.submit();
      }
    });

    $("form[name='formUbahSiswa']").validate({
      rules: {
        siswaNisn: "required",
        siswaNama: "required",
      },
      messages: {
        siswaNisn: "NISN tidak boleh kosong",
        siswaNama: "Nama tidak boleh kosong",
      },
      submitHandler: function(form) {
        form.submit();
      }
    });

    // mata pelajaran
    $("form[name='formUbahMapel']").validate({
      rules: {
        kkm: "required",
      },
      messages: {
        kkm: "KKM tidak boleh kosong",
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });