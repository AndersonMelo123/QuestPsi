<!DOCTYPE html>
<html lang="pt-br">

<head>
<!-- Import -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
<!--icones --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Teste Psicológico</title>
<link rel="shortcut icon" type="text/css" href="img/ico.png">
</head>
<!-- Conexão --> 

    




<body>
    <main>
    <br>
        <div class="row center-align">
            <div class="icon-block">
                <img class="responsive-img" src="img/logopsi.png" width="350">
            </div>
        </div>
  

<div class="container">
      <div class="row center">
<div class="container hoverable">       
    <div class="card horizontal">
    <div class="card-image large">
    <ul>
    <li>
    </div>
        <div class="card-stacked #fec826">
        <div class="card-action center-align"> 
        </div>
            <h4 class="black-text">QUESTIONÁRIO PSICOLÓGICO PPGIA</h4>
            <p class="flow-text black-text">Este teste tem um caráter exclusivamente de orientação, pelo que não substitui um diagnóstico feito por um especialista na área da saúde mental.</p>
            <br>
            <p class="flow-text"> Durante os últimos 14 dias, em quantos foi afetado/a por algum dos seguintes problemas?</p>
            <br>
            <div class="card-content card-action left-align white black-text">
                <!-- -->
                <div id="contact">
                <form class="col s12" action="retorno.php" method="post">
                    
                       
                        <h5>1.Sinto-me motivado em fazer as coisas com prazer.</h5>
                                <p> 
                                <label>
                                  <input name="group1" value="0" type="radio" required />
                                  <span class="black-text">Completamente insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group1" value="1" type="radio" required/>
                                    <span class="black-text">Muito insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group1" value="2" type="radio"  required/>
                                    <span class="black-text">Um pouco insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group1" value="3" type="radio" required/>
                                    <span class="black-text">Nem insatisfeito e nem satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group1" value="4" type="radio" required/>
                                    <span class="black-text">Um pouco satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group1" value="5" type="radio" required/>
                                    <span class="black-text">Muito satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group1" value="6" type="radio" required/>
                                    <span class="black-text">Completemante satisfeito</span>
                                  </label>
                                </p>
                            <br>
                            <h5>2.Senti desânimo, desalento ou falta de esperança.</h5>
                                <p> 
                                <label>
                                  <input name="group2" value="0" type="radio" required />
                                  <span class="black-text">Completamente insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group2" value="1" type="radio" required/>
                                    <span class="black-text">Muito insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group2" value="2" type="radio"  required/>
                                    <span class="black-text">Um pouco insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group2" value="3" type="radio" required/>
                                    <span class="black-text">Nem insatisfeito e nem satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group2" value="4" type="radio" required/>
                                    <span class="black-text">Um pouco satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group2" value="5" type="radio" required/>
                                    <span class="black-text">Muito satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group2" value="6" type="radio" required/>
                                    <span class="black-text">Completemante satisfeito</span>
                                  </label>
                                </p>
                            <br>
                            <h5>3.Tive dificuldade em adormecer ou em dormir sem interrupções, ou dormi demais.</h5>
                            <p> 
                                <label>
                                  <input name="group3" value="0" type="radio" required />
                                  <span class="black-text">Completamente insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group3" value="1" type="radio" required/>
                                    <span class="black-text">Muito insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group3" value="2" type="radio"  required/>
                                    <span class="black-text">Um pouco insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group3" value="3" type="radio" required/>
                                    <span class="black-text">Nem insatisfeito e nem satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group3" value="4" type="radio" required/>
                                    <span class="black-text">Um pouco satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group3" value="5" type="radio" required/>
                                    <span class="black-text">Muito satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group3" value="6" type="radio" required/>
                                    <span class="black-text">Completemante satisfeito</span>
                                  </label>
                            </p>
                            <br>
                            <h5>4.Senti cansaço ou falta de energia.</h5>
                            <p> 
                                <label>
                                  <input name="group4" value="0" type="radio" required />
                                  <span class="black-text">Completamente insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group4" value="1" type="radio" required/>
                                    <span class="black-text">Muito insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group4" value="2" type="radio"  required/>
                                    <span class="black-text">Um pouco insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group4" value="3" type="radio" required/>
                                    <span class="black-text">Nem insatisfeito e nem satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group4" value="4" type="radio" required/>
                                    <span class="black-text">Um pouco satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group4" value="5" type="radio" required/>
                                    <span class="black-text">Muito satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group4" value="6" type="radio" required/>
                                    <span class="black-text">Completemante satisfeito</span>
                                  </label>
                            </p>
                            <br>
                            <h5>5.Tive falta ou excesso de apetite.</h5>
                            <p> 
                                <label>
                                  <input name="group5" value="0" type="radio" required />
                                  <span class="black-text">Completamente insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group5" value="1" type="radio" required/>
                                    <span class="black-text">Muito insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group5" value="2" type="radio"  required/>
                                    <span class="black-text">Um pouco insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group5" value="3" type="radio" required/>
                                    <span class="black-text">Nem insatisfeito e nem satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group5" value="4" type="radio" required/>
                                    <span class="black-text">Um pouco satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group5" value="5" type="radio" required/>
                                    <span class="black-text">Muito satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group5" value="6" type="radio" required/>
                                    <span class="black-text">Completemante satisfeito</span>
                                  </label>
                            </p>
                            <br>
                            <h5>6.Senti que não gosto de mim próprio/a — ou que sou um(a) falhado/a ou me desiludi a mim próprio/a ou à minha família.</h5>
                            <p> 
                                <label>
                                  <input name="group6" value="0" type="radio" required />
                                  <span class="black-text">Completamente insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group6" value="1" type="radio" required/>
                                    <span class="black-text">Muito insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group6" value="2" type="radio"  required/>
                                    <span class="black-text">Um pouco insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group6" value="3" type="radio" required/>
                                    <span class="black-text">Nem insatisfeito e nem satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group6" value="4" type="radio" required/>
                                    <span class="black-text">Um pouco satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group6" value="5" type="radio" required/>
                                    <span class="black-text">Muito satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group6" value="6" type="radio" required/>
                                    <span class="black-text">Completemante satisfeito</span>
                                  </label>
                            </p>
                            <br>
                            <h5>7.Tive dificuldade em concentrar-me nas coisas, como ao ler o jornal ou ver televisão.</h5>
                            <p> 
                                <label>
                                  <input name="group7" value="0" type="radio" required />
                                  <span class="black-text">Completamente insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group7" value="1" type="radio" required/>
                                    <span class="black-text">Muito insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group7" value="2" type="radio"  required/>
                                    <span class="black-text">Um pouco insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group7" value="3" type="radio" required/>
                                    <span class="black-text">Nem insatisfeito e nem satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group7" value="4" type="radio" required/>
                                    <span class="black-text">Um pouco satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group7" value="5" type="radio" required/>
                                    <span class="black-text">Muito satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group7" value="6" type="radio" required/>
                                    <span class="black-text">Completemante satisfeito</span>
                                  </label>
                            </p>
                            <br>
                            <h5>8.Movimentei-me ou falei tão lentamente que outras pessoas poderão ter notado. Ou o oposto: estive agitado/a a ponto de andar de um lado para o outro muito mais do que é habitual.</h5>
                            <p> 
                                <label>
                                  <input name="group8" value="0" type="radio" required />
                                  <span class="black-text">Completamente insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group8" value="1" type="radio" required/>
                                    <span class="black-text">Muito insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group8" value="2" type="radio"  required/>
                                    <span class="black-text">Um pouco insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group8" value="3" type="radio" required/>
                                    <span class="black-text">Nem insatisfeito e nem satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group8" value="4" type="radio" required/>
                                    <span class="black-text">Um pouco satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group8" value="5" type="radio" required/>
                                    <span class="black-text">Muito satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group8" value="6" type="radio" required/>
                                    <span class="black-text">Completemante satisfeito</span>
                                  </label>
                            </p>
                            <br>
                            <h5>9.Pensei que seria melhor estar morto/a, ou em magoar-me a mim próprio/a de alguma forma.</h5>
                            <p> 
                                <label>
                                  <input name="group9" value="0" type="radio" required />
                                  <span class="black-text">Completamente insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group9" value="1" type="radio" required/>
                                    <span class="black-text">Muito insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group9" value="2" type="radio"  required/>
                                    <span class="black-text">Um pouco insatisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group9" value="3" type="radio" required/>
                                    <span class="black-text">Nem insatisfeito e nem satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group9" value="4" type="radio" required/>
                                    <span class="black-text">Um pouco satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group9" value="5" type="radio" required/>
                                    <span class="black-text">Muito satisfeito</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name="group9" value="6" type="radio" required/>
                                    <span class="black-text">Completemante satisfeito</span>
                                  </label>
                            </p>
                        
                        <br>
                        <br>
                        
                        <div class="center">
                            <button class="btn waves-effect waves-light teal" type="submit">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                        
                   
                    </form>    
                </div>
            </div>
            
<div class="card-action center-align">
&nbsp;&nbsp;&nbsp;<a id="logo-container" class="brand-logo"> <img src="img/logo.png" width="50" alt="logo center-align" ></a>
</div>
      
</div>
</div>
</div>
</div>
</div>

</main>
</body>
    
