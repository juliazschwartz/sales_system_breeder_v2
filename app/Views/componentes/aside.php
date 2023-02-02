<?php $active = $_SERVER['REQUEST_URI'] ;
?>
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
               <img src="/assets/img/logo-comfauna.jpeg" width=200px height=100px></img>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Financeiro</span>
            </li>
            <li class="menu-item" id= 'dashboard'>
              <a href="dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics"></div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts"></div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu"></div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-navbar.html" class="menu-link">
                    <div data-i18n="Without navbar"></div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-container.html" class="menu-link">
                    <div data-i18n="Container"></div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-fluid.html" class="menu-link">
                    <div data-i18n="Fluid"></div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-blank.html" class="menu-link">
                    <div data-i18n="Blank"></div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Plantel</span>
            </li>
            <li class="menu-item" id="especies">
              <a href="especies" class="menu-link">
                <i class="menu-icon tf-icons bx bx-folder-open"></i>
                <div data-i18n="">Espécies</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item" >
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account"></div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div data-i18n="Notifications"></div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-connections.html" class="menu-link">
                    <div data-i18n="Connections"></div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item" id="estoque">
              <a href="estoque" class="menu-link">
                <i class="menu-icon tf-icons bx bx-folder-open"></i>Estoque de Animais
                <div data-i18n="Authentications"></div>
              </a>
           
            </li>
            <li class="menu-item" id="compras">
              <a href="compras" class="menu-link ">
                <i class="menu-icon tf-icons bx bxs-cart-add"></i>Compra de Animais
                <div data-i18n="Extended UI"></div>
              </a>
            </li>
     
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Loja</span></li>
            <!-- Cards -->
            <li class="menu-item"  id = "produtos">
              <a href="produtos" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Produtos</div>
                <span class="badge rounded-pill bg-label-danger embreve mx-2">Em breve</span>
              </a>
            </li>
            <!-- User interface -->
            <li class="menu-item" id="clientes">
              <a href="clientes" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>Clientes
                <div data-i18n="User interface"></div>
              </a>
              
            </li>
            <li class="menu-item" id="vendas">
              <a href="vendas" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dollar-circle"></i>Vendas
                <div data-i18n="Boxicons"></div>
              </a>
            </li>

            <!-- Extended components -->
           

            <li class="menu-item" id="nfe">
              <a href="nfe" class="menu-link">
                <i class="menu-icon tf-icons bx bx-receipt"></i>NFE
                <div data-i18n="Boxicons"></div>
              </a>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Controle de Usuários</span></li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements"></div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="forms-basic-inputs.html" class="menu-link">
                    <div data-i18n="Basic Inputs"></div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-input-groups.html" class="menu-link">
                    <div data-i18n="Input groups"></div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts"></div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.html" class="menu-link">
                    <div data-i18n="Vertical Form"></div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form"></div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Tables -->
            <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables"></div>
              </a>
            </li>
            <!-- Misc -->
        
          </ul>
        </aside>

        <script>
          var active = "<?=$active?>".split('/')[1];
          console.log(document.getElementById(active).classList.add('active'));

        </script>