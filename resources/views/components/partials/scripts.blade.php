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

    function formatAMPM(date) {
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes < 10 ? '0'+minutes : minutes;
        var strTime = hours + ':' + minutes + ':' + date.getSeconds() + ' ' + ampm;
        return strTime;
    }
    
    function display_ct() {
        var x = new Date();
        document.getElementById('ct_date').innerHTML = x.toDateString();

        document.getElementById('ct_time').innerHTML = formatAMPM(x);
        display_c();
    }
</script>