<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AskaryController extends Controller
{
    public function pricipal(){
        echo ("<center>Zoologico</center>");
        echo("<br><br>");
        echo ("<center><img src='https://img.freepik.com/vector-gratis/animales-zoologico-fondo-naturaleza-salvaje_1308-44197.jpg'></center>");
        echo("<br><br>");
        echo("Elige un Animal:");
        echo("<br><br>");
        echo("<a href='http://127.0.0.1:8000/zoo/raton'>Raton</a>");
        echo("<br><br>");
        echo("<a href='http://127.0.0.1:8000/zoo/chivo'>Chivo</a>");
        echo("<br><br>");


        echo("<a href='http://127.0.0.1:8000/zoo/perro'>Perro</a>");
    }
    public function raton(){
        echo ("Eligisste un raton:");
        echo("<br><br>");
        echo("<img src='https://comodibujar.club/wp-content/uploads/2019/09/raton-kawaii.jpg'>");
        echo("<br><br>");
        echo("<a href='http://127.0.0.1:8000/zoo'>Regresar Principal</a>");
    }
    public function chivo(){
        echo ("Eligisste un chivo:");
        echo("<br><br>");
        echo ("<img src='https://st.depositphotos.com/1016676/1626/i/600/depositphotos_16261499-stock-photo-goat.jpg'>");
        echo("<br><br>");
        echo("<a href='http://127.0.0.1:8000/zoo'>Regresar Principal</a>");

    }
    public function perro(){
        echo ("Eligisste un perro:");
        echo("<br><br>");
        echo("<img src='https://www.caracteristicas.co/wp-content/uploads/2017/02/perro-3-e1561679226953.jpg'>");
        echo("<br><br>");
        echo("<a href='http://127.0.0.1:8000/zoo'>Regresar Principal</a>");
    }
}
