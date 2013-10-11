<?php

class FormatController extends BaseController {

	public function getIndex()
	{
		return View::make('formatos.index');
	}

	public function getFormato1a()
	{
		$user = Auth::user();
		//dd($user);
		return View::make('formatos.f1a', array(
			'user' => $user
			));
	}

	public function postFormato1a()
	{

		//Validation
		$rules = array(
			'user_id'					=> 'required|unique:f1a',
			'escuela_procedencia'		=> 'required',
			'tipo_bachillerato'			=> 'required',
			'promedio_admision'			=> 'required',
			'promedio_bachillerato'		=> 'required',
			'vive_con'					=> 'required',
			'ingles'					=> 'required',
			'deportivo'					=> 'required',
			'cultural'					=> 'required',
			'dificultad_ext_esc'		=> 'required',
			'dificultad_ext_esc_texto'	=> 'required',
			'trabaja'					=> 'required',
			'trabajo_horas'				=> 'required'
		);

		$messages = array(
			'user_id.unique'					=> 'Solo puede responder este formulario una vez.',
			'ingles.required'					=> 'Debe de responder si o no en el apartado de ingles.',
			'deportivo.required'				=> 'Debe de responder si o no en el apartado de deportivo.',
			'cultural.required'					=> 'Debe de responder si o no en el apartado de cultural.',
			'escuela_procedencia.required'		=> 'Debe espesificar el campo escuela de procedencia para continuar.',
			'tipo_bachillerato.required'		=> 'Debe espesificar el campo tipo de bachillerato para continuar.',
			'promedio_admision.required'		=> 'Debe espesificar el campo promedio del examen de admision para continuar.',
			'promedio_bachillerato.required'	=> 'Debe espesificar el campo promedio de bachillerato para continuar.',
			'vive_con.required'					=> 'Debe espesificar el campo vive con para continuar.',
			'nivel.required'					=> 'Debe espesificar el campo nivel para continuar.',
			'actividad_dep.required'			=> 'Debe espesificar el campo :attribute para continuar.',
			'actividad_cult.required'			=> 'Debe espesificar el campo :attribute para continuar.',
			'dificultad_ext_esc.required'		=> 'Debe espesificar el campo :attribute para continuar.',
			'dificultad_ext_esc_texto.required'	=> 'Debe espesificar el campo :attribute para continuar.',
			'trabaja.required'					=> 'Debe espesificar el campo :attribute para continuar.',
			'trabajo_horas.required'			=> 'Debe espesificar el campo :attribute para continuar.'
		);

		$validator = Validator::make(Input::all(), $rules, $messages);

		if ($validator->fails()) {
			return Redirect::to('formato/1a')->withErrors($validator)->withInput();
		}

		$formato1a = new Formato1a;
		$formato1a->user_id 					= Input::get('user_id');
		$formato1a->escuela_procedencia 		= Input::get('escuela_procedencia');
		$formato1a->tipo_bachillerato 			= Input::get('tipo_bachillerato');
		$formato1a->promedio_admision 			= Input::get('promedio_admision');
		$formato1a->promedio_bachillerato 		= Input::get('promedio_bachillerato');
		$formato1a->vive_con 					= Input::get('vive_con');
		$formato1a->ingles 						= Input::get('ingles');
		$formato1a->nivel 						= Input::get('nivel');
		$formato1a->deportivo 					= Input::get('deportivo');
		$formato1a->actividad_dep 				= Input::get('actividad_dep');
		$formato1a->cultural 					= Input::get('cultural');
		$formato1a->actividad_cult 				= Input::get('actividad_cult');
		$formato1a->dificultad_ext_esc 			= Input::get('dificultad_ext_esc');
		$formato1a->dificultad_ext_esc_texto 	= Input::get('dificultad_ext_esc_texto');
		$formato1a->trabaja 					= Input::get('trabaja');
		$formato1a->trabajo_horas 				= Input::get('trabajo_horas');
		$formato1a->academicos 					= Input::get('academicos');
		$formato1a->emocionales 				= Input::get('emocionales');
		$formato1a->familiares 					= Input::get('familiares');
		$formato1a->de_salud 					= Input::get('de_salud');
		$formato1a->politicos 					= Input::get('politicos');
		$formato1a->religiosos 					= Input::get('religiosos');
		$formato1a->economicos 					= Input::get('economicos');
		$formato1a->otro 						= Input::get('otro');
		$formato1a->otro_problema 				= Input::get('otro_problema');
		$formato1a->save();

		return Redirect::to('formatos');
	}

	public function getFormato1()
	{
		$user = Auth::user();
		//dd($user);
		return View::make('formatos.f1', array(
			'user' => $user
			));
	}

	public function postFormato1()
	{
		
		//Validation
		$rules = array(
			'user_id'					=> 'required|unique:f1',
			'ingles'					=> 'required',
			'deportivo'					=> 'required',
			'cultural'					=> 'required',
			'dificultad_ext_esc'		=> 'required',
			'trabaja'					=> 'required',
			'trabajo_horas'				=> 'required'
		);

		$messages = array(
			'user_id.unique'					=> 'Solo puede responder este formulario una vez.',
			'ingles.required'					=> 'Debe de responder si o no en el apartado de ingles.',
			'deportivo.required'				=> 'Debe de responder si o no en el apartado de deportivo.',
			'cultural.required'					=> 'Debe de responder si o no en el apartado de cultural.',
			'nivel.required'					=> 'Debe espesificar el campo :attribute para continuar.',
			'actividad_dep.required'			=> 'Debe espesificar el campo :attribute para continuar.',
			'actividad_cult.required'			=> 'Debe espesificar el campo :attribute para continuar.',
			'dificultad_ext_esc.required'		=> 'Debe responder a la pregunta ¿Tiene alguna dificultad con alguna de estas actividades? para continuar.',
			'trabaja.required'					=> 'Debe espesificar el campo :attribute para continuar.'
		);

		$validator = Validator::make(Input::all(), $rules, $messages);

		if ($validator->fails()) {
			return Redirect::to('formato/1')->withErrors($validator)->withInput();
		}

		$formato1 = new Formato1;
		$formato1->user_id 						= Input::get('user_id');
		$formato1->ingles 						= Input::get('ingles');
		$formato1->nivel 						= Input::get('nivel');
		$formato1->deportivo 					= Input::get('deportivo');
		$formato1->actividad_dep 				= Input::get('actividad_dep');
		$formato1->cultural 					= Input::get('cultural');
		$formato1->actividad_cult 				= Input::get('actividad_cult');
		$formato1->dificultad_ext_esc 			= Input::get('dificultad_ext_esc');
		$formato1->dificultad_ext_esc_texto 	= Input::get('dificultad_ext_esc_texto');
		$formato1->trabaja 						= Input::get('trabaja');
		$formato1->trabajo_horas 				= Input::get('trabajo_horas');
		$formato1->academicos 					= Input::get('academicos');
		$formato1->emocionales 					= Input::get('emocionales');
		$formato1->familiares 					= Input::get('familiares');
		$formato1->de_salud 					= Input::get('de_salud');
		$formato1->politicos 					= Input::get('politicos');
		$formato1->religiosos 					= Input::get('religiosos');
		$formato1->economicos 					= Input::get('economicos');
		$formato1->otro 						= Input::get('otro');
		$formato1->otro_problema 				= Input::get('otro_problema');
		$formato1->save();

		return Redirect::to('formatos');
	}

	public function getFormato2()
	{
		$user = Auth::user();
		//dd($user);
		return View::make('formatos.habitos', array(
			'user' => $user
			));
	}

	public function postFormato2()
	{
		$rules = array(
			'user_id'	=> 'required|unique:f2',
			'p1'			=> 'required',
			'p2'			=> 'required',
			'p3'			=> 'required',
			'p4'			=> 'required',
			'p5'			=> 'required',
			'p6'			=> 'required',
			'p7'			=> 'required',
			'p8'			=> 'required',
			'p9'			=> 'required',
			'p10'			=> 'required',
			'p11'			=> 'required',
			'p12'			=> 'required',
			'p13'			=> 'required',
			'p14'			=> 'required',
			'p15'			=> 'required',
			'p16'			=> 'required',
			'p17'			=> 'required',
			'p18'			=> 'required',
			'p19'			=> 'required',
			'p20'			=> 'required',
			'p21'			=> 'required',
			'p22'			=> 'required',
			'p23'			=> 'required',
			'p24'			=> 'required',
			'p25'			=> 'required',
			'p26'			=> 'required',
			'p27'			=> 'required',
			'p28'			=> 'required',
			'p29'			=> 'required',
			'p30'			=> 'required',
			'p31'			=> 'required',
			'p32'			=> 'required',
			'p33'			=> 'required',
			'p34'			=> 'required',
			'p35'			=> 'required',
			'p36'			=> 'required',
			'p37'			=> 'required',
			'p38'			=> 'required',
			'p39'			=> 'required',
			'p40'			=> 'required',
			'p41'			=> 'required',
			'p42'			=> 'required',
			'p43'			=> 'required',
			'p44'			=> 'required',
			'p45'			=> 'required',
			'p46'			=> 'required',
			'p47'			=> 'required',
			'p48'			=> 'required',
			'p49'			=> 'required',
			'p50'			=> 'required',
			'p51'			=> 'required',
			'p52'			=> 'required',
			'p53'			=> 'required',
			'p54'			=> 'required',
			'p55'			=> 'required',
			'p56'			=> 'required',
			'p57'			=> 'required',
			'p58'			=> 'required',
			'p59'			=> 'required',
			'p60'			=> 'required',
			'p61'			=> 'required',
			'p62'			=> 'required',
			'p63'			=> 'required',
			'p64'			=> 'required',
			'p65'			=> 'required',
			'p66'			=> 'required',
			'p67'			=> 'required',
			'p68'			=> 'required',
			'p69'			=> 'required',
			'p70'			=> 'required'
		);

		$messages = array(
			'user_id'		=> 'Solo puede responder este formulario una vez.',
			'p1.required'	=> 'Debe de responder la pregunta 1 para continuar.',
			'p2.required'	=> 'Debe de responder la pregunta 2 para continuar.',
			'p3.required'	=> 'Debe de responder la pregunta 3 para continuar.',
			'p4.required'	=> 'Debe de responder la pregunta 4 para continuar.',
			'p5.required'	=> 'Debe de responder la pregunta 5 para continuar.',
			'p6.required'	=> 'Debe de responder la pregunta 6 para continuar.',
			'p7.required'	=> 'Debe de responder la pregunta 7 para continuar.',
			'p8.required'	=> 'Debe de responder la pregunta 8 para continuar.',
			'p9.required'	=> 'Debe de responder la pregunta 9 para continuar.',
			'p10.required'	=> 'Debe de responder la pregunta 10 para continuar.',
			'p11.required'	=> 'Debe de responder la pregunta 11 para continuar.',
			'p12.required'	=> 'Debe de responder la pregunta 12 para continuar.',
			'p13.required'	=> 'Debe de responder la pregunta 13 para continuar.',
			'p14.required'	=> 'Debe de responder la pregunta 14 para continuar.',
			'p15.required'	=> 'Debe de responder la pregunta 15 para continuar.',
			'p16.required'	=> 'Debe de responder la pregunta 16 para continuar.',
			'p17.required'	=> 'Debe de responder la pregunta 17 para continuar.',
			'p18.required'	=> 'Debe de responder la pregunta 18 para continuar.',
			'p19.required'	=> 'Debe de responder la pregunta 19 para continuar.',
			'p20.required'	=> 'Debe de responder la pregunta 20 para continuar.',
			'p21.required'	=> 'Debe de responder la pregunta 21 para continuar.',
			'p22.required'	=> 'Debe de responder la pregunta 22 para continuar.',
			'p23.required'	=> 'Debe de responder la pregunta 23 para continuar.',
			'p24.required'	=> 'Debe de responder la pregunta 24 para continuar.',
			'p25.required'	=> 'Debe de responder la pregunta 25 para continuar.',
			'p26.required'	=> 'Debe de responder la pregunta 26 para continuar.',
			'p27.required'	=> 'Debe de responder la pregunta 27 para continuar.',
			'p28.required'	=> 'Debe de responder la pregunta 28 para continuar.',
			'p29.required'	=> 'Debe de responder la pregunta 29 para continuar.',
			'p30.required'	=> 'Debe de responder la pregunta 30 para continuar.',
			'p31.required'	=> 'Debe de responder la pregunta 31 para continuar.',
			'p32.required'	=> 'Debe de responder la pregunta 32 para continuar.',
			'p33.required'	=> 'Debe de responder la pregunta 33 para continuar.',
			'p34.required'	=> 'Debe de responder la pregunta 34 para continuar.',
			'p35.required'	=> 'Debe de responder la pregunta 35 para continuar.',
			'p36.required'	=> 'Debe de responder la pregunta 36 para continuar.',
			'p37.required'	=> 'Debe de responder la pregunta 37 para continuar.',
			'p38.required'	=> 'Debe de responder la pregunta 38 para continuar.',
			'p39.required'	=> 'Debe de responder la pregunta 39 para continuar.',
			'p40.required'	=> 'Debe de responder la pregunta 40 para continuar.',
			'p41.required'	=> 'Debe de responder la pregunta 41 para continuar.',
			'p42.required'	=> 'Debe de responder la pregunta 42 para continuar.',
			'p43.required'	=> 'Debe de responder la pregunta 43 para continuar.',
			'p44.required'	=> 'Debe de responder la pregunta 44 para continuar.',
			'p45.required'	=> 'Debe de responder la pregunta 45 para continuar.',
			'p46.required'	=> 'Debe de responder la pregunta 46 para continuar.',
			'p47.required'	=> 'Debe de responder la pregunta 47 para continuar.',
			'p48.required'	=> 'Debe de responder la pregunta 48 para continuar.',
			'p49.required'	=> 'Debe de responder la pregunta 49 para continuar.',
			'p50.required'	=> 'Debe de responder la pregunta 50 para continuar.',
			'p51.required'	=> 'Debe de responder la pregunta 51 para continuar.',
			'p52.required'	=> 'Debe de responder la pregunta 52 para continuar.',
			'p53.required'	=> 'Debe de responder la pregunta 53 para continuar.',
			'p54.required'	=> 'Debe de responder la pregunta 54 para continuar.',
			'p55.required'	=> 'Debe de responder la pregunta 55 para continuar.',
			'p56.required'	=> 'Debe de responder la pregunta 56 para continuar.',
			'p57.required'	=> 'Debe de responder la pregunta 57 para continuar.',
			'p58.required'	=> 'Debe de responder la pregunta 58 para continuar.',
			'p59.required'	=> 'Debe de responder la pregunta 59 para continuar.',
			'p60.required'	=> 'Debe de responder la pregunta 60 para continuar.',
			'p61.required'	=> 'Debe de responder la pregunta 61 para continuar.',
			'p62.required'	=> 'Debe de responder la pregunta 62 para continuar.',
			'p63.required'	=> 'Debe de responder la pregunta 63 para continuar.',
			'p64.required'	=> 'Debe de responder la pregunta 64 para continuar.',
			'p65.required'	=> 'Debe de responder la pregunta 65 para continuar.',
			'p66.required'	=> 'Debe de responder la pregunta 66 para continuar.',
			'p67.required'	=> 'Debe de responder la pregunta 67 para continuar.',
			'p68.required'	=> 'Debe de responder la pregunta 68 para continuar.',
			'p69.required'	=> 'Debe de responder la pregunta 69 para continuar.',
			'p70.required'	=> 'Debe de responder la pregunta 70 para continuar.'
		);	


		$validator = Validator::make(Input::all(), $rules, $messages);

		if ($validator->fails()) {
			return Redirect::to('formato/habitos_estudio')->withErrors($validator)->withInput();
		}

		$formato2 = new Formato2;
		$formato2->user_id	= Input::get('user_id');
		$formato2->p1		= Input::get('p1');
		$formato2->p2		= Input::get('p2');
		$formato2->p3		= Input::get('p3');
		$formato2->p4		= Input::get('p4');
		$formato2->p5		= Input::get('p5');
		$formato2->p6		= Input::get('p6');
		$formato2->p7		= Input::get('p7');
		$formato2->p8		= Input::get('p8');
		$formato2->p9		= Input::get('p9');
		$formato2->p10		= Input::get('p10');
		$formato2->p11		= Input::get('p11');
		$formato2->p12		= Input::get('p12');
		$formato2->p13		= Input::get('p13');
		$formato2->p14		= Input::get('p14');
		$formato2->p15		= Input::get('p15');
		$formato2->p16		= Input::get('p16');
		$formato2->p17		= Input::get('p17');
		$formato2->p18		= Input::get('p18');
		$formato2->p19		= Input::get('p19');
		$formato2->p20		= Input::get('p20');
		$formato2->p21		= Input::get('p21');
		$formato2->p22		= Input::get('p22');
		$formato2->p23		= Input::get('p23');
		$formato2->p24		= Input::get('p24');
		$formato2->p25		= Input::get('p25');
		$formato2->p26		= Input::get('p26');
		$formato2->p27		= Input::get('p27');
		$formato2->p28		= Input::get('p28');
		$formato2->p29		= Input::get('p29');
		$formato2->p30		= Input::get('p30');
		$formato2->p31		= Input::get('p31');
		$formato2->p32		= Input::get('p32');
		$formato2->p33		= Input::get('p33');
		$formato2->p34		= Input::get('p34');
		$formato2->p35		= Input::get('p35');
		$formato2->p36		= Input::get('p36');
		$formato2->p37		= Input::get('p37');
		$formato2->p38		= Input::get('p38');
		$formato2->p39		= Input::get('p39');
		$formato2->p40		= Input::get('p40');
		$formato2->p41		= Input::get('p41');
		$formato2->p42		= Input::get('p42');
		$formato2->p43		= Input::get('p43');
		$formato2->p44		= Input::get('p44');
		$formato2->p45		= Input::get('p45');
		$formato2->p46		= Input::get('p46');
		$formato2->p47		= Input::get('p47');
		$formato2->p48		= Input::get('p48');
		$formato2->p49		= Input::get('p49');
		$formato2->p50		= Input::get('p50');
		$formato2->p51		= Input::get('p51');
		$formato2->p52		= Input::get('p52');
		$formato2->p53		= Input::get('p53');
		$formato2->p54		= Input::get('p54');
		$formato2->p55		= Input::get('p55');
		$formato2->p56		= Input::get('p56');
		$formato2->p57		= Input::get('p57');
		$formato2->p58		= Input::get('p58');
		$formato2->p59		= Input::get('p59');
		$formato2->p60		= Input::get('p60');
		$formato2->p61		= Input::get('p61');
		$formato2->p62		= Input::get('p62');
		$formato2->p63		= Input::get('p63');
		$formato2->p64		= Input::get('p64');
		$formato2->p65		= Input::get('p65');
		$formato2->p66		= Input::get('p66');
		$formato2->p67		= Input::get('p67');
		$formato2->p68		= Input::get('p68');
		$formato2->p69		= Input::get('p69');
		$formato2->p70		= Input::get('p70');
		$formato2->sumaDT=$formato2->p1+$formato2->p8+$formato2->p15+$formato2->p22+$formato2->p29+
				$formato2->p36+$formato2->p43+$formato2->p50+$formato2->p57+$formato2->p64;

		$formato2->sumaME=$formato2->p2+$formato2->p9+$formato2->p16+$formato2->p23+$formato2->p30+
				$formato2->p37+$formato2->p44+$formato2->p51+$formato2->p58+$formato2->p65;

		$formato2->sumaDE=$formato2->p3+$formato2->p10+$formato2->p17+$formato2->p24+$formato2->p31+
				$formato2->p38+$formato2->p45+$formato2->p52+$formato2->p59+$formato2->p66;

		$formato2->sumaNC=$formato2->p4+$formato2->p11+$formato2->p18+$formato2->p25+$formato2->p32+
				$formato2->p39+$formato2->p46+$formato2->p53+$formato2->p60+$formato2->p67;

		$formato2->sumaOL=$formato2->p5+$formato2->p12+$formato2->p19+$formato2->p26+$formato2->p33+
				$formato2->p40+$formato2->p47+$formato2->p54+$formato2->p61+$formato2->p68;

		$formato2->sumaPE=$formato2->p6+$formato2->p13+$formato2->p20+$formato2->p27+$formato2->p34+
				$formato2->p41+$formato2->p48+$formato2->p55+$formato2->p62+$formato2->p69;

		$formato2->sumaAC=$formato2->p7+$formato2->p14+$formato2->p21+$formato2->p28+$formato2->p35+
				$formato2->p42+$formato2->p49+$formato2->p56+$formato2->p63+$formato2->p70;
				
		$formato2->save();

		return Redirect::to('formatos');
	}
}