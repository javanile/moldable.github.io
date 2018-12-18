<?php
/**
 *
 */

$context = $this->getContext();
$currentRootPage = $context->getCurrentRootPage();
?>

<div class="sidebar sidebar-left">

    <?php if (!$currentRootPage->hasSubpages()) { ?>
        <h3 class="sidebar-category active">Menu</h3>
        <ul class="sidebar-links">
            <?php foreach ($context->listRootPages() as $page) { ?>
                <li>
                    <a <?=$page->isCurrent()?'class="active"':''?> href="<?=$page->getUrl()?>">
                        <?=$page->getMenuLabel()?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php if ($currentRootPage->hasTerminalSubpages()) { ?>
        <h3 class="sidebar-category active"><?=$currentRootPage->getLabel()?></h3>
        <ul class="sidebar-links">
            <?php foreach ($this->getContext()->listTerminalSubpages() as $page) { ?>
                <li>
                    <a <?=$page->isCurrent()?'class="active"':''?> href="<?=$page->getUrl()?>">
                        <?=$page->getMenuLabel()?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php if ($currentRootPage->hasNonterminalSubpages()) { ?>
        <?php foreach ($currentRootPage->listNonterminalSubpages() as $page) { ?>
            <h3 class="sidebar-category active"><?=$page->getLabel()?></h3>
            <ul class="sidebar-links">
                <?php foreach ($page->listSubpages() as $subpage) { ?>
                    <li>
                        <a <?=$subpage->isCurrent()?'class="active"':''?> href="<?=$subpage->getUrl()?>">
                            <?=$subpage->getMenuLabel()?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    <?php } ?>

</div>
