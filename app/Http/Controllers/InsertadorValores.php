<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertadorValores extends Controller
{
    public function insertar(){

    $nombre = "comenzador.bat";
// C:\Users\El JEFE\Desktop\DESARROLLO\blueprints\rust\target\x86_64-pc-windows-msvc\debug
// C:\Users\El JEFE\Desktop\DESARROLLO\blueprints\rust\target\x86_64-pc-windows-msvc\release
    // Detecta el sistema operativo
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        // Windows
        $ruta_windows = "C:\\Users\\" . get_current_user() . "\\Desktop\\DESARROLLO\\blueprints\\rust\\target\\x86_64-pc-windows-msvc\\release\\$nombre";
        $ruta_ejecutable = $ruta_windows;
    } else {
        // Linux
        $ruta_linux = "/home/" . get_current_user() . "/Desktop/saludo";
        $ruta_ejecutable = $ruta_linux;
    }

    // Verifica si el ejecutable existe
    if (file_exists($ruta_ejecutable)) {
        $existe =  true;
        // $salida = shell_exec(escapeshellarg($ruta_ejecutable) . " " . escapeshellarg($nombre));
        // echo $salida;
    } else {
        $existe =  false;
       // echo "Error: El ejecutable no se encuentra en la ruta especificada: " . $ruta_ejecutable;
    }

    if ($existe) {
        exec("C:\laragon\www\pltfrm_laravel\storage\bin\procesos\src\cargo run", $respuesta, $codigo_resultado);
       // $salida = shell_exec(escapeshellarg($ruta_ejecutable));
    }




    /*
        // exec("c:\abc.exe", $resultado);
        // exec("C:\Users\El JEFE\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\System Tools\cmd.exe");
        // $answer = shell_exec("C:\Users\El JEFE\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\System Tools\cmd.exe dir");
        // $answer = shell_exec("C:\laragon\www\pltfrm_laravel\storage\bin\procesos\src\main.rs");

       // exec('"C:\Users\El JEFE\Desktop\DESARROLLO\blueprints\rust\target\release\insertador.exe"', $answer, $result_code);
        // exec('"C:\Users\El JEFE\Desktop\DESARROLLO\blueprints\rust\target\x86_64-pc-windows-msvc\debug\rust.exe"', $answer, $result_code);
        exec("C:\\laragon\\www\\pltfrm_laravel\\storage\\bin\\procesos\\target\\x86_64-pc-windows-msvc\\debug\\procesos.exe", $answer, $result_code);

        // system('"C:\\Users\\El JEFE\\Desktop\\DESARROLLO\\blueprints\\rust\\target\\x86_64-pc-windows-msvc\\debug\\rust.exe"', $answer);
        // exec('"H:\soporteCDMX\Migracion_8_julio_2019\scaner\scaner_ceda.exe"', $answer, $result_code);
        // dump( $answer );



        */
        return  response()->json([
            "salida" => $respuesta,
            "codigo" => $codigo_resultado,
            "usuario" => get_current_user(),
            "ruta" => $ruta_windows,
            "existe" => $existe,
            "rutaEjecutable" => $ruta_ejecutable,
            "nombre" => $nombre
            
        ]);
    }
}
