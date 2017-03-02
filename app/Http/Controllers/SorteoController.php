<?php

namespace App\Http\Controllers;

use App\Models\Estructura;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;
use PDF;
class SorteoController extends Controller
{
	/**
	 * Inicio del controlador
	 * @return [type] [description]
	 */
    public function index()
    {
    	$Lista = Pregunta::all();
    	return view('sorteo.index',compact('Lista'));
    }
    /**
     * sorteo de preguntas
     */
    public function sortear()
    {
    	$estructura = Estructura::with('detalles')->get();
        $estructura = $estructura->each(function($item,$key){
            $categorias = $item->detalles->implode('idcategoria',',');
            $categorias = explode(',', $categorias);
            $preguntas_sorteadas = Pregunta::select('id')
                                            ->whereIn('idcategoria',$categorias)
                                            ->where('sorteado',false)
                                            ->take($item->cantidad)
                                            ->inRandomOrder()
                                            ->get();
            Pregunta::whereIn('id',$preguntas_sorteadas)->update(['sorteado'=>true]);

        });
        Alert::success('Sorteo realizado');
        return redirect()->route('sorteo.index');
    }
    /**
     * Preguntas sorteadas
     * @return [type] [description]
     */
    public function sorteado()
    {
        $Lista = Pregunta::where('sorteado',true)->orderBy('idcategoria')->get();
        return view('sorteo.index',compact('Lista'));
    }
    /**
     * muestra el pdf
     */
    public function imprimir()
    {
        return view('sorteo.imprimir');
    }
    /**
     * genera el pdf
     */
    public function getpdf()
    {
        PDF::SetTitle('titulo');
        PDF::AddPage('U','A4');
        Reportheader();

        $this->TituloColumnas();



        $data = Pregunta::where('sorteado',true)
                            ->orderBy('idcategoria')
                            ->orderBy('nombre')
                            ->get();
        $altodecelda=5;
        $incremento = 35;
        $x = 25;
        $i = 0;
        $j = 1;
        $k = 1;
        while ($i < count($data)) {
            PDF::SetXY($x+10, $j*$altodecelda+$incremento);
            PDF::SetFont('courier', '', 11);
            PDF::Cell(10, 5, $k, 0, 1, 'C');

            PDF::SetXY($x+23, $j*$altodecelda+$incremento);
            PDF::SetFont('courier', '', 11);
            PDF::Cell(30, 5, $data[$i]['nombre'], 0, 1, 'C');

            PDF::SetXY($x+53, $j*$altodecelda+$incremento);
            PDF::SetFont('courier', '', 11);
            PDF::Cell(80, 5, $data[$i]['categoria'], 0, 1, 'C');

            $i++;
            $k++;
            $j++;
        };
        PDF::Output(public_path('storage/tmp/').'pregutnas_sorteadas.pdf','FI');
    }
    function TituloColumnas(){
        $y=35;
        $x=25;
        #TITULO REPORTE
        PDF::SetXY(35,24);
        PDF::SetTextColor(255,0,0);
        PDF::SetFont('helvetica','B',12);
        PDF::Cell(150,5,"SORTEO DE PREGUNTAS",0,2,'C');
        #

        PDF::SetTextColor(0);
        #
        PDF::SetLineWidth(0.5);
        // $this->SetLineStyle(array('width' => 0.1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0));
        #
        PDF::SetXY($x+10, $y-0.5);
        PDF::SetFont('courier', 'B', 11);
        PDF::Cell(130, 5,'' , 'TB', 1, 'C');
        #
        PDF::SetLineWidth(0.2);
        #
        PDF::SetXY($x+10, $y);
        PDF::SetFont('courier', 'B', 11);
        PDF::Cell(10, 5, 'Nº', 0, 0, 'C');
        #
        PDF::SetXY($x+30, $y);
        PDF::SetFont('courier', 'B', 11);
        PDF::Cell(15, 5, 'Preguntas', 0, 1, 'C');
        // $this->MultiCell(20,10,'Código Errado', 1, 'C', 1, 1, '' ,'', true,0,false,true,0,'T');
        #
        PDF::SetXY($x+55, $y);
        PDF::SetFont('courier', 'B', 11);
        PDF::Cell(80, 5, 'Categorías', 0, 1, 'C');
    }
}
