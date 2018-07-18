<nav>
    <div class="nav-container">
        <div class="nav-logo">
            <a href="/"><?=$this->getContext()->getConfigName()?></a>
        </div>
        <ul class="nav-links">
            <?php foreach ($this->getContext()->listRootPages() as $page) { ?>
                <li>
                    <a <?=$page->isCurrent()?'class="active"':''?> href="<?=$page->getUrl()?>">
                        <?=$page->getMenuLabel()?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>
