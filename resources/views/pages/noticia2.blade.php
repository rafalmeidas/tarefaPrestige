@extends('templates.welcome')
  
@section('content')
    <div class="container-sm">
        <div class="row">
            <div class="col-sm-12">
                <p class="data" style="font-size: 10pt !important; margin-top: 30px !important; text-align: right !important;"><b>Atualizado</b><br>01/02/2018 11h27</p>
                <h1>Saiba mais como o python surgiu e qual o seu cenário atual</h1>
                <img class="image" src="https://mindxmaster.s3.amazonaws.com/wp-content/uploads/2019/08/1_python-1-750x422.jpg" alt="Card image cap">
                <p>Python foi criado no final dos anos oitenta(1989) por Guido van Rossum no Centro de Matemática e Tecnológia da Informação (CWI, Centrum Wiskunde e Informatica), na Holanda, como sucessor da linguagem de programação ABC, capaz de lidar com exceções e interagir com o sistema operacional Amoeba.</p>
                <p>O nome da língua vem do gosto de seu criador pelos humoristas britânicos Monty Python. Van Rossum é o principal autor de Python, e seu papel central contínuo na decisão da direção de Python é reconhecido, referindo-se a ele como Ditador de Vida Benevolente (em inglês: Benevolent Dictator for Life, BDFL).</p>
                <p>Python é uma linguagem de programação interpretada cuja filosofia enfatiza uma sintaxe favorecendo um código mais legível, além de ser “free”.</p>
                <h2>Cenário Atual do Python</h2>
                <p>Atualmente, é gerenciada pela Python Software Foundation. Possui uma licença de código aberto, chamada Python Software Foundation License, que é compatível com a GNU General Public License a partir da versão 2.1.1 e incompatível em certas versões anteriores.</p>
                <p>É uma linguagem de programação multi-paradigma, pois suporta orientação de objeto, programação imperativa e, em menor escala, programação funcional.</p>
                <p>É uma linguagem interpretada, têm seus códigos fontes transformados em uma linguagem intermediária (específica de cada linguagem), que será interpretada pela máquina virtual da linguagem quando o programa for executado.</p>
                <p class="texto-publicidade">CONTINUA DEPOIS DA PUBLICIDADE</p>
                <a href="https://app.vulpi.com.br/dev?utm_source=blog&utm_medium=eu_sou_dev" target="_blank"><img class="image image-publicidade" src="https://i.ibb.co/fF8FZ6c/publicidade2.png" alt="publicidade2"></a>
                <p>Usa tipagem dinâmica e forte, isso, significa que o próprio interpretador do Python infere o tipo dos dados que uma variável recebe, sem a necessidade que o usuário da linguagem diga de que tipo determinada variável é.</p>
                <p>Hoje existem inúmeras linguagens no mercado que são fortemente tipadas, referenciando especificamente o Python para explicar a questão: Tipagem forte significa que o interpretador do Python avalia as expressões (evaluate) e não faz coerções automáticas entre tipos não compatíveis (conversões de valores), ou seja: Quando recebemos uma exception chamada TypeError ou seja, ao fazer operações com tipos incompatíveis, o Python não converte automaticamente esses tipos pra você, ele vai dar erro! Isso é bom, pois assim você terá a certeza que o seu resultado é mais consistente.</p>
                <p>E é multiplataforma, funcionando igualmente bem em plataformas Windows, GNULinux, UNIX e Mac/Apple, assim como outras, indo desde supercomputadores até telefones celulares. Pode ser usado para desenvolver pequenas aplicações e protótipos rápidos, mas escala bem para permitir o desenvolvimento de programas robustos. Vem com um conjunto de ferramentas para Interface Gráfica do Usuário (GUI) poderoso e fácil de usar, bibliotecas para programação web, e muito mais.</p>
                <p>E, o melhor de tudo é grátis. Python foi feita tendo com base na linguagem ABC, parte da sintaxe derivada do C, compreensão de listas, funções anônimas e função map derivadas do Linguagem Haskell.</p>
                <p>Os iteradores são baseados na Icon, tratamentos de exceção e módulos da Modula-3, expressões regulares de Perl. Em 1991, Guido publicou o código (nomeado versão 0.9.0) no grupo de discussão alt.sources(newsgroup).</p>
                <p>Nessa versão, adicionadas classes com herança, tratamento de exceções, funções e os tipos de dados nativos: list, dict, str, e assim por diante. Como também um sistema de módulos emprestado do Modula-3. O modelo de exceções também lembrava muito o do Modula-3, com a adição da opção else. Em 1994, é formado o principal grupo de discussão do Python, comp.lang.python.</p>
            </div>
        </div>
        <div>
            <a href="https://eusoudev.com.br/python-como-surgiu/" target="_blank"><p class="fonte">Fonte: https://eusoudev.com.br/python-como-surgiu/</p></a>
        </div>
    </div>
@endsection
