using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Projetinho
{
    class Tenis : Loja
    {
        public string nome;
        public string descricao;
        public int tamanhot;


        public void mostrarLoja()
        {
            Console.WriteLine("Nome:{0}", nome);
            Console.WriteLine("Nome:{0}", descricao);
            Console.WriteLine("Nome:{0}", tecido);
            Console.WriteLine("Nome:{0}", tamanhot);
            Console.WriteLine("Nome:{0}", marca);
            Console.WriteLine("Nome:{0}", preco);
        }
    }
}   
