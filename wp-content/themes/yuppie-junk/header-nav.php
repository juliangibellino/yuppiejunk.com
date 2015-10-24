    <header class="ypj-header" role="header" ng-controller="headerCtrl" data-ng-class="{'is-transparent' : !hasBackground}">
        <div class="ypj-inner-wrapper" data-ng-class="{'is-collapsed' : !hasBackground}">
            <div class="ypj-menu-button" data-ng-click="toggleMenu()" ng-class="{'active' : isMenuActive }"></div>
            <nav class="ypj-navigation" role="navigation">
                <div class="ypj-header-logo" data-ng-class="{'has-logo' : hasBackground}">
                    <a href="/"><img src="/wp/wp-content/themes/yuppie-junk/library/images/yuppie-junk-hero-logo.png" alt="Yuppie Junk" /></a>
                </div>
                <ul class="ypj-main-nav" ng-class="{'active' : isMenuActive, 'has-logo' :  hasBackground}">
                    <li><a href="/#!/#episodes">Recent Episodes</a></li>
                    <li><a href="/#!/#about">About</a></li>
                </ul>
            </nav>
        </div>
    </header>