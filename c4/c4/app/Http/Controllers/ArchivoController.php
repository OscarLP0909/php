<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class ArchivoController extends Controller
{

    public function show()
    {
        $archivos = \Storage::disk('public')->files('archivos'); // obtiene la lista de archivos en storage/app/public/archivos/
        return view('archivo.index', compact('archivos')); // pasa la lista de archivos a la vista
    }
    public function subir(Request $request)
    {
        $request->validate([
            'archivo' => 'required|max:5120|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt,zip,rar', // valida que se haya subido un archivo y que sea de un tipo permitido
        ], [
            'archivo.required' => 'El campo archivo es obligatorio.',
            'archivo.max' => 'El archivo no debe superar los 5 MB.',
            'archivo.mimes' => 'El archivo debe ser de tipo PDF, DOC, DOCX, XLS, XLSX, PPT, PPTX, TXT, ZIP o RAR.',
        ]);
        $archivo = $request->file('archivo'); // obtiene el archivo subido
        $nombreArchivo = $archivo->getClientOriginalName(); // obtiene el nombre original del archivo
        Storage::disk('public')->put('archivos/' . $nombreArchivo, file_get_contents($archivo));
        return redirect()->route('archivo.index')->with('success', 'Archivo subido correctamente');
    }

    public function descargar($archivo)
    {
        $archivos = \Storage::disk('public')->files('archivos'); // obtiene la lista de archivos en storage/app/public/archivos/

        if (in_array('archivos/' . $archivo, $archivos)) { // verifica si el archivo existe en la lista

            return \Storage::disk('public')->download('archivos/' . $archivo); // descarga el archivo
            
        } else {
            return redirect()->route('archivo.index')->with('error', 'Archivo no encontrado');
        }

    }

}
