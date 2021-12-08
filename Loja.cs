using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Projetinho
{
    class Loja

    {
        public string nome;
        public string descricao;
        public string tecido;
        public string tamanho;
        public string marca;
        protected double preco;


        public void mostrarLoja()
        {
            Console.WriteLine("Nome:{0}", nome);
            Console.WriteLine("Nome:{0}", descricao);
            Console.WriteLine("Nome:{0}", tecido);
            Console.WriteLine("Nome:{0}", tamanho);
            Console.WriteLine("Nome:{0}", marca);
            Console.WriteLine("Nome:{0}", preco);
        }


        public void cadastrarNome(string nome)
        {

        }

        public void cadastrarDescricao(string descricao)
        {

        }

        public void cadastrarTecido(string tecido)
        {
   
        }


        public void cadastrarTamanho(string tamanho)
        {

        }


        public void cadastrarMarca(string marca)
        {

        }


        public void cadastrarPreco(double valor)
        {
            if (valor < 0)
            {
                preco = 0;
            }
            else
            {
                preco = valor;
            }
         }


    }
} 