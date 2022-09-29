<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
   //return view('welcome');});

// RUTAS DEL FRONTEND
   Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

   Route::get('/thema', [App\Http\Controllers\themaController::class, 'thema'])->name('thema');

/* ESTA NUEVA RUTA ES PARA ENVIAR MAIL DE FORMULARIO DE CONTACTO*/
Route::get('/contactanos', [App\Http\Controllers\ContaactoController::class, 'index'])->name('contactanos.index');
Route::post('/contactanos', [App\Http\Controllers\ContaactoController::class, 'store'])->name('contactanos.store');




   //Rutas de Nosotros

   Route::get('/nuestra-historia', [App\Http\Controllers\NuestraController::class, 'index'])->name('nuestra-historia');//ok
   Route::get('/nuestro-sello', [App\Http\Controllers\SelloController::class, 'index'])->name('nuestro-sello');//ok
   Route::get('/nuestro-equipo', [App\Http\Controllers\EquipoController::class, 'index'])->name('nuestro-equipo');//ok
   Route::get('/vision-mision', [App\Http\Controllers\VisionController::class, 'index'])->name('vision-mision');//ok
   Route::get('/centro-de-padres', [App\Http\Controllers\PadreController::class, 'index'])->name('centro-de-padres');//ok
   Route::get('/centro-de-alumnos', [App\Http\Controllers\AlumnoController::class, 'index'])->name('centro-de-alumnos');//ok
   Route::get('/profesores', [App\Http\Controllers\ProfesorController::class, 'index'])->name('profesores');//ok
   Route::get('/asistentes', [App\Http\Controllers\AsistenteController::class, 'index'])->name('asistentes');//ok
   Route::get('/modelo-pionero', [App\Http\Controllers\PioneroController::class, 'index'])->name('modelo-pionero');//ok
   Route::get('/descargas', [App\Http\Controllers\DescargasController::class, 'index'])->name('descargas');//ok

//oferta educativa
   Route::get('/cientifico-humanista', [App\Http\Controllers\HumanistaController::class, 'index'])->name('cientifico-humanista');//ok
   Route::get('/contrucciones-metalicas', [App\Http\Controllers\ConstruccioneController::class, 'index'])->name('contrucciones-metalicas');//ok
   Route::get('/electricidad', [App\Http\Controllers\ElectricidadController::class, 'index'])->name('electricidad');//ok
   Route::get('/quimica-industrial', [App\Http\Controllers\QuimicaController::class, 'index'])->name('quimica-industrial');
   //Noticias
    Route::get('/noticias', [App\Http\Controllers\NoticiaController::class, 'noticias'])->name('noticias');
    Route::get('/single/{noteid}', [App\Http\Controllers\NotisingleController::class, 'single'])->name('single');
    //Galeria de imagnes
    Route::get('/galeria-fotografica', [App\Http\Controllers\GaleriafotoController::class, 'index'])->name('galeria-fotografica');
    //Contacto
    Route::get('/contactanos', [App\Http\Controllers\ContaactoController::class, 'index'])->name('contactanos.index');
Route::post('/contactanos', [App\Http\Controllers\ContaactoController::class, 'store'])->name('contactanos.store');

//Rutas Salas de clases


    Route::get('/santa-isabel', function () {

return view('santa-isabel');});


    Route::get('/el-nilhue', function () {

    return view('el-nilhue');});


    Route::get('/los-cerrillos', function () {

        return view('los-cerrillos');});


    Route::get('/santa-margarita', function () {

            return view('santa-margarita');});


    Route::get('/san-jose', function () {

            return view('san-jose');});

    Route::get('/el-seco', function () {

            return view('el-seco');});


            Route::get('/los-corrales', function () {

                return view('los-corrales');});

                Route::get('/las-varillas', function () {

                    return view('las-varillas');});

                    Route::get('/el-cobre', function () {

                        return view('el-cobre');});

                        Route::get('/las-compuertas', function () {

                            return view('las-compuertas');});

                            Route::get('/el-quebrachal', function () {

                                return view('el-quebrachal');});

                                Route::get('/catemu-centro', function () {

                                    return view('catemu-centro');});

                                    Route::get('/chagres', function () {

                                        return view('chagres');});

                                        Route::get('/la-colonia', function () {

                                            return view('la-colonia');});

                                            Route::get('/santa-rosa', function () {

                                                return view('santa-rosa ')   ;});



// RUTAS DEL BACKEND
   Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    /**rutas administrativas  */
   /*rutas para crear*/
   /**rutas de noticias  */

      Route::get('/admin/new/noticia', [App\Http\Controllers\Admin\NoticiasController::class, 'index'])->name('noticia');
      Route::get('/admin/info/info', [App\Http\Controllers\Admin\SeccioninfoController::class, 'index'])->name('info');
      Route::get('/admin/link/link', [App\Http\Controllers\Admin\LinkController::class, 'index'])->name('link');
      Route::get('/admin/equipo/equipo', [App\Http\Controllers\Admin\EquipoController::class, 'index'])->name('equipo');
      Route::get('/admin/especialidad/especialidad', [App\Http\Controllers\Admin\EspecialidadController::class, 'index'])->name('especialidad');
      Route::get('/admin/exalumno/exalumno', [App\Http\Controllers\Admin\ExalumnosController::class, 'index'])->name('exalumno');
      Route::get('/admin/galeria/galeria', [App\Http\Controllers\Admin\GaleriaimgController::class, 'index'])->name('galeria');
      Route::get('/admin/foto/foto', [App\Http\Controllers\Admin\FotoController::class, 'index'])->name('foto');
      Route::get('/admin/documento/documento', [App\Http\Controllers\Admin\DocController::class, 'index'])->name('documento');
      Route::get('/admin/nosotro/nosotro', [App\Http\Controllers\Admin\NosotroController::class, 'index'])->name('nosotro');

      //RUTA EDIT PANEL ADMINISTRATIVO
      Route::get('/admin/new/noticia/{parnetid}/edit', [App\Http\Controllers\Admin\NoticiasController::class, 'edit'])->name('noticia.edit');
      Route::get('/admin/info/info/{infoid}/edit', [App\Http\Controllers\Admin\SeccioninfoController::class, 'edit'])->name('info.edit');
      Route::get('/admin/link/link/{linkid}/edit', [App\Http\Controllers\Admin\LinkController::class, 'edit'])->name('link.edit');
      Route::get('/admin/equipo/equipo/{equipoid}/edit', [App\Http\Controllers\Admin\EquipoController::class, 'edit'])->name('equipo.edit');
      Route::get('/admin/especialidad/especialidad/{id}/edit', [App\Http\Controllers\Admin\EspecialidadController::class, 'edit'])->name('especialidad.edit');
      Route::get('/admin/exalumno/exalumno/{id}/edit', [App\Http\Controllers\Admin\ExalumnosController::class, 'edit'])->name('exalumno.edit');
      Route::get('/admin/galeria/galeria/{id}/edit', [App\Http\Controllers\Admin\GaleriaimgController::class, 'edit'])->name('galeria.edit');
      Route::get('/admin/foto/foto/{id}/edit', [App\Http\Controllers\Admin\FotoController::class, 'edit'])->name('foto.edit');
      Route::get('/admin/documento/documento/{id}/edit', [App\Http\Controllers\Admin\DocController::class, 'edit'])->name('documento.edit');
      Route::get('/admin/nosotro/nosotro/{id}/edit', [App\Http\Controllers\Admin\NosotroController::class, 'edit'])->name('nosotro.edit');



      //RUTA INSERTAR PANEL ADMINISTRATIVO
      Route::post('/admin/new/noticia', [App\Http\Controllers\Admin\NoticiasController::class, 'crear'])->name('noticia.crear');
      Route::post('/admin/info/info', [App\Http\Controllers\Admin\SeccioninfoController::class, 'crear'])->name('info.crear');
      Route::post('/admin/link/link', [App\Http\Controllers\Admin\LinkController::class, 'crear'])->name('link.crear');
      Route::post('/admin/equipo/equipo', [App\Http\Controllers\Admin\EquipoController::class, 'crear'])->name('equipo.crear');
      Route::post('/admin/especialidad/especialidad', [App\Http\Controllers\Admin\EspecialidadController::class, 'crear'])->name('especialidad.crear');
      Route::post('/admin/exalumno/exalumno', [App\Http\Controllers\Admin\ExalumnosController::class, 'crear'])->name('exalumno.crear');
      Route::post('/admin/galeria/galeria', [App\Http\Controllers\Admin\GaleriaimgController::class, 'crear'])->name('galeria.crear');
      Route::post('/admin/foto/foto', [App\Http\Controllers\Admin\FotoController::class, 'crear'])->name('foto.crear');
      Route::post('/admin/documento/documento', [App\Http\Controllers\Admin\DocController::class, 'crear'])->name('documento.crear');
      Route::post('/admin/nosotro/nosotro', [App\Http\Controllers\Admin\NosotroController::class, 'crear'])->name('nosotro.crear');




      //RUTA ACTUALIZAR PANEL ADMINISTRATIVO

      Route::post('/admin/new/noticia/{parnetid}/update', [App\Http\Controllers\Admin\NoticiasController::class, 'update'])->name('noticia.update');
      Route::post('/admin/info/info/{infoid}/update', [App\Http\Controllers\Admin\SeccioninfoController::class, 'update'])->name('info.update');
      Route::post('/admin/link/link/{linkid}/update', [App\Http\Controllers\Admin\LinkController::class, 'update'])->name('link.update');
      Route::post('/admin/equipo/equipo/{equipoid}/update', [App\Http\Controllers\Admin\EquipoController::class, 'update'])->name('equipo.update');
      Route::post('/admin/especialidad/especialidad/{id}/update', [App\Http\Controllers\Admin\EspecialidadController::class, 'update'])->name('especialidad.update');
      Route::post('/admin/exalumno/exalumno/{id}/update', [App\Http\Controllers\Admin\ExalumnosController::class, 'update'])->name('exalumno.update');
      Route::post('/admin/galeria/galeria/{id}/update', [App\Http\Controllers\Admin\GaleriaimgController::class, 'update'])->name('galeria.update');
      Route::post('/admin/foto/foto/{id}/update', [App\Http\Controllers\Admin\FotoController::class, 'update'])->name('foto.update');
      Route::post('/admin/documento/documento/{id}/update', [App\Http\Controllers\Admin\DocController::class, 'update'])->name('documento.update');
      Route::post('/admin/nosotro/nosotro/{id}/update', [App\Http\Controllers\Admin\NosotroController::class, 'update'])->name('nosotro.update');




      //RUTAS DELETE PANEL ADMINISTRATIVO
      Route::delete('/admin/new/noticia/{parnetid}/delete', [App\Http\Controllers\Admin\NoticiasController::class, 'delete'])->name('noticia.delete');
      Route::delete('/admin/equipo/equipo/{equipoid}/delete', [App\Http\Controllers\Admin\EquipoCiasController::class, 'delete'])->name('equipo.delete');
      Route::delete('/admin/especialidad/especialidad/{id}/delete', [App\Http\Controllers\Admin\EspecialidadController::class, 'delete'])->name('especialidad.delete');
      Route::delete('/admin/exalumno/exalumno/{id}/delete', [App\Http\Controllers\Admin\ExalumnosController::class, 'delete'])->name('exalumno.delete');
      Route::delete('/admin/documento/documento/{id}/delete', [App\Http\Controllers\Admin\DocsController::class, 'delete'])->name('documento.delete');
      Route::delete('/admin/foto/foto/{id}/delete', [App\Http\Controllers\Admin\FotoController::class, 'delete'])->name('foto.delete');
      Route::delete('/admin/galeria/galeria/{id}/delete', [App\Http\Controllers\Admin\GaleriaimgController::class, 'delete'])->name('galeria.delete');






