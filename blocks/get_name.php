<script>
    function get_cookie (cookie_name){
        var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
        if ( results )
            return (unescape (results[2]));
        else
            return null;
    }
    var x = get_cookie ("user");
    console.log(x);

    var infoCust = <?php echo json_encode($infoCustomer) ?>;

    console.log(infoCust);

    for (var i = 0; i<infoCust.length; i++){
        if (infoCust[i][0] == x){
            var name = infoCust[i][3];
            document.getElementById('name').innerHTML = name;
        }
    }
</script>