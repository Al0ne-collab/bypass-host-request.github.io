<?php
echo '<html><body><script type="text/javascript" src="aes.js" ></script><script>function toNumbers(d){var e=[];d.replace(/(..)/g,function(d){e.push(parseInt(d,16))});return e}function toHex(){for(var d=[],d=1==arguments.length&&arguments[0].constructor==Array?arguments[0]:arguments,e="",f=0;f<d.length;f++)e+=(16>d[f]?"0":"")+d[f].toString(16);return e.toLowerCase()}var a=toNumbers("f655ba9d09a112d4968c63579db590b4"),b=toNumbers("98344c2eee86c3994890592585b49f80"),c=toNumbers("a594fe698ccf7e33126cee28c2c76321");</script></body></html>';
echo '<script>';
echo 'document.write(toHex(slowAES.decrypt(c,2,a,b)));';
echo '</script>';
?>
