using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Projetinho
{
    class Blusas : Loja
    {
        public string descricao;
        public string tecido;



        public void mostrarLoja()
        {
            Console.WriteLine("Nome:{0}", nome);
            Console.WriteLine("Nome:{0}", descricao);
            Console.WriteLine("Nome:{0}", tecido);
            Console.WriteLine("Nome:{0}", tamanho);
            Console.WriteLine("Nome:{0}", marca);
            Console.WriteLine("Nome:{0}", preco);
        }



    }
}
