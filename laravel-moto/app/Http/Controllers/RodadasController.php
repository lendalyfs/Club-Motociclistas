<?php

namespace App\Http\Controllers;

use App\Events;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Debug\Exception\FatalErrorException;
use App\Http\Requests;
use PDOException;

class RodadasController extends Controller
{
    public function create(Request $request) {
        $response = [];
        $validator = Validator::make($request->all(), [
            'origen' => 'required',
            'destino' => 'required',
            'fecha_salida' => 'required',
            'fecha_regreso' => 'required'
        ]);

        try {
            Events::create([
                'origen' => $request->get('origen'),
                'destino' => $request->get('destino'),
                'fecha_salida' => $request->get('fecha_salida'),
                'fecha_regreso' => $request->get('fecha_regreso'),
                'descripcion' => $request->get('descripcion'),
                'foto' => $request->get('foto'),
            ]);

            $response['message'] = "Exito";
            $response['status'] = 1;

            return response()->json($response, 201);
        } catch (QueryException $e) {
            $response['message'] = $e->getMessage();
            $response['status'] = 0;
            return response()->json($response, 400);
        } catch (PDOException $e) {
            $response['message'] = $e->getMessage();
            $response['status'] = 0;
            return response()->json($response, 400);
        } catch (FatalErrorException $e) {
            $response['message'] = $e->getMessage();
            $response['status'] = 0;
            return response()->json($response, 400);
        } catch (Exception $e) {
            $response['message'] = $e->getMessage();
            $response['status'] = 0;
            return response()->json($response, 400);
        }
    }
}
