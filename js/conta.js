function Logo()
{
  window.location.replace("index.html")
};

function senha()
{
  window.location.replace("senha.php")
};

function ValidarCPF()
    {
        //ACESSE O SITE regex101.com
        expressao = /[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/g;
        texto = cpf.value;
        if (texto.length==3)
        {
            cpf.value = texto + ".";
        }
        if (texto.length==7)
        {
            cpf.value = texto + ".";
        }
        if (texto.length==11)
        {
            cpf.value = texto + "-";
        }
        resposta = expressao.test(texto);
    }
