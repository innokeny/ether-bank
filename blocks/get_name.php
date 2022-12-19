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

var infoCustomer = <?php echo json_encode($infoCustomer) ?>;

console.log(infoCustomer);

for (var i = 0; i<infoCustomer.length; i++){
    if (infoCustomer[i][1] = x){
        var name = infoCustomer[i][3];
        document.getElementById('name').innerHTML = name;
    }
}
</script>