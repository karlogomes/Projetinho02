﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Projetinho
{
    class Program
    {
        static void Main(string[] args)
        {


            Blusas blu = new Blusas();
            blu.nome = "Blusa";
            blu.descricao = "Blusa preta com touca";
            blu.tecido = "Lona";
            blu.tamanho = "P/M/G";
            blu.cadastrarMarca ("Adidas");
            blu.cadastrarPreco(100);

            Calcas cal = new Calcas();
            cal.nome = "Calça";
            cal.descricao = "Calça azul escuro";
            cal.tecido = "Jeans";
            cal.tamanho = "P/M/G";
            cal.cadastrarMarca ("Adidas");
            cal.cadastrarPreco(180.00);

            Camisas cam = new Camisas();
            cam.nome = "Camisa";
            cam.descricao = "Camisa Preta";
            cam.tecido = "Algodão";
            cam.tamanho = "P/M/G";
            cam.cadastrarMarca ("Nike");
            cam.cadastrarPreco (100.00);

            Tenis ten = new Tenis();
            ten.nome = "Air Max 270";
            ten.descricao = "Air Max Colorido (Azul verde e branco)";
            ten.tamanhot = 40;
            ten.cadastrarMarca("Nike");
            ten.cadastrarPreco(500);


     

            Console.WriteLine(ten.tamanhot);
            Console.WriteLine("\n\n\\");
            Console.ReadKey();



            

        }
    }
}
