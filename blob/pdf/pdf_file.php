<?php
$pdf = pdf_new();
pdf_open_file($pdf, "C:\bennyboy.pdf");

pdf_set_info($pdf, "Author", "Ben Shepherd");
pdf_set_info($pdf, "Title", "Creating a pdf");
pdf_set_info($pdf, "Creator", "Ben Shepherd");
pdf_set_info($pdf, "Subject", "Creating a pdf");

pdf_begin_page($pdf, 595, 842);

$arial = pdf_findfont($pdf, "Arial", "host", 1);
pdf_setfont($pdf, $arial, 14);

pdf_show_xy($pdf, "experiment",50, 400);

$gif_image = pdf_open_gif($pdf, "1.gif");

pdf_place_image($pdf, $gif_image, 200, 300, 1.0);

pdf_close_image($pdf, $gif_image);

pdf_end_page($pdf);
pdf_close($pdf);

echo "<A HREF=\"C:\bennyboy.pdf\" TARGET=\"_blank\">Open pdf in a new window $user</A>"
?>