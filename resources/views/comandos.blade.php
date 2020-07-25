<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="../public/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Star Homepage</title>
    <meta charset = "UTF-8"/>
</head>

<body>
    <div class="row">
        <div class="container-fluid">
            <nav class="navbar navbar-dark" id="supbar">
                <div class="navbar-brand">
                    <img src="img/badge.png" width=30px height=30px class="d-inline-block align-top" alt="" loading="lazy" style="margin-left:10px">
                    <button data-trigger="#leftpanel" class="btn btn-primary" type="button" id = "showopt"> Star ✨ </button>
                </div>
                
                <b class="screen-overlay"></b>

                <!-- offcanvas panel -->
                <aside class="offcanvas" id="leftpanel">
                    <div class="row" style = "margin-left:10px">
                    <div class="header" style="margin-top:25px; display:inline-block">
                        <img src="img/badge.png" width=30px height=30px class="d-inline-block align-top" alt="" loading="lazy">
                        <span style="margin-top:50px; padding-left:10px">Star ✨</span>
                    </div>
                    
                    <button class="btn btn-outline-danger btn-close" style = "margin-top:20px; margin-left: 100px"> &times Close </button>
                    </div>
                    <hr style="background-color: #fff">
                    <div class="row" style = "padding-left:15px">
                        <nav class="list-group list-group-flush" id="sidepanel">
                            <a href="/StarWeb/public" class="list-group-item">Home</a>
                            <a href="comandos" class="list-group-item">Comandos</a>
                            <a href="servidores" class="list-group-item">Servidores</a>
                        </nav>
                    </div>
                   
                </aside>

                </div>
            </nav>
        </div>
    </div>

    <section id ="listcmd">
        <div class="container justify-content-center mt-4" id="antiraid">
        <img src="img/Shield.png" alt="">
            <h3> ❱ Anti-Raiding:</h3>
            <p>
                s.antiraid - abra o menu de configurações do anti-raiding.
            </p>
        </div>

        <div class="container justify-content-center mt-4" id="defesas">
        <img src="img/shield.png" alt="defesasimg">
            <h3> ❱ Defesas:</h3>
            <p>
                s.defesa - abra o menu com todos os meus modulos de defesa para configura-los.<br/>
                Anti-Fake: Configuravel em s.defesa.<br/>
                Anti-Bot: Configuravel em s.defesa.<br/>
                Anti-Invite: Configuravel em s.defesa.<br/>
            </p>
        </div>

        <div class="container justify-content-center mt-4" id="entretenimento">
        <img src="img/Up.png" alt="entretenimentoimg">
            <h3>❱ Entretenimento:</h3>
            <p>
                8ball - Faça alguma pergunta e a bola magica ira responeder.<br/>
                fakemsg - Mande uma mensagem falsa.<br/>
                ship - Veja a porcentade de amor entre dois membros.<br/>
                beijar - Beije algum membro por Gif.<br/>
                matar - Mate algum membro por Gif.<br/>
                gato - Veja fotinhas de gatos.<br/>
            </p>
        </div>

        <div class="container justify-content-center mt-4" id="moderacao">
        <img src="img/Alerta.png" alt="moderaçaoimg">
            <h3>❱ Moderação</h3>
            <p>
                ban - Bana algum membro.<br/>
                unban - Desbana algum membro.<br/>
                unbanall - Desbana todos membros.<br/>
                kick - Expulse algum membro.<br/>
                mute - Mute algum membro.<br/>
                unmute - Desmute algum membro.<br/>
                setadv - Sete uma Advertência em algum membro.<br/>
                remadv - Remova todas Advertências.<br/>
                setadvs - Sete uma Advertência Staff em algum Staff.<br/>
                remadvs - Remova todas Advertências Staffs. <br/>
            </p>
        </div>

        <div class="container justify-content-center mt-4" id="registro">
        <img src="img/sla2.png" alt="registroimg">
            <h3>❱ Registro:</h3>
            <p>
                s.sistemas - Abra o meu menu todos os meus sistemas para configura-los.<br/>
                s.registro - Configure totalmente o sistema de Registro. (Nesse menu é possivel configurar totalmente o registro por reação!)<br/>
                s.registrar - Registre algum membro com os cargos configurados em s.registro.<br/>
                s.rank - veja o top 10 registradores no servidor.<br/>
            </p>
        </div>

        <div class="container justify-content-center mt-4" id="sistemas">
        <img src="img/Config.png" alt="sistemasimg">
            <h3>❱ Sistemas:</h3>
            <p>
                s.sistemas - Abra o meu menu todos os meus sistemas para configura-los.<br/>
                s.welcome - Configure a mensagem de Entrada.<br/>
                s.saida - Configure a mensagem de saída.<br/>
                s.autorole - Configure a adição de cargo quando algum membro entra no servidor.<br/>
                s.logs - Configure o registro de auditoria em algum canal no servidor separadamente.<br/>
            </p>
        </div>

        <div class="container justify-content-center mt-4" id="utils">
        <img src="img/Celular.png" alt="utilsimg">
        <h3> ❱ Utilidades:</h3>
        <p>
            marry - Case com algum membro.<br/>
            divorce - Divorcia-se de algum membro.<br/>
            mygif - Configure seu Gif de Ban e Mute.<br/>
            div - Veja quantas pessoas você convidou para o serever.<br/>
            avatar - Veja a foto de perfil de alguem.<br/>
            lock - Tranque algum chat.<br/>
            unlock - Destranque algum chat.<br/>
        </p>
        </div>

        <div class="container justify-content-center mt-4" id="vips">
        <img src="img/Vip.png" alt="vipsimg">
            <h3>❱ Vip's e Famílias:</h3>
            <p>
                s.sistemas - Abra o meu menu todos os meus sistemas para configura-los<br/>
                s.config - Configure os Vip's e Famílias.<br/>
                s.vip - Aqui o membro vip podera configurar sua tag e sala vip.<br/>
                s.familia - Aqui os Líders de Fampilias podera configurar a tag e sala de sua família.<br/>
                s.addvip - O membro vip podera adicionar sua tag Vip em algum membro.<br/>
                s.remvip - Aqui o membro vip podera remover sua tag vip de algum membro.<br/>
                s.addfam - Aqui o Líder de Família podera adicionar a tag de sua Família em algum membro.<br/>
                s.remfam - Aqui o Líder de Família podera remover a tag de sua Família de algum membro.<br/>
            </p>
        </div> 
    </section>
    
   
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/index.js')}}"></script>
        
</body>

</html>