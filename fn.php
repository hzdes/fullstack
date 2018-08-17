<?php
    function codeParse($url){
        
        global $ejNum;
        global $claseNum;
        
        echo "<div data-target='code$claseNum-$ejNum' class='acordion-header'><h4>Codigo</h4></div>";
        echo "<div id='code$claseNum-$ejNum' class='acordion code'>";
        echo "<pre class='source'>";
        echo highlight_file($url, true);
        echo "</pre>";
        echo "</div>";
        echo "<div data-target='result$claseNum-$ejNum' class='acordion-header '><h4>Resultado</h4></div>";
        echo "<div id='result$claseNum-$ejNum' class='acordion result'>";
        include $url;
        echo "</div>";
    }
?>