<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tour Dreams</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="fontes/fonte.css" rel="stylesheet">
      <script src="js/jquery-3.2.1.min.js"></script>
      </script>
      <script type="text/javascript">

      $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
          $('header').addClass("sticky");
        }
        else{
          $('header').removeClass("sticky");
        }
        });

      </script>
      <?php
        include('tradutor.php');
       ?>
  </head>
  <body>
		<header>
			<?php include('menu.php'); ?>
		</header>
		<section>
			<div id="principal">
				<div id="txt_categoria">
					<p>PRAIAS</p>
				</div>
				<div class="espacoCat">
				   <button class="button_melhoresDestinos" onClick="plusIndex(-1)" id="btn1">&#10094; </button>
				   <div class="produtos_div_melhoresDestinos">
  						  <img src="imagens/hotel1.jpg" alt="" class="imagem_melhoresdestinos">

  							<div class="img_icone_local">
  								<img  src="imagens/localizacao.png" alt="">
  							</div>

							<p class="txt_local_parceiro" >São Paulo</p>
              <div class="icone_wifi">
								<img src="imagens/wifi.png" alt="">
							</div>
								<p class="txt_caracteristica_hotel_melhoresDestinos">Wi-fi grátis</p>
								<p class="txt_diaria_hotel" >Diárias a partir de</p>
								<p class="txt_rs" >R$</p>
								<p class="txt_preco_hotel">200</p>
								<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

					</div>
					<div class="produtos_div_melhoresDestinos">
						  <img src="imagens/hotel1.jpg" alt=""  class="imagem_melhoresdestinos">
							<div class="img_icone_local">
								<img  src="imagens/localizacao.png" alt="">
							</div>
							<p class="txt_local_parceiro" >São Paulo</p>
							<!--<div class="icone_wifi">
								<img src="imagens/wifi.png"  alt="">
							</div>-->
								<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
								<p class="txt_diaria_hotel" >Diárias a partir de</p>
								<p class="txt_rs" >R$</p>
								<p class="txt_preco_hotel">200</p>
								<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

					</div>
					<div class="produtos_div_melhoresDestinos">
						  <img src="imagens/hotel1.jpg" alt=""  class="imagem_melhoresdestinos">
							<div class="img_icone_local">
								<img  src="imagens/localizacao.png" alt="">
							</div>
							<p class="txt_local_parceiro" >São Paulo</p>
							<!--<div class="icone_wifi">
								<img src="imagens/wifi.png"  alt="">
							</div>-->
								<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
								<p class="txt_diaria_hotel" >Diárias a partir de</p>
								<p class="txt_rs" >R$</p>
								<p class="txt_preco_hotel">200</p>
								<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

					</div>
					<button class="button_melhoresDestinos" onClick="plusIndex(1)" id="btn2">&#10095; </button>

				</div>
				<div id="txt_categoria">
					<p>INVERNO</p>
				</div>
				<div class="espacoCat">
				  <button class="button_melhoresDestinos" onClick="plusIndex(-1)" id="btn1">&#10094; </button>
					   <div class="produtos_div_melhoresDestinos">
						  <img src="imagens/hotel9.jpg" alt=""  class="imagem_melhoresdestinos">
							<div class="img_icone_local">
								<img  src="imagens/localizacao.png" alt="">
							</div>
							<p class="txt_local_parceiro" >São Paulo</p>
							<!--<div class="img_icone_local">
								<img src="imagens/wifi.png" alt="">
							</div>-->
								<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
								<p class="txt_diaria_hotel" >Diárias a partir de</p>
								<p class="txt_rs" >R$</p>
								<p class="txt_preco_hotel">200</p>
								<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

						</div>
						<div class="produtos_div_melhoresDestinos">
							  <img src="imagens/hotel9.jpg" alt=""  class="imagem_melhoresdestinos">
								<div class="img_icone_local">
									<img  src="imagens/localizacao.png" alt="">
								</div>
								<p class="txt_local_parceiro" >São Paulo</p>
								<!--<div class="icone_wifi">
									<img src="imagens/wifi.png"  alt="">
								</div>-->
									<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
									<p class="txt_diaria_hotel" >Diárias a partir de</p>
									<p class="txt_rs" >R$</p>
									<p class="txt_preco_hotel">200</p>
									<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

						</div>
						<div class="produtos_div_melhoresDestinos">
							  <img src="imagens/hotel9.jpg" alt=""  class="imagem_melhoresdestinos">
								<div class="img_icone_local">
									<img  src="imagens/localizacao.png" alt="">
								</div>
								<p class="txt_local_parceiro" >São Paulo</p>
								<!--<div class="icone_wifi">
									<img src="imagens/wifi.png"  alt="">
								</div>-->
									<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
									<p class="txt_diaria_hotel" >Diárias a partir de</p>
									<p class="txt_rs" >R$</p>
									<p class="txt_preco_hotel">200</p>
									<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

						</div>
					<button class="button_melhoresDestinos" onClick="plusIndex(1)" id="btn2">&#10095; </button>

				</div>

				<div id="txt_categoria">
					<p>CAMPOS</p>
				</div>
				<div class="espacoCat">
					<button class="button_melhoresDestinos" onClick="plusIndex(-1)" id="btn1">&#10094; </button>
					   <div class="produtos_div_melhoresDestinos">
						  <img src="imagens/hotel3.jpg" alt=""  class="imagem_melhoresdestinos">
							<div class="img_icone_local">
								<img  src="imagens/localizacao.png" alt="">
							</div>
							<p class="txt_local_parceiro" >São Paulo</p>
							<!--<div class="img_icone_local">
								<img src="imagens/wifi.png" alt="">
							</div>-->
								<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
								<p class="txt_diaria_hotel" >Diárias a partir de</p>
								<p class="txt_rs" >R$</p>
								<p class="txt_preco_hotel">200</p>
								<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

						</div>
						<div class="produtos_div_melhoresDestinos">
							  <img src="imagens/hotel8.jpg" alt=""  class="imagem_melhoresdestinos">
								<div class="img_icone_local">
									<img  src="imagens/localizacao.png" alt="">
								</div>
								<p class="txt_local_parceiro" >São Paulo</p>
								<!--<div class="icone_wifi">
									<img src="imagens/wifi.png"  alt="">
								</div>-->
									<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
									<p class="txt_diaria_hotel" >Diárias a partir de</p>
									<p class="txt_rs" >R$</p>
									<p class="txt_preco_hotel">200</p>
									<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

						</div>
						<div class="produtos_div_melhoresDestinos">
							  <img src="imagens/hotel3.jpg" alt=""  class="imagem_melhoresdestinos">
								<div class="img_icone_local">
									<img  src="imagens/localizacao.png" alt="">
								</div>
								<p class="txt_local_parceiro" >São Paulo</p>
								<!--<div class="icone_wifi">
									<img src="imagens/wifi.png"  alt="">
								</div>-->
									<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
									<p class="txt_diaria_hotel" >Diárias a partir de</p>
									<p class="txt_rs" >R$</p>
									<p class="txt_preco_hotel">200</p>
									<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

						</div>
					<button class="button_melhoresDestinos" onClick="plusIndex(1)" id="btn2">&#10095; </button>

				</div>
				<div id="txt_categoria">
					<p>FAZENDAS</p>
				</div>
				<div class="espacoCat">
					<button class="button_melhoresDestinos" onClick="plusIndex(-1)" id="btn1">&#10094; </button>
					   <div class="produtos_div_melhoresDestinos">
						  <img src="imagens/hotel5.jpg" alt=""  class="imagem_melhoresdestinos">
							<div class="img_icone_local">
								<img  src="imagens/localizacao.png" alt="">
							</div>
							<p class="txt_local_parceiro" >São Paulo</p>
							<!--<div class="img_icone_local">
								<img src="imagens/wifi.png" alt="">
							</div>-->
								<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
								<p class="txt_diaria_hotel" >Diárias a partir de</p>
								<p class="txt_rs" >R$</p>
								<p class="txt_preco_hotel">200</p>
								<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

						</div>
						<div class="produtos_div_melhoresDestinos">
							  <img src="imagens/hotel5.jpg" alt=""  class="imagem_melhoresdestinos">
								<div class="img_icone_local">
									<img  src="imagens/localizacao.png" alt="" >
								</div>
								<p class="txt_local_parceiro" >São Paulo</p>
								<!--<div class="icone_wifi">
									<img src="imagens/wifi.png"  alt="">
								</div>-->
									<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
									<p class="txt_diaria_hotel" >Diárias a partir de</p>
									<p class="txt_rs" >R$</p>
									<p class="txt_preco_hotel">200</p>
									<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

						</div>
						<div class="produtos_div_melhoresDestinos">
							  <img src="imagens/hotel5.jpg" alt=""  class="imagem_melhoresdestinos">
								<div class="img_icone_local">
									<img  src="imagens/localizacao.png" alt=""  >
								</div>
								<p class="txt_local_parceiro" >São Paulo</p>
								<!--<div class="icone_wifi">
									<img src="imagens/wifi.png"  alt="">
								</div>-->
									<p class="txt_caracteristica_hotel">Wi-fi grátis</p>
									<p class="txt_diaria_hotel" >Diárias a partir de</p>
									<p class="txt_rs" >R$</p>
									<p class="txt_preco_hotel">200</p>
									<input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

						</div>
					<button class="button_melhoresDestinos" onClick="plusIndex(1)" id="btn2">&#10095; </button>

				</div>
			</div>

		</section>
		<footer>
			<?php include('rodape.php'); ?>
		</footer>

  </body>
</html>