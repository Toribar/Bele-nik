$(document).ready(function() {
    $("#scanner").click(function(){
        $.ajax({
          url: 'http://localhost:8090',
        })
        .done(function(data) {
          if (data.error) {
            alert(data.error);
          }
          else {
            $('.client-info').val(
              "Ime i prezime: " + data.surname + " " + data.given_name +
              "\n"
              + "Br.lk :" + data.doc_reg_no +
              "\n"
              + "Adresa: " + data.street + " " + data.house_number + "/" + data.apartment_number + " " + data.place );
            $('.public-book').val(data.issuing_authority);
          }
        })
        .fail(function() {
          alert("Desila se greska")
        })
    });
});
