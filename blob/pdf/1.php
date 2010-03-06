<?php 

$cpdf = cpdf_open(0); 
cpdf_page_init($cpdf, 1, 0, 595, 842, 1.0); 
cpdf_add_outline($cpdf, 0, 0, 0, 1, "Page 1"); 
cpdf_begin_text($cpdf); 
cpdf_set_font($cpdf, "Times-Roman", 30, "WinAnsiEncoding"); 
cpdf_set_text_rendering($cpdf, 1); 
cpdf_text($cpdf, "Times Roman outlined", 50, 750); 
cpdf_end_text($cpdf); 
cpdf_moveto($cpdf, 50, 740); 
cpdf_lineto($cpdf, 330, 740); 
cpdf_stroke($cpdf); 
cpdf_finalize($cpdf); 
Header("Content-type: application/pdf"); 
cpdf_output_buffer($cpdf); 
cpdf_close($cpdf); 
?>
