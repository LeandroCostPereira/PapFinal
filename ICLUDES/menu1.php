 <div class="menu">
    <label for="toggle"><img src="Imagens/icone.png" alt="" srcset="" height= "40px" width="40px"; class="img10"></label>
    <input type="checkbox" name="" id="toggle">
    <ul id="list">
        <li class="item"><a href="index.php" class="link"><img src="../Imagens/Logo_montagem/Icons 24px/home.png" alt=""> Home</a></li>
        <li class="item"><a href="quem_somos.php" class="link"><img src="../Imagens/Logo_montagem/Icons 24px/user.png" alt="">Quem somos</a></li>
        <li class="item"><a href="contacto.php" class="link"><img src="../Imagens/Logo_montagem/Icons 24px/contact.png" alt=""> Contactos</a></li>
        <li class="item"><a href="../pag_sec/leilao_listagem.php?Id= <?php echo $row['Id_Utilizador'];?>" class="link"><img src="../Imagens/Logo_montagem/Icons 24px/price_tag.png" alt=""> Leilão</a></li>
        <li class="item fec"><a href="../php/LogOut.php" class="link "><img src="../Imagens/Logo_montagem/Icons 24px/logout.png" alt=""> Log Out</a></li>
        <li class="item fec"><a href="Fav.php?pagina=0" class="link"><img src="../Imagens/Logo_montagem/Icons 24px/favoritos2.png" alt="" width="20px" height="20px"> Favoritos</a></li>
    </ul> 
</div>