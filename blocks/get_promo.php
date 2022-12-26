<script>
    function get_cookie (cookie_name){
        var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
        if ( results )
            return (unescape (results[2]));
        else
            return null;
    }
    var x = get_cookie ("promo");

    document.getElementById('promo_field').innerHTML = x;
</script>