<script>
    $(document).ready(function(){
        let dataList = 'https://api.kawalcorona.com/indonesia/provinsi/';
        let output = '';
        $.ajax({
            type: 'GET',
            url: dataList,
            dataType: 'json',
            success: function(result) {
                $.each(result, function(i, item) {
                    // console.log(item.attributes.Provinsi +'-'+ item.attributes.Kasus_Semb);
                    output +=`
                    <div class="listile">
                        <div class="list-item leading"><span class="fa fa-bars"></span></div>
                        <div class="list-item title"><span>${item.attributes.Provinsi} - ${item.attributes.Kasus_Semb}</span></div>
                        <div class="list-item trailing"><span class="fa fa-trash"></span></div>
                    </div>
                    `;
                });
                $('.data-list').html(output);
            } 
        });
        
        //Set di input dengan id="autocomplete"
        $("#autocomplete" ).autocomplete({
            let ajxLink = myBaseURL + 'xboq/saranCari';
            source: function(request, response) {
                $.ajax({
                    url: ajxLink,
                    data: { term: $("#autocomplete").val()},
                    dataType: "json",
                    type: "POST",
                    success: function(data){
                        response(data);
                    }
                });
            },
            minLength: 2
        });
    });

</script>
