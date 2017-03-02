<?php

if (! function_exists('Reportheader')) {
    /**
     * Funcion que retorna el prefijo para nombres de archivos
     * @return [type] [description]
     */
    function Reportheader()
    {

    	PDF::Image(public_path('assets/pages/img/').'logo-uni.jpg',15,7,13);
    	PDF::SetFont('helvetica','B',9);
        PDF::SetXY(29,10);
        PDF::Cell(150,5,'UNIVERSIDAD NACIONAL DE INGENIERÍA',0,2,'L');
        PDF::SetXY(29,13);
        PDF::SetFont('helvetica','B',9);
        PDF::Cell(150,5,'OFICINA CENTRAL DE ADMISIÓN',0,2,'L');
        PDF::SetXY(29,17);
        PDF::SetFont('helvetica','',9);
		PDF::Cell(150,5,'EXAMEN ONPE',0,2,'L');
        PDF::SetXY(29,20);
		PDF::Cell(150,5,'',0,0,'L');
        #   NUMERO DE PAGINA
        PDF::SetFont('helvetica', 'B', 8);
        PDF::SetXY(160, 10);
        PDF::Cell(13, 5, "Fecha :", 0, 0, 'L');
        PDF::SetXY(173, 10);
        PDF::Cell(17, 5, date('d/m/Y'), 0, 0, 'R');
        PDF::SetXY(160, 13);
        PDF::Cell(13, 5, "Hora :", 0, 0, 'L');
        PDF::SetXY(173, 13);
        PDF::Cell(17, 5, date('H:i:s'), 0, 0, 'R');
        PDF::SetXY(160, 17);
        PDF::Cell(13, 5, 'Página :', 0, 0, 'L');
        PDF::SetXY(173, 17);
        $pagina = trim(PDF::PageNo().' de '.PDF::getAliasNbPages());
        PDF::Cell(17, 5,$pagina, 0, 0, 'R');
    }
}

if (! function_exists('Reportfooter')) {
    /**
     * Funcion que retorna el prefijo para nombres de archivos
     * @return [type] [description]
     */
    function Reportfooter($codigo=null)
    {
        PDF::SetTextColor(0);
        PDF::SetLineWidth(0.5);
        PDF::SetFont('helvetica', '', 9);
        PDF::Line(12,271,200,271);
        PDF::SetXY(15,-25);
        PDF::Cell(55, 1,$codigo , 0, 1, 'C', 0);
        PDF::SetXY(140,-25);
        PDF::Cell(60, 1,'Oficina Central de Admisión' ,0, 1, 'C', 0);
    }
}