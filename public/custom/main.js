$(document).ready(function() {
  console.log('test');
      $.ajax({
        type:'get',
        url:'kasussiswa',
        success:function(response) {
          console.log(response);
          // material
          // convert aray to object
          var custArray = response;
          var dataCust = {};
          var dataCust2 = {};
          for (var i =0; i < custArray.length; i++){

            dataCust[custArray[i].name] =null;
            dataCust2[custArray[i].name] =custArray[i];
          }
          console.log("dataCust2");
          console.log(dataCust2);
    
          // covert end
          $('input#searchhere_id').autocomplete({
            data: dataCust,
            onAutocomplete:function(reqdata){
              console.log(reqdata);
              $('#namakelas').val(dataCust2[reqdata]['nis']);
              $('#idsiswa').val(dataCust2[reqdata]['id']);
              $('#alamat').val(dataCust2[reqdata]['alamat']);
              $('#namajurusan').val(dataCust2[reqdata]['jurusan']);

            }
          });
          // end
        }
      })


      $.ajax({
        type:'get',
        url:'getpelanggar',
        success:function(response) {
          console.log(response);
          // material
          // convert aray to object
          var custArray = response;
          var dataCust = {};
          var dataCust2 = {};
          for (var i =0; i < custArray.length; i++){

            dataCust[custArray[i].jenispelanggaran] =null;
            dataCust2[custArray[i].jenispelanggaran] =custArray[i];
          }
          console.log("dataCust2");
          console.log(dataCust2);
    
          // covert end
          $('input#searchhere_plgr').autocomplete({
            data: dataCust,
            onAutocomplete:function(reqdata){
              console.log(reqdata);
              $('#point').val(dataCust2[reqdata]['point']);
              $('#idpelanggaran').val(dataCust2[reqdata]['id']);
              $('#sanksi').val(dataCust2[reqdata]['sanksi']);
            }
          });
          // end
        }
      })
}); 