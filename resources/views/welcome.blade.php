<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="block1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
</head>
<body>
    <div id="popUpOptions">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>        <section class="optionButtons">        
            <button type="button" class="optionButtons" id="createGroup"><i class="bi bi-plus-circle-fill"></i></button>
            novo grupo
        </section>
        <section class="optionButtons">        
            <button type="button" class="optionButtons" id="conectAccount"><i class="bi bi-people-fill"></i></button>
            sair
        </section>
    </div>
    <div id="NotificationsConfig">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>    
    </div>
    <div id="accountConfig">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>
    </div>
    <div id="help">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>
    </div>
    <div id="shortCutConfig">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>
    </div>
    <div id="popUpNotifications">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>
        <form action="" id="notification">
            <div id="notificationMessage">
                <textarea name="" id="messageAutor" rows="2"></textarea>
            </div>
            <div id="informations" class="block">
                <section id="urgency" class="item">
                    <h4>Urgência</h4>
                    <div id="urgencyLevel" class="informationsProperty">
                        <h4>breve</h4>
                    </div>
                </section>
                <section id="solved" class="item">
                    <h4>Concluido?</h4>
                    <button id="solvedButton" class="informationsProperty">sim</button>
                </section>
                <section id="term" class="item">
                    <h4>Solucionar até</h4>
                    <input type="time" style="height: 40%;" class="informationsProperty">
                </section>
            </div>
            <div id="toPostpone" class="block">
                <h4>Reagendar alarmes para quando?</h4>
                <div style="width: 100%; height: 50%; display: flex; align-items: center; justify-content: space-evenly;">
                    <h4>Dia:</h4>
                    <input type="date">
                    <h4>Horário:</h4>
                    <input type="time">
                </div>
                <input type="submit">
            </div>
            <div id="response" class="block"></div>
        </form>
    </div>
    <div id="principalBody">
        <div id="block1">
            <button id="back" class="back"><i class="bi bi-arrow-left"></i></button>
            <section id="buttonsConfig">
                <button id="config" class="config" onclick="alternateConfigContacts()"><i class="bi bi-gear-fill"></i></button>
                <button id="user" class="config"><i class="bi bi-person-fill"></i></button>
            </section>
        </div>
        <div id="block2">
            <section id="topBar">
                <div id="search-options">
                    <section id="searchButton">
                        <input type="search" id="searchBar" placeholder="Pesquisar conversa">
                    </section>
                    <section id="buttonOptions">
                        <button id="option" class="option" onclick="openOptions()"><i class="bi bi-three-dots-vertical"></i></button>
                    </section>
                </div>     
            </section>
            <section id="contacts">
                <section id="people">
                    <section id="contact1" class="contact">
                        <section class="photoContact"></section>
                        <section class="name">Grupo Adm</section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact2" class="contact">
                        <section class="photoContact"></section>
                        <section class="name">Narcisa</section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact3" class="contact">
                        <section class="photoContact"></section>
                        <section class="name">Rafaela</section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact4" class="contact">
                        <section class="photoContact"></section>
                        <section class="name">Leo</section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact5" class="contact">
                        <section class="photoContact"></section>
                        <section class="name">Renan</section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact6" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact7" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact8" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact9" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact10" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact11" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact12" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact13" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact14" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact15" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                </section>
                <section id="groups"></section>
            </section>
            <section id="simpleConfiguration">
                <section class="configs" id="photoName">
                    <div id="photo"></div>
                    <h3></h3>
                </section>
                <section class="configs" id="notifiations">
                    <h3>Notificações</h3>
                    <i class="bi bi-bell"></i>
                </section>
                <section class="configs" id="account">
                    <h3>Conta</h3>
                    <i class="bi bi-person-fill"></i>
                </section>
                <section class="configs" id="theme">
                    <h3>Tema</h3>
                    <i class="bi bi-droplet-half"></i>
                </section>
                <section class="configs" id="help">
                    <h3>Ajuda</h3>
                    <i class="bi bi-question-lg"></i>
                </section>
                <section class="configs" id="shortCut">
                    <h3>Atalhos do teclado</h3>
                    <i class="bi bi-card-text"></i>
                </section>
            </section>
        </div>
        <div id="block3">
            <section id="contactInformations"></section>
            <section id="conversation"></section>
            <section id="message">
                <form action="/Send" method="POST" enctype="multipart/form-data">
                    <button type="button" id="openFile" onclick="openFiles()"><i class="bi bi-file-earmark-plus-fill"></i></button>
                    <div id="hiddenButtonFiles">
                        <input type="file" class="writeMessage" id="chooseFiles"></input>
                    </div>
                    <textarea class="writeMessage" id="textBox"></textarea>
                    <input type="submit" value="Enviar" class="writeMessage" id="Send"></input>
                </form>
            </section>
        </div>
    </div>
    <script src="conversas.js"></script>
</body>
</html>
