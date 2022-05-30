function Saveinfo(){
    let _wifiadd=$('input[name="WIFI"]:checked').val();
    let _acadd=$('input[name="AC"]:checked').val();
    let _nbseatsadd=$('#myNumber').val();
    let _TypeAdd = $('#_Type').val();
  
     console.log(_wifiadd);
     console.log(_acadd);
     console.log(_nbseatsadd);
     console.log(_TypeAdd);

    
    $.ajax({
        url:"insertCarinfo2.php",
        type:'post',
        data: {
            _wifiSend: _wifiadd,
            _acSend: _acadd,
            _nbseatsSend: _nbseatsadd,
            _TypeSend: _TypeAdd
        },
        success:function(data,status){           
            console.log(status);
            
        }
    });
}