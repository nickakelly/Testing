<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet/less" type="text/css" href="styles.less" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<script src="inc/less-1.4.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:300,200,100,400' rel='stylesheet' type='text/css'>
<script>
function resizeWrapper() {
    var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;
    //305px is height of footer+header
    document.getElementById("wrapper").style.minHeight=y-305+'px';
}
</script>