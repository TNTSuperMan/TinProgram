<?php
function style(){
    $style = "";
    foreach (file("style.css") as $t) {
        $style = $style . $t;
    }
    return $style;
}
echo("<html lang=ja><head>");
//MetaData
echo("<meta charset=\"UTF-8\">");
echo("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">");
echo("<title>Tin☆Program</title>");
echo("</head><body>");
//Main
echo("下のボタンを押すごとにTin☆が増えるよ!<br><button onclick=\"t()\">押してね！</button><br>");
echo("<div style=\"" . str_replace(style(),"\n","",style().length) . "\">");
echo("<script>");
echo("function t(){");
echo("document.querySelector(\"div\").innerText+=\"Tin☆\"");
echo("</script></body></html>");