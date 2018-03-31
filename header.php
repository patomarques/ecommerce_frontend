<div class="full-bar-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-info-top">
                    <li>
                        <span class="text">Atendimento: (XX)XXXX XXXX</span>
                    </li>
                    <li>
                        <span class="text">Whatsapp: (XX)XXXX XXXX</span>
                    </li>
                    <li>
                        <span class="text">Bem-Vindo. <a href="#">Novo Usuário?</a></span>
                    </li>
                    <li>
                        <a href="#" class="btn-icon icon-bag">Meus Pedidos</a>
                    </li>
                    <li class="minha-conta">
                        <a href="#" class="btn-icon icon-user">Minha Conta</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="header-site">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <a href="#" class="logo">
                    <img src="img/logo.png" alt="logo site" class="logo-img">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <form action="#" method="POST" id="formSearch">
                    <input type="text" name="search" id="search" class="search" placeholder="Faça sua busca aqui..." required>
                    <button type="submit" class="btn-ok">OK</button>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="cart-top">
                    <a href="#" class="cart-link">
                        <!--<i class="cart-icon"></i>-->
                        <span class="text">Minhas Compras</span>
                        <span class="items">02 itens</span>
                        <span class="total">R$ 199,90</span>
                    </a>
                    <table class="table hiddenn" id="cartDetails">
                        <tr>
                            <th colspan="3">Item 01</th>
                        </tr>
                        <tr>
                            <th colspan="3">Item 02</th>
                        </tr>
                        <tr>
                            <th class="text-left"><b>TOTAL</b></th>
                            <th class="text-center">02 ITENS</th>
                            <th class="text-right">R$ 199,90</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="full-bar-menu bg-azul">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="menu-bar">
                    <a href="" class="btn-all-categories">Todas as categorias</a>
                    <ul class="list-all-categories hidden">
                        <?php for($x=1; $x < 20; $x++){ ?>
                            <li>Categoria <?= $x ?></li>
                        <?php } ?>
                    </ul>

                    <header>
                        <nav class="top-menu">
                            <div class="navTrigger hidden-lg">
                                <i></i><i></i><i></i>
                                <span class="menu"></span>
                            </div>
                            <ul class="list-menu visible-lg">
                                <li class="subitem-menu"><a href="#" class="item"><i class="icon-moveis"></i> Móveis</a></li>
                                <li class="subitem-menu"><a href="#" class="item"><i class="icon-eletros"></i> Eletros</a></li>
                                <li class="subitem-menu"><a href="#" class="item"><i class="icon-informatica"></i> Informática</a></li>
                                <li class="subitem-menu"><a href="#" class="item"><i class="icon-cama"></i> Cama, mesa e banho</a></li>
                                <li class="subitem-menu"><a href="#" class="item"><i class="icon-telefonia"></i> Telefonia</a></li>
                                <li class="subitem-menu"><a href="#" class="item"><i class="icon-decoracao"></i> Decoração</a></li>
                                <li class="subitem-menu"><a href="#" class="item"><i class="icon-lazer"></i> Lazer</a></li>
                            </ul>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>
</div>