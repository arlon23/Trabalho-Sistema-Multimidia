<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>CarroMídia</title>
        <link rel="stylesheet" type="text/css" href="{{asset('/GoogleMaps/css/estilo.css')}}">
    </head>
 
    <body>
    	<div class="col-md-12" id="site">
        
            <div class="col-md-6">
                <h1>CarroMídia</h1>
            
                <form method="post" action="{{route('teste')}}">
                    <fieldset>
                        <legend>Criar rotas</legend>
                        
                        <div>
                            <label for="txtEnderecoPartida">Endereço de partida:</label>
                            <input type="text" id="txtEnderecoPartida" name="txtEnderecoPartida" />
                        </div>
                        
                        <div>
                            <label for="txtEnderecoChegada">Endereço de chegada:</label>
                            <input type="text" id="txtEnderecoChegada" name="txtEnderecoChegada" />
                        </div>
                        
                        <div>
                            <input type="submit" id="btnEnviar" name="btnEnviar" value="Enviar" />
                        </div>
                    </fieldset>
                </form>
            </div>
            
            <div class="col-md-6">
                <div id="mapa"></div>
                
                <div id="trajeto-texto"></div>
            </div>
        </div>
        
        <script src="{{asset('GoogleMaps/js/jquery.min.js')}}"></script>
		
        <!-- Maps API Javascript -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtn-h1TL6P-CA62ngTbBI-QyccxmMGTGw&callback=initMap"></script>
 
        <!-- Arquivo de inicialização do mapa -->
		<script src="{{asset('GoogleMaps/js/mapa.js')}}"></script>
    </body>
</html>