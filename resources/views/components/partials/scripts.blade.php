<!-- Libs JS -->
<script src="{{ asset('/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
<script src="{{ asset('/libs/jsvectormap/dist/js/jsvectormap.min.js') }}" defer></script>
<script src="{{ asset('/libs/jsvectormap/dist/maps/world.js') }}" defer></script>
<script src="{{ asset('/libs/jsvectormap/dist/maps/world-merc.js') }}" defer></script>
<!-- Tabler Core -->
<script src="{{ asset('/js/tabler.js') }}" defer></script>
<script src="{{ asset('/js/demo.js') }}" defer></script>

<script type="text/javascript"> 
    function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
    }
    
    function display_ct() {
        var x = new Date()
        document.getElementById('ct').innerHTML = x;
        display_c();
     }
</script>